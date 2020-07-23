# -*- coding: utf-8 -*-
"""
Created on Thu Jul 23 03:35:13 2020

@author: Araz Sharma
"""

#To get Text Files from Word Lists

#Importing Libraries & Tesseract File Source
import pytesseract
import glob
pytesseract.pytesseract.tesseract_cmd = 'C:\\Program Files\\Tesseract-OCR\\tesseract.exe'


img_file = glob.glob('C:\\Users\\amols\\OneDrive\\Documents\\NLP\\Synonyms Test Cases\\*.jpg')
img_file_png = glob.glob('C:\\Users\\amols\\OneDrive\\Documents\\NLP\\Synonyms Test Cases\\*.png')

img_file.extend(img_file_png)

print(img_file)

#Writing output to text file

sample_text = open("eng_test5.txt","w+")

sample_text.write(pytesseract.image_to_string(img_file[3]))
sample_text.close()

