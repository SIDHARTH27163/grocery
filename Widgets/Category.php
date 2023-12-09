
<!DOCTYPE html>

<html>
    <head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/index.css?v=<?php echo time(); ?>">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css"  rel="stylesheet" />
       
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body id="wrapper" onload="preload()">
  <div id="loading">

  </div>
    
<div class="p-3 bg-teal-800 ">



<ul class=" text-sm font-medium text-center text-gray-500 divide-x divide-teal-800 rounded-lg shadow grid gap-x-4 gap-y-8 grid-cols-2 md:gap-x-6 lg:grid-cols-4 xl:grid-cols-4">

<?php 
         $sql = "SELECT * FROM `Category`"; 
         $result = mysqli_query($conn, $sql);
         while($row = mysqli_fetch_assoc($result)){
          // echo $row['category_id'];
          // echo $row['category_name'];
          $id = $row['ID'];
          $cat = $row['cat_name'];
          

                    
                        
                           echo'    <li class="w-full">
                           <a href="./All_Category_product.php?cat=' . $cat . '" class="inline-block rounded-md w-full p-4 text-gray-900 bg-gray-100 rounded-l-lg focus:ring-4 focus:ring-blue-300 hover:bg-amber-400  focus:outline-none " >' . $cat . '</a>
                       </li>';

                                
                           

		 }

?>


    <!-- <li class="w-full">
        <a href="./All_Category_product.php?cat=Vegitables" class="inline-block rounded-md w-full p-4 text-gray-900 bg-gray-100 rounded-l-lg focus:ring-4 focus:ring-blue-300 hover:bg-amber-400  focus:outline-none " >Vegitables</a>
    </li> -->
    <!-- <li class="w-full">
        <a href="./All_Category_product.php?cat=Fruits" class="inline-block rounded-md w-full p-4 text-gray-900 bg-gray-100 rounded-l-lg focus:ring-4 focus:ring-blue-300 hover:bg-amber-400  focus:outline-none ">Fruits</a>
    </li>
    <li class="w-full">
        <a href="./All_Category_product.php?cat=Dairy" class="inline-block rounded-md w-full p-4 text-gray-900 bg-gray-100 rounded-l-lg focus:ring-4 focus:ring-blue-300 hover:bg-amber-400  focus:outline-none ">Dairy Products</a>
    </li>
    <li class="w-full">
        <a href="./All_Category_product.php?cat=Meat" class="inline-block rounded-md w-full p-4 text-gray-900 bg-gray-100 rounded-l-lg focus:ring-4 focus:ring-blue-300 hover:bg-amber-400  focus:outline-none ">Chicken , Meat And Fish</a>
    </li> -->
</ul>
</div>

    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
 
</html>