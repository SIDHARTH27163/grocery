<?php
session_start();
?>
<?php

?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css"  rel="stylesheet" />
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
  

<nav class="bg-teal-800">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl px-4 md:px-6 py-2.5">
        <a href="index.php" class="flex items-center">
            <img src="./images/logo.png" class="h-6 mr-3 sm:h-9" alt="Flowbite Logo" />
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white font-roboto">Fresh Shop</span>
        </a>
        <div class="flex items-center">
            <a href="tel:5541251234" class="mr-6 text-sm font-medium text-white hover:underline">(555) 412-1234</a>
            <!-- <a href='auth/login.php' class="text-sm font-medium text-white hover:underline">Login  </a>
            <a href="auth/logout.php" class="text-sm font-medium text-white hover:underline">Logout  </a> -->
            <!-- //$message!="" -->
          <?php
               
            
             if(!isset($_SESSION['id']) ) {
              
              //echo($_SESSION['user_type']);
              echo'<a href="auth/login.php" class="text-sm font-medium text-white hover:underline">Login  </a>';
              
              }else{
                if($_SESSION['user_type']==1){
                  $id=$_SESSION['id'];
             $sql="select count(*) as total from `cart`  WHERE u_id='$id'";
             $result=mysqli_query($conn , $sql);
             $data=mysqli_fetch_assoc($result);
                  echo'<a href="users_cart.php" role="button" class="relative flex">
                  <svg class="flex-1 w-8 h-8 fill-current group-hover:text-white text-gray-100 hover:scale-110" viewbox="0 0 24 24">
                    <path d="M17,18C15.89,18 15,18.89 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20C19,18.89 18.1,18 17,18M1,2V4H3L6.6,11.59L5.24,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42A0.25,0.25 0 0,1 7.17,14.75C7.17,14.7 7.18,14.66 7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.58 17.3,11.97L20.88,5.5C20.95,5.34 21,5.17 21,5A1,1 0 0,0 20,4H5.21L4.27,2M7,18C5.89,18 5,18.89 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20C9,18.89 8.1,18 7,18Z"/>
                    </svg>
                    <span class="absolute right-0 top-0 rounded-full  bg-red-600 w-4 h-4 top right p-0 m-0 text-white font-mono text-sm  leading-tight text-center">'.$data['total'].'
                  </span>
                </a>';
                }
                echo'<a href="auth/logout.php" class="text-sm font-medium text-white hover:underline mx-2">Logout  </a>';
              }
              
          
            ?>
        </div>
    </div>
</nav>


<nav class="header sticky z-10 top-0 bg-white shadow-md flex items-center justify-between px-2 py-1">
  <div class="container flex flex-wrap items-center justify-between mx-auto ">
  <a href="index.php" class="flex items-center">
      <img src="./images/logo.png" class="h-10  sm:h-10" alt="Flowbite Logo" />
      <span class="self-center text-green-800 font-bold text-xl font-semibold whitespace-nowrap font-roboto ">Fresh Shop</span>
  </a>
  <div class="flex justify-between  md:order-2 ">
      
      <button data-collapse-toggle="navbar-cta" type="button" class=" p-2 text-sm text-green-800 hover:text-white rounded-lg md:hidden hover:bg-green-800 focus:outline-none focus:ring-2 focus:ring-green-800 " aria-controls="navbar-cta" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
    <ul class="flex flex-col p-4 mt-0  rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 text-lg  md:text-lg md:font-medium ">
    <li class="px-1 hover:border-b-2 hover:border-green-500 border-opacity-0 hover:border-opacity-100 hover:text-green-800 font-roboto font-bold duration-200 cursor-pointer active">
              <a href="index.php">Home</a>
            </li>
            <li class="px-1 hover:border-b-2 hover:border-green-500 border-opacity-0 hover:border-opacity-100 hover:text-green-800 font-roboto font-bold duration-200 cursor-pointer">
              <a href="index.php">Products</a>
            </li>
            <li class="px-1 hover:border-b-2 hover:border-green-500 border-opacity-0 hover:border-opacity-100 hover:text-green-800 font-roboto font-bold duration-200 cursor-pointer">
              <a href="contact.php">Contact Us</a>
            </li>
            <li class="px-1 hover:border-b-2 hover:border-green-500 border-opacity-0 hover:border-opacity-100 hover:text-green-800 font-roboto font-bold duration-200 cursor-pointer">
              <a href="about.php">About Us</a>
            </li>
    </ul>
  </div>
  </div>
</nav>


</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>

</html>