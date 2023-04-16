
<!DOCTYPE html>
<?php
include('./auth/connect.php');

?>
<html>
    <head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css"  rel="stylesheet" />
        <link rel="stylesheet" href="./css/index.css">
        <script src="https://cdn.tailwindcss.com"></script>
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
   <body id="wrapper" onload="preload()">
  <div id="loading">

  </div>
  <?php
  include('./components/Header.php')
  ?>
    <div class="px-4 py-2">
      
  <div class="flex flex-row justify-between  text-center  rounded-lg ">
   <div class=" ">
      <h2 class="mb-2 text-left text-xl  font-bold text-teal-800 font-roboto underline ml-2 lg:text-2xl"> Filter By</h2>

     
    </div>
   


   </div>
    <div class="grid gap-x-4 gap-y-8 grid-cols-2 md:gap-x-6 lg:grid-cols-4 xl:grid-cols-4 px-5">
    
<div class="flex flex-col">
<label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select a District</label>
<select name="district" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state" placeholder="Select Option">
                   <option value=""></option>
                  <?php 
         $sql = "SELECT * FROM `districts`"; 
         $result = mysqli_query($conn, $sql);
         while($row = mysqli_fetch_assoc($result)){
          // echo $row['category_id'];
          // echo $row['category_name'];
          $id = $row['ID'];
          $district_name = $row['district_name'];
          

                    
                           echo'
                           
                           <option value="' . $district_name . ' ">' . $district_name . '</option>
                           ';     


                                
                           

		 }

?>
                </select>

</div>
<div class="flex flex-col">
<label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select a Tehsil</label>
<select name="tehsil" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state" placeholder="Select Option">
                   <option value=""></option>
                  <?php 
         $sql = "SELECT * FROM `tehsils`"; 
         $result = mysqli_query($conn, $sql);
         while($row = mysqli_fetch_assoc($result)){
          // echo $row['category_id'];
          // echo $row['category_name'];
          $id = $row['ID'];
          $tehsil_name = $row['tehsil_name'];
          

                    
                           echo'
                           
                           <option value="' . $tehsil_name . ' ">' . $tehsil_name . '</option>
                           ';     


                                
                           

		 }

?>
                </select>
</div>
<div class="flex flex-col">
<label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select a Post Office</label>
<select name="postoffice" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state" placeholder="Select Option">
                  <option value=""></option>
                  <?php 
         $sql = "SELECT * FROM `postoffices`"; 
         $result = mysqli_query($conn, $sql);
         while($row = mysqli_fetch_assoc($result)){
          // echo $row['category_id'];
          // echo $row['category_name'];
          $id = $row['ID'];
          $postoffice = $row['postoffice'];
          

                    
                           echo'
                           
                           <option value="' . $postoffice . ' ">' . $postoffice . '</option>
                           ';     


                                
                           

		 }

?>
                </select>
</div>
<div class="flex flex-col">
<label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select a Village</label>
<select name="village" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state" placeholder="Select Option">
                   <option value=""></option>
                  <?php 
         $sql = "SELECT * FROM `vill_loc`"; 
         $result = mysqli_query($conn, $sql);
         while($row = mysqli_fetch_assoc($result)){
          // echo $row['category_id'];
          // echo $row['category_name'];
          $id = $row['ID'];
          $vill_loc = $row['vill_loc'];
          

                    
                           echo'
                           
                           <option value="' . $vill_loc . ' ">' . $vill_loc . '</option>
                           ';     


                                
                           

		 }

?>
                </select>
</div>
  </div>
  <div class="flex item-center justify-center mt-2">
  <button class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
  <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
    Filter Now
  </span>
</button>
  </div>
</div>
   <div class="p-5">

  
  <div class="flex flex-row justify-between  text-center  rounded-lg ">
   <div class=" ">
      <h2 class="mb-2 text-left text-xl  font-bold text-teal-800 font-roboto underline ml-2 lg:text-2xl"> <?php 
$cat = ($_GET['cat']);

echo($cat);
;?></h2>

     
    </div>
    <div class="">
    <a href="./index.php" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
  <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
      Back
  </span>
</a>
    </div>


   </div>

   <div class="grid gap-x-4 gap-y-8 sm:grid-cols-2 md:gap-x-6 lg:grid-cols-4 xl:grid-cols-4">
     


   <?php 
$cat = ($_GET['cat']);

// echo($cat);
$sql = "SELECT * FROM `Products` WHERE category_name='$cat' order by ID ASC "; 
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
 // echo $row['category_id'];
 // echo $row['category_name'];
 $id = $row['ID'];
 $name = $row['veg_name'];
 $category=$row['category_name'];
 $image1=$row['image1'];
 $price=$row['o_price'];
 $price1=$row['price_dis'];
           
              
 // <!-- product - start -->
echo('

<div>
<a href="./product_detail.php?id='.$id.'" class="group relative mb-2 block h-72 overflow-hidden rounded-lg bg-gray-100 shadow-lg lg:mb-3">
  <img src="./images1/'.$image1.'" loading="lazy" alt="Photo by Nick Karvounis" class="h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
  <div class="absolute left-0 bottom-2 flex gap-2">
    <span class="rounded-r-lg bg-red-500 px-3 py-1.5 text-sm font-semibold uppercase tracking-wider text-white">Rs.'.$price1.'</span>
    <span class="rounded-lg bg-white px-3 py-1.5 text-sm font-bold uppercase tracking-wider text-gray-800">Rs.'.$price.'</span>
  </div>
</a>

<div class="flex items-start justify-between gap-2 px-2 border-b-2 border-green-500">
  <div class="flex flex-col">
    <a href="#" class="text-lg font-bold text-gray-800 transition duration-100 hover:text-gray-500 lg:text-xl">'.$name.'</a>
    <span class="text-gray-500">by Cool Brand</span>
  </div>

  <div class="flex flex-col items-end">
    <span class="font-bold text-gray-600 lg:text-lg">Rs.'.$price1.'</span>
  </div>
</div>
</div>




');
 // <!-- product - end -->

                       
                  

}


;?>

    
   </div>
   </div>
   <?php
include('./components/Footer.php')
?>
    </body>
    <script type="text/javascript">
      var preloaderc= document.getElementById('loading');
      function preload(){
        preloaderc.style.display='none';
      }
      
    
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
 
</html>