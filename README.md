# README

An innovative, fun approach to online education for the children of today. The project looks at a website that hosts video lectures followed by fun assessment approaches to up student incentive to learn. The approach seeks to test and teach concepts in an innovative way while encouraging sharper concentration.
The system involves a deck of word clues consisting of all the key concepts from any given chapter. The assessment/gameplay requires a student to choose all the words that relate to a software generated keyword while avoiding certain 'Death Cards'. This aims to test the knowledge grasped by the student and his/her ability to relate and apply concepts taught.

### PRODUCT FLOW
The site is user-specific. On signing in, a teacher would be presented with options to monitor student progress as well as upload lectures with the relevant grade and subject tags. A teacher is also required to upload a PDF file of the chapter with every lecture.

A student is presented with a catalog of lectures that are 'grade', 'subject' and 'chapter' seggregated. Each section would thus potentially hold relevant videos. However, with the current scope, each section would present a game to the student. The gameplay is as follows:
-> A student is presented with a deck of 25 cards with word-clues on them.
-> The application generates a lecture specific key-phrase with a number. The number is a hint on the number of cards that relate to this keyphrase.
-> The student then picks cards that he/she thinks relate to this keyphrase.
    - If correct, the card turns green, and points are awarded.
    - There are two possibilities on the selection of a wrong card :
      - A white card implies deduction of points. There are 12 cards pre-determined as white.
      - A black card implies end of game with deduction of points. There is one such card for every game.
-> The test is on the students understanding of the concept and ability to relate the key terms.
-> A leaderboard has been included to keep things interesting and build incentive.

### CONFIGURATION INSTRUCTIONS

### INSTALLATION INSTRUCTIONS

### OPERATING INSTRUCTIONS


### FILE MANIFEST

-> Front End Files:
   - CSS
      Includes the styling / formatting code for the website.
   - HTML
      Includes all the HTML files for the layout of the website.
   - Images
      Includes all the images.
-> Back End Files:
-> NLP
   - PDF to Text
      Includes the Python code to convert any PDF file to Text for further processing.
   - Extract.ipynb
      Includes the Jupyter notebook file with the NLP application to extract keywords from a text file input.


### COPYRIGHT

### KNOWN BUGS

### TROUBLESHOOTING
