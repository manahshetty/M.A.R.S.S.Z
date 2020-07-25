# README

###UPDATE

The Final Submission will be in form of a link to our Website

We have created an Innovative & Fun approach to online education for the children of today, by using Natural Language Processing Techniques. The project looks at a website that generates fun assessment approaches to up student incentive to learn. The approach seeks to test and teach concepts in an innovative way while encouraging sharper concentration.
We have incorporated 2 types of Games, based on subjects taught in Schools, for children across Grades from Vth to VIIIth, with English Subject available for students of all grade.

Before we get to the games, it is important to understand how are these different from any other standard games one can create with simple codes.
The Beauty lies in the fact that these games are fully generated from the NLP scripts we have coded on our own, using existing open source libraries like spaCy & NLTK.

The technical uniqueness of our website lies in 2 aspects:

-> We have coded our own PDF to Text & Image to Text converter, using opensource OCR Software Tesseract

-> We have used NLP Techniques to extract educational content from the PDF/ Image sources

-> This makes our games scalable & unique, for we don't need teachers to manually read hundreds of pages to prepare QnA for games 

The First is a game generated from Subjects like Social Studies & Science. This system involves a deck of word clues consisting of all the key concepts from any given chapter from the subject. 
The assessment/gameplay requires a student to choose all the words that relate to a software generated keyword as clues. This aims to test the knowledge grasped by the student and his/her ability to relate and apply concepts taught.
Not only this is made fun by a points system for right & wrong answers, but also it is exceptionally unique, as it is fully automatically generated using Natural Language Processing Scripts!
The second game is compatible for all students across school, as it is based on the subject "English". Here, the teacher can upload an  image of a weekly word list provided in classrooms, and we generate a Find the Synonyms game from it!

The USP of our Project lies in its implementation, as it can analyse PDFs & Images, to convert them to text, with a software fully written by us, and using NLP concepts, generate our games from that!
This means that to scale it up, it is not required to manually scoure through Educational Content to generate Question & Answers for our Game. All that is required is the PDF or Images of Chapters of the Subject Books.
### PRODUCT FLOW
The site is user-specific. We have created an option for the user to log in as a student or as a teacher. The student can play the games, from a Menu of existing Subjects & Chapters pre-processed by us. This menu can easily be expanded with more PDFs on the subjects. We save immense processing time in keeping the generated keywords available to games, which can be dynamically played by students.

On signing in, a teacher would be presented with an option to upload a word list to generate 'Find the Synonyms' game for the English Subject. This will be processed in real time, using the scripts on our server, and will generate the game, which can be played by her students. 

-> So we have automated the process of feeding in an input in form of an image of Vocabulary Words Schools often provide, to generate the Game!

-> This has also been tested on various Images of Vocabulary Lists from the Net. More information on this lies in the NLP Folder

A Future scope for this is to have options enabled to monitor student progress as well as upload lectures with the relevant grade and subject tags. 

A student is presented with a catalog of lectures that are 'grade', 'subject' and 'chapter' seggregated. Each of these sections would present a game to the student. The gameplay is as follows:

-> A student is presented with a deck of 25 cards with word-clues on them.

-> The application generates a lecture specific key-phrase with a number. The number is a hint on the number of cards that relate to this keyphrase.

-> The student then picks cards that he/she thinks relate to this keyphrase.

    - If correct, the card turns green, and points are awarded.

    - On the selection of a wrong card, some points are deducted.

    - At the end of each question, the user is shown the correct answers, so as to ensure he learnt the concept

    

-> The test is on the students understanding of the concept and ability to relate the key terms.

-> A leaderboard will be included as a future scope, to make things interesting and build incentive.

-> For the Find the Synonyms Game, the format is similar to above, except the clues are replaced by words, and the deck contains synonyms along with other non-synonym words.

### CONFIGURATION INSTRUCTIONS

Tesseract OCR Software which will be Installed on our Server

We are using XAMPP version 7.3.1 for creating a webserver(localhost) and a database(phpMyAdmin) to store the user’s information.

### INSTALLATION INSTRUCTIONS

Installation of all libraries with specific versions as mentioned in Requirements.txt File

(Mentioning here for Convienience)

nltk==3.4.4

fitz==0.0.1.dev2

pyenchant==3.1.1

pytesseract==0.3.4
	
spacy==2.3.2


### OPERATING INSTRUCTIONS

-> NLP Operations

The website provides an option to upload Word Lists. The NLP Scripts will automatically run on the server to process this to generate the Game

The PDF to Text NLP Scripts will be used to generate more games for different Chapters, which will be pre-processed by us, and added to the Website, to save Execution Time for User

