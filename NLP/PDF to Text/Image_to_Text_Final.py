# -*- coding: utf-8 -*-
"""
Created on Wed Jul 22 21:00:21 2020

@author: Araz Sharma
"""
#Importing Libraries & Required Variables
import pytesseract
import glob
from PDF_to_Image_final import pdf_names

#Tesseract Engine Location
pytesseract.pytesseract.tesseract_cmd = 'C:\\Program Files\\Tesseract-OCR\\tesseract.exe'

#Getting all the Image files we got from PDFs
img_files = glob.glob('*.png') 




#Iterating through all PDF Names & Matching with generated Images of each Page
for pdf in pdf_names:
    
    pgs = []
    for img in img_files:
        if pdf in img:
            pgs.append(img)
    # Function to sort Images according to Page Numbers
    def for_sort(x):
        return int(x[3:-(len(pdf) + 4)])
    # Sorted List of all pages of a PDF 
    pgs = sorted(pgs, key = for_sort)
    
    #To test if Files are correct
    #print("pdf is", pdf, "having:", pgs)       
    #print("")
    
    #Making Text File to write Text from PDF
    sample_txt = open(pdf + "_txt.txt", 'a+')
    
    
    
    for i in pgs:
        sample_txt.write(pytesseract.image_to_string(i))
       
        
    sample_txt.close()
    

