<!DOCTYPE html>
<html>
  <head>
    <title>Registration Form</title>
  </head>

  <body>
            <?php
            $servername="localhost";
            $username="root";
            $password="";
            $dbname="projects";
            $conn=new mysqli($servername,$username,$password,$dbname);
            if($conn->connect_error){
              die("connection Failed".$conn->connect_error);
            }
            if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
              if(isset($_POST['name']) && isset($_POST['role']) && isset($_POST['event']) && isset($_POST['institution']) && isset($_POST['filename']) && isset($_POST['date']) && isset($_POST['matchbtn1']) && isset($_POST['matchbtn2']) && isset($_POST['venue'])){
            $name=$_POST["name"];
            $role=$_POST["role"];
            $institution=$_POST["institution"];
            $event=$_POST["event"];
            $filename=$_POST["filename"];
            $date=$_POST["date"];
            $team1=$_POST["matchbtn1"];
            $team2=$_POST["matchbtn2"];
            $venue=$_POST["venue"];
            $sql="INSERT INTO `matches`(`name`, `role`, `institution`, `event`, `id`, `date`, `team1`, `team2`, `venue`) VALUES ('$name','$role','$institution','$event','$filename','$date','$team1','$team2','$venue')";
            $query=mysqli_query($conn,$sql);
            if($query)
              echo '<script>alert("Entry successfull")</script>';
            else
              echo '<script>alert("Error Occured")</script>';
            $conn->close();
      }
    }
?>
    <style>
      body {
        display: flex;
        justify-content: space-between;
        max-width: 600px;
        font-family: Arial, Helvetica, sans-serif;
        margin-left: 475px;
        background-color:#F6F6F2;
        color:white;
      }
      * {
        box-sizing: border-box;
      }
      .container {
        box-shadow:20px 20px 50px grey;
        padding: 40px;
        border:2px solid black;
        border-radius:5px;
        background-color:#388087;

      }
      #matchbtn{
        padding:5px;
        margin-left:4px;
      }
      input[type=text]:focus{

        background-color: #ddd;

        outline: none;

      }
      hr {

        border: 1px solid #f1f1f1;

        margin-bottom: 25px;

      }
      .registerbtn {

        background-color: #04AA6D;

        color: white;

        padding: 16px 20px;

        margin: 8px 0;

        border: none;

        cursor: pointer;

        width: 100%;

        opacity: 0.9;

      }
      .registerbtn:hover {

        opacity: 1;

      }
      a {
        color: dodgerblue;

      }

      .btn {

        text-align: center;

       }

      /* Set a grey background color and center the text of the "sign in" section */

      .signin {

        background-color: #f1f1f1;

        text-align: center;

      }


      #myFile{
        padding:6px;
        margin-left:30px;
      }
      #event{
        padding:7px;
        margin-left:50px;
      }
      #date{
        padding:6px;
        margin-left:65px;
      }
      #institution{
        padding:6px;
        padding-right:35px;
        margin-left:20px;
      }
      .submit{
        padding:15px;
        border-radius:6px;

      }
      #venue{
        padding:6px;
        margin-left:40px;
      }

      </style>

      </head>

      <body>

     

      <form action="register.php" method="POST">

        <div class="container">

          <h1>Register</h1>

          <p>Please fill this form to register an event.</p>

          <hr>

     
          <label for="name"><b>Name</b></label>

          <input type="text" id="venue" name="name" placeholder="Enter your name" required><br><br>
          <label for="role"><b>Role in Organization</b></label>

          <input type="role" id="venue" name="role" placeholder="Enter your Role" required><br><br>
          <label for="event"><b>Event</b></label>

          <!-- <input type="text" placeholder="Enter event" name="event" id="event" required> -->

          <select name="event" id="event" required>

            <option value="">Choose an option</option>

            <option value="Cricket">Cricket</option>

            <option value="Volley Ball">Volley Ball</option>

            <option value="Kabaddi">Kabaddi</option>

            <option value="Throw Ball">Throw Ball</option>

            <option value="Kho-Kho">Kho-Kho</option>

            <option value="Tennis">Tennis</option>

          </select><br><br>

          <label for="institution"><b>Institution</b></label>

          <input type="text" placeholder="Enter institution" name="institution" id="institution" required>

         <br><br>

          <label for="id_proof"><b>ID Proof</b></label>

          <input type="file" id="myFile" name="filename" required>

          <br><br>

     

            <label for="date"><b>Date</b></label>

            <input type="date" id="date" name="date" required><br><br>

            <div class="match">

            <label for="matchbtn"><b>Match</b></label>

            <input type="text" id="matchbtn" name="matchbtn1" placeholder="team" required><b> Vs</b>

            <input type="text" id="matchbtn" name="matchbtn2" placeholder="team" required>

            </div>
            <br><br>

            <label for="venue"><b>Venue</b></label>

            <input type="text" id="venue" name="venue" placeholder="Enter the venue" required><br><br>

            <input type="submit" class="submit" name="submit" style="margin-left:45%">

            </form>

          </div>
      </body>

      </html>