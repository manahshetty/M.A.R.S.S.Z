<html>
    <head>
        <title>Index</title>
        <link rel="stylesheet" type="text/css" href="index.css">
        <link href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@900&display=swap" rel="stylesheet">
    </head>
    <body background="back.jpg">
        
        <div id="logo">
            <img src="logo.png" id="pic">
        </div>
        <div id="heading">
           Hello <?php session_start(); echo $_SESSION['email'];?>! Which subject today?
        </div>
        
        <div id="parent" style="padding-top: 10px;">
            <button class="buttons" onclick="location.href='attempt_1.html'">HISTORY</button><br><br>
            <button class="buttons" onclick="location.href='attempt_1.html'">GEOGRAPHY</button><br><br>
            <button class="buttons" onclick="location.href='attempt_1.html'">MATHEMATICS</button><br><br>
            <button class="buttons" onclick="location.href='attempt_1.html'">SCIENCE</button><br><br>
            <button class="buttons" onclick="location.href='attempt_1.html'">GENERAL KNOWLEDGE</button><br><br>
        </div>
    </body>
</html>