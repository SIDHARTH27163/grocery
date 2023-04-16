<?php
include('../auth/connect.php');
// include('../auth/connect.php')
?>

<?php
$msg="";
$msg1="";
$msg2="";
$msg3="";
$msg4="";
$msg5="";
$veg_name = mysqli_real_escape_string($conn, $_POST["veg_name"]);

$image1 = mysqli_real_escape_string($conn, $_FILES["image1"]["name"]);
 $image2 = mysqli_real_escape_string($conn, $_FILES["image2"]["name"]);
$image3 = mysqli_real_escape_string($conn, $_FILES["image3"]["name"]);
$image4 = mysqli_real_escape_string($conn, $_FILES["image4"]["name"]);
$category_name=mysqli_real_escape_string($conn , $_POST["category_name"]);
$sub_category_name=mysqli_real_escape_string($conn , $_POST["sub_category_name"]);
$pack_size1=mysqli_real_escape_string($conn , $_POST["pack_size1"]);
$pack_size2=mysqli_real_escape_string($conn , $_POST["pack_size2"]);
$pack_size3=mysqli_real_escape_string($conn , $_POST["pack_size3"]);
$pack_size4=mysqli_real_escape_string($conn , $_POST["pack_size4"]);
$o_price=mysqli_real_escape_string($conn , $_POST["o_price"]);
$price_dis=mysqli_real_escape_string($conn , $_POST["price_dis"]);
$target1 = "../images1/".basename($image1);

 $target2 = "../images2/".basename($image2);
$target3 = "../images3/".basename($image3);
$target4 = "../images4/".basename($image4);

// echo($image);
//  echo($image2);
// echo($image3);
// echo($image4);
// $sql = "INSERT INTO vegitables VALUES(
//     NULL,
//     '$name','$image','$sub_image','$fnews','$date','$image')";
if (move_uploaded_file($_FILES['image1']['tmp_name'], $target1)) {
    $msg1 = "Image1 uploaded successfully";
}else{
    $msg1 = "Failed to upload image";
}
// second 
if (move_uploaded_file($_FILES['image2']['tmp_name'], $target2)) {
    $msg2 = "Image2 uploaded successfully";
}else{
    $msg2 = "Failed to upload image";
}
// echo($msg1);
// echo($msg2);
if (move_uploaded_file($_FILES['image3']['tmp_name'], $target3)) {
    $msg3 = "Image3 uploaded successfully";
}else{
    $msg3 = "Failed to upload image";
}
if (move_uploaded_file($_FILES['image4']['tmp_name'], $target4)) {
    $msg4 = "Image4 uploaded successfully";
}else{
    $msg4 = "Failed to upload image";
}

$sql1 = "CREATE TABLE IF NOT EXISTS Products (ID int(30) AUTO_INCREMENT,
veg_name varchar(255) NOT NULL,
image1 varchar(255) NOT NULL,
image2 varchar(255) NOT NULL,
image3 varchar(255) NOT NULL,
image4 varchar(255) NOT NULL,
category_name varchar(255) NOT NULL,
sub_category_name varchar(255) NOT NULL,
pack_size1 varchar(255) NOT NULL,
pack_size2 varchar(255) NOT NULL,
pack_size3 varchar(255) NOT NULL,
pack_size4 Varchar(255) NOT NULL,
o_price Varchar(255) NOT NULL,
price_dis Varchar(255) NOT NULL,

PRIMARY KEY  (ID))";
if($conn->query($sql1) === TRUE) {
$msg5= "Database and Table Online";
}else{
$msg5= "Database and Table Offline" . $conn->$error;
}
$date=date("Y/m/d");
$sql = "INSERT INTO Products VALUES(
  NULL,
  '$veg_name','$image1','$image2','$image3','$image4','$category_name','$sub_category_name','$pack_size1','$pack_size2','$pack_size3','$pack_size4' , '$o_price' , '$price_dis','$date')";

if($conn->query($sql) === TRUE) {
$msg="Insert Data in to table Success";

}else{
  $msg="Insert Data in to table failed";
}
?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css"  rel="stylesheet" />
  <link rel="stylesheet" href="../css/index.css?v=<?php echo time(); ?>"/>
  <title>
    Admin Products
  </title>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
      'roboto': ['Roboto Slab', serif]
     
    }
        }
      }
    }
  </script>
</head>
<body>
<?php 
        include('./admin_components/admin_sidebar_header.php');
        ?>
   <div class="p-2  sm:ml-64">
   <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg bg-gray-900 border-gray-700 mt-16">
   <span class="text-green-500">  <?php if($msg!="") { echo $msg; } ?></span><br/>
   <span class="text-green-500">  <?php if($msg1!="") { echo $msg1; } ?></span><br/>
   <span class="text-green-500">  <?php if($msg2!="") { echo $msg2; } ?></span><br/>
   <span class="text-green-500">  <?php if($msg3!="") { echo $msg3; } ?></span><br/>
   <span class="text-green-500">  <?php if($msg4!="") { echo $msg4; } ?></span><br/>
   <span class="text-green-500">  <?php if($msg5!="") { echo $msg5; } ?></span><br/>

   
   </div>
  
  </div>
</body>

</html>