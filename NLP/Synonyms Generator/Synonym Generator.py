# -*- coding: utf-8 -*-
"""
Created on Thu Jul 23 04:32:41 2020

@author: Araz Sharma
"""
#Code to Extract words from text files generated
#From list of words, choose 10-15 based on synonym capability
#Return a Dictionary with word & it's synonyms
 
#Importing Libraries
import random
import spacy
import enchant
nlp = spacy.load("en_core_web_sm") 

#List of common words found across Spelling and Word Lists
common_words = ["word","list","spelling","grade","bee", "week", "master", "reading", "read", "vocabulary"]

#Pyenchant Dictionary Object to check if word in English Dictionary
d = enchant.Dict("en_US")

#Accessing Input as Text File generated from Image

test = open("eng_test4.txt","r+")
lines = test.readlines()
#print("old list:",lines)
lines = list(dict.fromkeys(lines))
#print("new list:",lines)


final_lines = []
final_words = []

#Removing Newline characters
for line in lines:
    #print(line)
    line = line.strip('\n')
    final_lines.append(line)
    

#print("latest list:", final_lines)
final_lines = [i.lower() for i in final_lines]
#print("final_lines:",final_lines)

#To clean out & extract words

for line in final_lines:
    
    word = nlp(line)
    for i in word:
        #print(i.lemma_)
        #print("token is:",i)
        
        if(i.is_punct == 0 and i.like_num == 0 and i.text != " " ):
            #print(i.text)
            if(i.lemma_ not in common_words):
                if(i.text.isalpha()==0):
                    str2 = ""
                    for j in i.text:
                        if(j.isalpha()):
                            str2+=j
                    #print(str2)
                    if(str2!=""):
                        if(d.check(str2)):
                            final_words.append(str2)
                elif(d.check(i.text)):
                    final_words.append(i)

print((final_words))

#To get 20 Random Words from Final Word List

to_find = []
while(len(to_find)!=20):
    i = random.randrange(len(final_words))
    if i not in to_find:
        to_find.append(i)

print(to_find)

get_syn = [str(final_words[word]) for word in to_find]
print(get_syn)


#Importing Wordnet from NLTK to generate synonyms
from nltk.corpus import wordnet
 
#Provision for antonym in future
#anty_dict = {} 

#To store Synonyms
syn_dict = {}

#Generating Synonyms
for wrd in get_syn:
    check_wrd = nlp(wrd)
    #print(type(wrd))
    synonyms = []
    #antonyms = []
    for syn in wordnet.synsets(wrd): 
        for l in syn.lemmas(): 
                #print(l.name())
            if((l.name()).lower() != wrd): 
                
                for i in check_wrd:
                    if(i.lemma_ != l.name()):
                        synonyms.append(l.name()) 
                      #  if l.antonyms(): 
                       #       antonyms.append(l.antonyms()[0].name()) 
    synonyms = list(dict.fromkeys(synonyms))
    #antonyms = list(dict.fromkeys(antonyms))
    
    if(len(synonyms)>=3):
        syn_dict[wrd] = synonyms
        #anty_dict[wrd] = antonyms
         

#Final Dictionary for Words with their Synonyms
print(syn_dict) 
print("Number of words for Syn:",len(syn_dict))

#Future Scope
#print(anty_dict) 
#print("No. of words for Anty:", len(anty_dict))
 
