<?php 
    
    session_start();
    if(!isset($_SESSION['user']))
{
            header("Location:login.php");
}


    include('header.php');
	$conn = mysqli_connect('localhost', 'root', '', 'career_guidance');

	$total_question = $_POST['total_question'];

	$query ="SELECT *, (SELECT title FROM categories WHERE categories.category_id = questions.category_id) AS c_title  FROM questions";

	//echo $query;exit;

    $result= mysqli_query($conn,$query);
    

         $count = 1;
         $ans_art = 0;
         $ans_com = 0;
         $ans_sci = 0;

         while($row=mysqli_fetch_assoc($result))
         {


         		$ans = $_POST['ans'.$count];
         		
         		if($row['correct_option'] == $ans)
         		{

   						 if($row['c_title'] == 'Art')
   						 {
   						 			 $ans_art++;	

   						 }

   						  if($row['c_title'] == 'Commerce')
   						 {
   						 			 $ans_com++;		
   						 }

   						 if($row['c_title'] == 'Science')
   						 {
   						 			 $ans_sci++;		
   						 }

         		} 

         		$count++;	
         } 

?>




    <div class="container text-center mt-5 mb-5" >

        <h2 class="text-success">Thanks for Attempting Test..!!</h2>

        <h4>Your Correct Answer are:</h4>
        <h5 class="text-danger mt-4">
    		<?php 
             // echo "<hr> Correct Answers".($count-1);
         echo "Art - ".$ans_art;
         echo "<br> Commerce - ".$ans_com;
         echo "<br> Science - ".$ans_sci;
         ?>
     </h5>
 
       <h4 class="text-dark mt-5 mb-5 p-3 ml-5 mr-5" style="border-radius: 15px;opacity: 0.9;box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">
       	<?php 
            echo "<span class='h3 text-primary'>Hello, ".$_SESSION['user']."</span> , <br><br>";
       		if($ans_art>$ans_com && $ans_art>$ans_sci)
         	{
         			echo "You can make Career in Art <br>Opportunities- BA, MA, MBA Goverment Exam";
         	}
         	else if($ans_com>$ans_art && $ans_com>$ans_sci)
         	{
         			echo "You can make Career in Commerce <br>Opportunities- Bcom, Mcom, Banking, Goverment Exam";
         	}

         	else if($ans_sci>$ans_art && $ans_sci>$ans_com)
         	{
         			echo "You can make Career in Science <br>Opportunities- Btech, Mtech, Bsc, MBBS, Goverment Exam";
         	}

            else{
                echo "Sorry...There is no option is correct so please give test again";
            }


       	?>

       </h4>
     
        
    </div>


    <?php 
        include("footer.php");
?>