# README

We have created an Innovative & Fun approach to online education for the children of today, by using Natural Language Processing Techniques. The project looks at a website that generates fun assessment approaches to up student incentive to learn. The approach seeks to test and teach concepts in an innovative way while encouraging sharper concentration.
We have incorporated 2 types of Games, based on subjects taught in Schools, for children across Grades from Ist to VIIIth.

Before we get to the games, it is important to understand how are these different from any other standard games one can create with simple codes.
The Beauty lies in the fact that these games are fully generated from the NLP scripts we have coded on our own, using existing open source libraries like spaCy & NLTK.

The technical uniqueness of our website lies in 2 aspects:

-> We have coded our own PDF to Text & Image to Text converter, using opensource OCR Software Tesseract

-> We have used NLP Techniques to extract educational content from the PDF/ Image sources

-> This makes our games scalable & unique, for we don't need teachers to manually read hundreds of pages to prepare QnA for games 

The First is a game generated from Subjects like Social Studies & Science. This system involves a deck of word clues consisting of all the key concepts from any given chapter from the subject. 
The assessment/gameplay requires a student to choose all the words that relate to a software generated keyword while avoiding certain 'Death Cards'. This aims to test the knowledge grasped by the student and his/her ability to relate and apply concepts taught.
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

    - There are two possibilities on the selection of a wrong card :

    - A white card implies deduction of points. There are 12 cards pre-determined as white.
    - A black card implies end of game with deduction of points. There is one such card for every game.

-> The test is on the students understanding of the concept and ability to relate the key terms.

-> A leaderboard has been included to keep things interesting and build incentive.

-> For the Find the Synonyms Game, the format is similar to above, except the clues are replaced by words, and the deck contains synonyms along with other non-synonym words.

### CONFIGURATION INSTRUCTIONS

### INSTALLATION INSTRUCTIONS

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

-> Front End Files:
   - CSS
      Includes the styling / formatting code for the website.
   - HTML
      Includes all the HTML files for the layout of the website.
   - Images
      Includes all the images.
      
-> Back End Files:

-> NLP:
   - PDF to Text
      Includes the Python code to convert any PDF file to Text for further processing.
      This required libraries mentioned in Requirements.txt & Tesseract .exe file for Optical Character Recognition
      This is Done in 2 Step:
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

### KNOWN BUGS

### TROUBLESHOOTING
