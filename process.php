<?php	
//Get the base-64 string from data
$filteredData=substr($_POST['img_val'], strpos($_POST['img_val'], ",")+1);

//Decode the string
$unencodedData=base64_decode($filteredData);

$image=$_POST['img_val'];

//Save the image
file_put_contents('img.png', $unencodedData);

?>

<h1>Screenshot Image</h1>
<img src=<?php echo $image; ?> alt="">