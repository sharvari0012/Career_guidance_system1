<?php 
session_start();

if(!isset($_SESSION['user']))
{
            header("Location:login.php");
}


include("header.php");
?>
<div class="container mt-5 mb-5">

    <h3>Hello , <?php echo $_SESSION['user'];?> </h3>
<p>Career choice has a pivotal role in college students’ life planning. In today’s world choosing the right career is the toughest decision. Today many students are confused about their future. They do possess some skills but they are not able to identify their abilities and a proper domain. Different people suggest different career options but at last, the student has to select their career.</p>

 <p>
    <b>Rules to follow during all online proctored exams: </b><br>
    -You must use a functioning webcam and microphone. <br>
    -No cell phones or other secondary devices in the room or test area.<br>
    -Your desk/table must be clear or any materials except your test-taking device.<br>
    -No one else can be in the room with you.<br>
    -No talking.<br>
</p>

<br>
<a href="test.php" class="btn btn-primary"> Start Test </a>

</br>
</br>
</div>


<?php 
include("footer.php");
?>