These scripts ensure a Smooth User Experience in our Website

-> Website Operations

The homepage is the entrance to the website, where the user is required to login or signup, in compliance with the appropriate credentials. 
The signup page signs the user up on the website to provide the user with personalized score trackers and quizzes, while the login page is used by the already registered users.

The students who have logged into their accounts will then be able to choose a particular subject from a particular grade, in accordance with the quiz they need to take. This will then lead them to the main quiz page. 

The quiz page provides the student with an interface to take the quiz with fun cards, a basic profile overview, a game log and a score tracker. The cards are hidden with clues for the questions which pop up every time the 'Next' button is clicked. The game log keeps a track of the user activity for the current quiz. The score card keeps a live track of the user's score to generate his grades towards the end.  The profile card presents the user's profile overview along with his quiz history.

The upload page is one to be specifically used by english teachers, to upload the image of a word list, which suitably gets converted to a quiz using NLP processing.


### FILE MANIFEST

You can also check out Individual Instructions.txt files in each folder to get a better grasp for the Flow of our Codes

-> Front End Files:
   - CSS
      Includes the styling / formatting code for the website.
   - HTML
      Includes all the HTML files for the layout of the website.
   - Images
      Includes all the images.
      
-> Back End Files:

sign_up.php : In the backend file of signup page first we are connecting to the database, then we are retrieving data send by user via the frontend, we are checking whether the user has filled all the required fields. 
Then we are comparing the two passwords entered by the user for confirmation and if they are not we are telling the user to fill up again else if the passwords are same then we are storing the data inside the specific table in the database where we have two tables for two types of user i.e. student and teacher.  Then we redirect the user to homepage of our website. After the successful signup the session for present user will start and his name and email will be shown in the homepage. Now if the user is already a registered user of our website then user will go to login page. 

log_in.php: In the backend of the login page we retrieve email, password and the type of our user, then we will compare the email and password given by the user with all the registered emails and their corresponding password in the database and if the comparison is successful then the user will get redirected to homepage of our website else we will post a message that user’s credential didn’t match.   

index.php: Used for Redirecting to this file after successful Login or Signup

signup.php & login.php are frontend files linked to Backend

-> NLP:
   - PDF to Text
      Includes the Python code to convert any PDF file to Text for further processing.
      This required libraries mentioned in Requirements.txt & Tesseract .exe file for Optical Character Recognition
      This is Done in 2 Steps:

	- PDF_to_Image.py converts the PDF into set of Images for each Page in PDF

	- Image_to_Text.py converts those Images to text, which is appended to one Text File

   - Extract.ipynb
      Includes the Jupyter notebook file with the NLP application to extract keywords from a text file input.

   - Synonyms Generator
      This is done in 2 parts:
	- First an Image of Word List is uploaded which is processed into text by WordList_to_Text.py

	- Then words & synonyms are generated from the text file by Synonym Generator.py

	- eng_test4.txt is one of the I/P we used to generate Synonyms in testing

### COPYRIGHT
We will procure a Liscence Shortly

### KNOWN BUGS

All Code Scripts are Bug Free right now. However they all need to be linked up.
We will troubleshoot & update this after their linking up.

### TROUBLESHOOTING

-> Backend:

During signup we had a problem to specify  whether  user is student or teacher, so we included a radiobutton  to collect the data regarding type of the user and we made separate tables in the database for student and teacher and thus we successfully debugged the problem. 
So in  login page we didn’t require a radiobutton to check the type of user as we already created two tables for student and teacher in the database. 
We also tried to implement the backed logic of our login page using object oriented approach but were facing problems and hence  we implemented our logic to support procedural approach and finally we successfuly debugged  the error

-> PDF & Image to Text:

It was extremely difficult to get efficient & accurate results with Libraries like PyPDF2, to get text files from PDF. So we used OCR Software to get best results.
However to convert PDF to Images was also inefficient with conventional libraries like pdf2image. However, after much searching, we found an extremely compact & efficient library in PyMuPDF

-> NLP Scripts:

Keyword extraction for generating games was extremely challenging, given the content of NCERT Sources. However we were able to sectionise chapters & came up with our own logic
to efficiently fetch them.

For the Synonyms Generator, Extracting Correct Words, which had at least 3 synonyms required a lot of Debugging, Trial & Testing. However, we managed to make our script 
compatible with Word Lists Images

-> Front End:

The alignment of the div tags differed for different screen sizes causing a problematic display of the UI on certain screen sizes. Using viewport seems to be solving this issue.