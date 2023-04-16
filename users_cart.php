<?php
include('./auth/connect.php');
    include './components/Header.php';
    ?>
<!DOCTYPE html>

<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    #summary {
      background-color: #f6f6f6;
    }
  </style>
</head>

<body class="bg-teal-700" id="wrapper" onload="preload()">
  <div id="loading">

  </div>
  <div class="container mx-auto  p-5">
    <div class="flex lg:flex-row md:flex-row flex-col  shadow-md my-2">
      <!-- start of column -->
    
      <div class="lg:w-3/4 md:w-3/4 w-full bg-white px-10 py-10  rounded-l-lg ">
        <div class="flex justify-between border-b pb-8">
          <h1 class="font-semibold text-2xl">Shopping Cart And Order List</h1>
          <?php
           $sql0="select count(*) as total from `cart`  WHERE u_id='$id'";
           $result0=mysqli_query($conn , $sql0);
           $data0=mysqli_fetch_assoc($result0);
           echo'
           <h2 class="font-semibold text-2xl">'.$data['total'].' Items</h2>
           
           ';
          ?>
          
        </div>
        <div class="flex items-center justify-between mt-10 mb-5">
          <h3 class="font-semibold text-gray-600 text-xs uppercase w-2/5">Product Details</h3>
         
          <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Price</h3>
          <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Total</h3>
          <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Date</h3>
        </div>

        <?php 
      $id=$_SESSION['id'];

// echo($cat);
$sql = "SELECT * FROM `cart` INNER JOIN `products` ON cart.p_id = products.ID   WHERE cart.u_id='$id' order by products.ID DESC " ; 
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
 // echo $row['category_id'];
 $id = $row['ID'];
 $name = $row['veg_name'];
 $category=$row['category_name'];
 $image1=$row['image4'];
 $price=$row['price_dis'];
 $price1=$row['total_price'];
 $q=$row['quantity'];
 $p_status=$row['p_status'];
 $o_status=$row['o_status'];
 $d_status=$row['d_status'];
 $date=$row['date'];

 echo'
<div class="bg-gray-100 p-1 rounded-lg">
 
<div class="flex items-center justify-between hover:bg-gray-100 -mx-8 px-6 py-5 ">
<div class="flex w-2/5"> <!-- product -->
  <div class="w-1/2 ">
    <img class="h-32 w-full" src="./images4/'.$image1.'" alt="">
  </div>
  <div class="flex flex-col justify-between ml-4 flex-grow">
    <span class="font-bold text-sm">'.$name.'</span>
    <span class="text-red-500 text-xs">'.$category.'</span>
    <button type="remove" class="font-semibold hover:text-red-500 bg-red-700 p-1 w-32 text-gray-100 text-xs">Remove</button>
  </div>
 
</div>

<span class="text-center w-1/5 font-bold text-sm text-green-900">'.$price.'Rs/Kg</span>
<span class="text-center w-1/5 font-bold text-sm text-green-900">'.$price1.'Rs for '.$q.'Kg</span>
<span class="text-center w-1/5 font-bold text-sm text-green-900">'.$date.'</span>


</div>
<div class=" flex lg:flex-row md:flex-row sm:flex-col flex-col items-center justify-between text-xl font-mono text-red-900 w-full">
<span class="text-green-900 font-bold mx-2">Payment status:'.$p_status.'</span>
<span class="text-green-900 font-bold mx-2">Order status:'.$o_status.'</span>
<span class="text-green-900 font-bold mx-2">Devilery status:'.$d_status.'</span>
</div>
</div>
 
 ';
}
?>
        


       

        <a href="./index.php" class="flex font-semibold text-indigo-600 text-sm mt-10">
      
          <svg class="fill-current mr-2 text-indigo-600 w-4" viewBox="0 0 448 512"><path d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"/></svg>
          Continue Shopping
        </a>
      </div>
      <!-- end of column -->
      <?php
               $id=$_SESSION['id'];
  //  for total items\
  $sql0="select count(*) as total from `cart`  WHERE u_id='$id'";
  $result0=mysqli_query($conn , $sql0);
  $data0=mysqli_fetch_assoc($result0);
  // for total items ends

             $sql= "SELECT SUM(total_price) as price FROM `cart` INNER JOIN `products` ON cart.p_id = products.ID   WHERE u_id='$id'  "; 
             $result=mysqli_query($conn , $sql);
             $data=mysqli_fetch_assoc($result);
           //echo($data['price']);
           $sql1 = "SELECT SUM(quantity) as total_load  FROM `cart` INNER JOIN `products` ON cart.p_id = products.ID   WHERE u_id='$id' order by products.ID DESC"; 
           $result1 = mysqli_query($conn, $sql1);
          $data1=mysqli_fetch_assoc($result1);
          //echo($data1['total_load'] );
// generating of price for multiple price
          echo'
          
          <div id="summary" class="lg:w-1/4 md:w-1/4 sm:w-full px-8 py-10">
        <h1 class="font-semibold text-2xl border-b pb-8">Order Summary</h1>
        <div class="flex justify-between mt-10 mb-5">
          <span class="font-semibold text-sm uppercase">Total Items '.$data0['total'].'</span>
          <span class="font-semibold text-sm">Total Price ' . $data['price'].'Rs</span>
        </div>
        <div class="flex justify-between mt-10 mb-5">
          <span class="font-semibold text-sm uppercase">Total Items Weight '.$data1['total_load'].'kg</span>
          <span class="font-semibold text-sm">Total Price ' .$data['price'].'Rs</span>
        </div>
      
        <div class="border-t mt-8">
          <div class="flex font-semibold justify-between py-6 text-sm ">
            <span>Total cost</span>
            <span>'.$data['price'].' Rs</span>
          </div>
         
        </div>
    
          
          ';
             ?>
      
<div class="">

   
<a href="" class="bg-indigo-500 font-semibold hover:bg-indigo-600 py-3 text-sm text-white uppercase w-full px-2">See Orders</a>

</div>
  </div>
    </div>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {


  $qun=$_REQUEST['cart_id'];

echo($qun);

}



?>


  </div>
  <?php
  
  include './components/Footer.php';
  ?>
</body>
<script type="text/javascript">
      var preloaderc= document.getElementById('loading');
      function preload(){
        preloaderc.style.display='none';
      }
      
    
    </script>
</html>