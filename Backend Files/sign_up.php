 <?php

 if ($_SERVER["REQUEST_METHOD"] == "POST") { //checking if form is submitted
   //creating connecion with database
   //extracting user information
    $email = test_input($_POST["email"]);
    $pass= test_input($_POST["psw"]);
    $repass= test_input($_POST["psw-repeat"]);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db="EDU";
   
    $conn = mysqli_connect($servername, $username, $password,$db);

    //checking if connection is made
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    $res='true';
    if(strcmp($pass,$repass)!=0)
    {
    $res=null;
    alert('passwords did not match');
    }
    if(!isset($_POST['user'])){
        alert("select either teacher or student");
        $res=null;
    }
    //running sql query
    else
    if($_POST['user'] == 'teacher' && $res!=null){
    $sql="insert into teacher (t_email,password)values('".$email."','".$pass."')";
    $res=mysqli_query($conn, $sql);
    }
    else
    if($_POST['user'] == 'student' && $res!=null){
    $sql="insert into student (s_email,password)values('".$email."','".$pass."')";
    $res=mysqli_query($conn, $sql);
    }
    
    //creating session for the user
    if($res)
    {
        setcookie('EMAIL',$email,time()+86400,'/');
        session_start();
        $_SESSION['email']=$email;
        $_SESSION['type']=$_POST['user'];
        header('Location:index.php');

    }


}
//retrieving user submitted data
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
//function to throw alert to user
function alert($msg) {
 echo "<script type='text/javascript'>alert('$msg');</script>"; 
} 


?> 
