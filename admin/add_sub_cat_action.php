<?php
include('../auth/connect.php');
// include('../auth/connect.php')
?>

<?php
$msg="";
$msg1="";

$cat_id = mysqli_real_escape_string($conn, $_POST["cat_id"]);

$sub_category_name = mysqli_real_escape_string($conn, $_POST["sub_category_name"]);



$sql1 = "CREATE TABLE IF NOT EXISTS Sub_category (ID int(30) AUTO_INCREMENT,
cat_id varchar(255) NOT NULL,

sub_category_name varchar(255) NOT NULL,


PRIMARY KEY  (ID))";
if($conn->query($sql1) === TRUE) {
$msg1= "Database and Table Online";
}else{
$msg1= "Database and Table Offline" . $conn->error;
}

$sql = "INSERT INTO Sub_category VALUES(
  NULL,
  '$cat_id','$sub_category_name'  )";

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
 

   
   </div>
  
  </div>
</body>

</html>