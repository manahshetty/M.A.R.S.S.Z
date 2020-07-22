# -*- coding: utf-8 -*-
"""
Created on Wed Jul 22 20:07:36 2020

@author: Araz Sharma
"""
# Importing Required Libraries
import fitz
import glob



#Making list to populate PDFs we need to convert to Images
pdffiles = []

# Finds all PDFs in target Directory Recursively
files = glob.glob('C:\\Users\\amols\\OneDrive\\Documents\\Kids Books PDFs\\**\*.pdf',  
                   recursive = True) 

for file in files:
    pdffiles.append(file)
    
#Total Number of PDFs found    
print("No of PDF are:", len(pdffiles))


#Code to convert the pdf to image   

# First Find Name of PDF file
for pdffile in pdffiles:
    mark = 0
    for i in range(len(pdffile)-1, 0, -1):
        
        if(pdffile[i]=="\\"):
          
            mark = i
            break
    
    name = pdffile[mark+1:-4]
    
# Use PyMuPDF to convert to PNG Image & Save 
    doc = fitz.open(pdffile)
    i = 1
    for pg in doc:
        
        pix = pg.getPixmap()
        output = "pg_" + str(i) + name+ ".png"
        pix.writePNG(output)
        i+=1



        