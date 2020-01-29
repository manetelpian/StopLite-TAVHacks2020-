<?php 

include "../Functions/Header.php";

$Party1 = $_SESSION['user'];
$Party2 = $_GET['username'];

if($Party2 <= 0) {

	header("location:Home.php");

}

$query = mysqli_query($conn ,"select * from user where UK_ID = $Party2");

$store = mysqli_fetch_assoc($query);
?>

<audio autoplay>
  <source src="../wet.mp3" type="audio/mpeg">
</audio>


<div style="text-align:center" style="color:#31303f;">
<?php
echo $store['F_Name'], $store['L_Name'], "- ",$store['Status'];//,$store['Frequency'];
?>
</div>
<?php
if(mysqli_num_rows(mysqli_query($conn, "SELECT * FROM encounters where Party1 = '$Party1' && Party2 = '$Party2' && Viewed = '1'")) == 0){
	$query = mysqli_query( $conn ,"INSERT INTO encounters(Party1, Party2, Viewed) VALUES ($Party1,$Party2,'1')");
}
else{
	
}

?>
<img src="https://static.thenounproject.com/png/3052689-200.png" class="wow fadeIn animated" data-wow-delay="0.85s" style="display: block; margin-left: auto; margin-right: auto; width: 90%; height: 50%">



</body>

