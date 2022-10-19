
<p class="text-center text-success"><b>Thank you! Please download the barcode.</b></p>

<?php
$barcodename = $_POST['barcodename'];
		echo "<center><img alt='testing' src='barcode.php?codetype=Code39&size=50&text=".$barcodename."&print=true'/></center>";
?>

<center>
<a download="<?=$barcodename?>" target="_blank" href="barcode.php?codetype=Code39&size=50&text=<?=$barcodename?>&print=true">
	<button type="button" class="btn bg-gradient-primary">Download</button>
</a>
<br>
</center>


<?php

// Remote image URL



$url = 'http://localhost/nstw-registration/barcode.php?codetype=Code39&size=50&text='.$barcodename.'&print=true';

// Image path
$img = '../../assets/img/barcodes/'.$barcodename.'.png';


// Save image 
file_put_contents($img, file_get_contents($url));


?>