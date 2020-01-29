<?php 

include "../Functions/Header.php";

$user = $_SESSION['user']; 
?>
<div id="qrcode" align="center">
<?php echo "<img src='https://api.qrserver.com/v1/create-qr-code/?data=" . $_SESSION['user'] . "&size=500x400'/>";

?>
</div>
<?php
if(mysqli_num_rows(mysqli_query($conn,"SELECT * FROM encounters where Party2 = '$user' && Viewed = '1'")) !== 0 ){
echo "hello";
$Party1 = mysqli_query($conn,"SELECT Party1 FROM encounters where Party2 = '$user' && Viewed = '1'");
$Party1_ID = mysqli_fetch_assoc($Party1);
$user1 = $Party1_ID['Party1'];
echo $user1;
$update = mysqli_query($conn,"UPDATE encounters SET Viewed = '2' WHERE Party2 = '$user' && Party1 = '$user1'");
header("location:Profile.php?username=" . $user1);

}

?>

<script type="text/javascript">
	
	setTimeout(function() {
	  location.reload();
	}, 10000);

</script>

</body>