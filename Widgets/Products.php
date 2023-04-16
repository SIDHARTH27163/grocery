
<!DOCTYPE html>

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
    <body class="">

    <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
      'roboto': ['Roboto Slab', serif]
     
    },
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
        }
      }
    }
  </script>
<div class="">
    
<div class=" py-5">
  <div class="mx-auto max-w-2xl px-4 py-5 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
    <h2 class="text-2xl font-bold tracking-tight text-gray-900 font-roboto">Customers also purchased</h2>

    <div class="mt-6 grid grid-cols-2 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8 bg-white p-4 shadow-lg rounded-tl-xl rounded-br-xl">
    <?php
      
      $sql = "SELECT * FROM `Products` WHERE category_name='Fruits' order by ID DESC LIMIT 4"; 
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
      <div class="group relative shadow-lg shadow-teal-800/40 rounded-lg bg-white">
        <div class="min-h-80 aspect-h-1 aspect-w-1 w-full overflow-hidden  bg-green-200 lg:aspect-none group-hover:opacity-75 lg:h-56">
          <img src="./images1/'.$image1.'" loading="lazy"  class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-2 flex justify-between px-4 pb-2">
          <div>
            <h3 class="text-lg text-teal-800 font-roboto  font-bold">
              <a href="./product_detail.php?id='.$id.'">
                <span aria-hidden="true" class="absolute inset-0 "></span>
                '.$name.'
              </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500">'.$category.'</p>
          </div>
          <p class="text-sm font-medium text-gray-900 flex flex-row">  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-teal-800">
          <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM9 7.5A.75.75 0 009 9h1.5c.98 0 1.813.626 2.122 1.5H9A.75.75 0 009 12h3.622a2.251 2.251 0 01-2.122 1.5H9a.75.75 0 00-.53 1.28l3 3a.75.75 0 101.06-1.06L10.8 14.988A3.752 3.752 0 0014.175 12H15a.75.75 0 000-1.5h-.825A3.733 3.733 0 0013.5 9H15a.75.75 0 000-1.5H9z" clip-rule="evenodd" />
        </svg>
         '.$price1.'</p>
        </div>
      </div>
      ');
      // <!-- product - end -->

                            
                       

 }


  
  ?>
      <!-- More products... -->
    </div>
     <div class="float-right w-full text-right p-1 bg-white"><a href="./All_Category_product.php?cat=Fruits" class="text-blue-600 cursor-pointer hover:underline hover:scale-105 py-1 font-roboto hover:text-lg">View More</a></div>
  </div>
</div>

<!-- for vegitables -->
<div class=" py-5">
  <div class="mx-auto max-w-2xl px-4 py-5 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
    <h2 class="text-2xl font-bold tracking-tight text-gray-900 font-roboto">Customers also purchased</h2>

    <div class="mt-6 grid grid-cols-2 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8 bg-white px-4 pt-4 pb-2 shadow-lg rounded-tr-xl rounded-bl-xl">
    <?php
      
      $sql = "SELECT * FROM `Products` WHERE category_name='Vegitables' order by ID DESC LIMIT 4"; 
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
      <div class="group relative shadow-lg shadow-teal-800/40 rounded-lg bg-white">
        <div class="min-h-80 aspect-h-1 aspect-w-1 w-full overflow-hidden  bg-green-200 lg:aspect-none group-hover:opacity-75 lg:h-56">
          <img src="./images1/'.$image1.'" loading="lazy"  class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-2 flex justify-between px-4 pb-2">
          <div>
            <h3 class="text-lg text-teal-800 font-roboto  font-bold">
              <a href="./product_detail.php?id='.$id.'">
                <span aria-hidden="true" class="absolute inset-0 "></span>
                '.$name.'
              </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500">'.$category.'</p>
          </div>
          <p class="text-sm font-medium text-gray-900 flex flex-row">  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-teal-800">
          <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM9 7.5A.75.75 0 009 9h1.5c.98 0 1.813.626 2.122 1.5H9A.75.75 0 009 12h3.622a2.251 2.251 0 01-2.122 1.5H9a.75.75 0 00-.53 1.28l3 3a.75.75 0 101.06-1.06L10.8 14.988A3.752 3.752 0 0014.175 12H15a.75.75 0 000-1.5h-.825A3.733 3.733 0 0013.5 9H15a.75.75 0 000-1.5H9z" clip-rule="evenodd" />
        </svg>
         '.$price1.'</p>
        </div>
      </div>
      ');
      // <!-- product - end -->

                            
                       

 }


  
  ?>
      <!-- More products... -->
    
    </div>
    <div class="float-right w-full text-right p-1 bg-white"><a href="./All_Category_product.php?cat=Vegitables" class="text-blue-600 cursor-pointer hover:underline hover:scale-105 py-1 font-roboto hover:text-lg">View More</a></div>
  </div>
</div>

<!-- for dairy -->
 
<div class=" py-5">
  <div class="mx-auto max-w-2xl px-4 py-5 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
    <h2 class="text-2xl font-bold tracking-tight text-gray-900 font-roboto">Customers also purchased</h2>

    <div class="mt-6 grid grid-cols-2 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8 bg-white p-4 shadow-lg rounded-tr-xl rounded-bl-xl">
    <?php
      
      $sql = "SELECT * FROM `Products` WHERE category_name='Dairy Products' order by ID DESC LIMIT 4"; 
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
      <div class="group relative shadow-lg shadow-teal-800/40 rounded-lg bg-white">
        <div class="min-h-80 aspect-h-1 aspect-w-1 w-full overflow-hidden  bg-green-200 lg:aspect-none group-hover:opacity-75 lg:h-56">
          <img src="./images1/'.$image1.'" loading="lazy"  class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-2 flex justify-between px-4 pb-2">
          <div>
            <h3 class="text-lg text-teal-800 font-roboto  font-bold">
              <a href="./product_detail.php?id='.$id.'">
                <span aria-hidden="true" class="absolute inset-0 "></span>
                '.$name.'
              </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500">'.$category.'</p>
          </div>
          <p class="text-sm font-medium text-gray-900 flex flex-row">  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-teal-800">
          <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM9 7.5A.75.75 0 009 9h1.5c.98 0 1.813.626 2.122 1.5H9A.75.75 0 009 12h3.622a2.251 2.251 0 01-2.122 1.5H9a.75.75 0 00-.53 1.28l3 3a.75.75 0 101.06-1.06L10.8 14.988A3.752 3.752 0 0014.175 12H15a.75.75 0 000-1.5h-.825A3.733 3.733 0 0013.5 9H15a.75.75 0 000-1.5H9z" clip-rule="evenodd" />
        </svg>
         '.$price1.'</p>
        
        </div>
      </div>
      ');
      // <!-- product - end -->

                            
                       

 }


  
  ?>
      <!-- More products... -->
    </div>
    <div class="float-right w-full text-right p-1 bg-white"><a href="./All_Category_product.php?cat=Dairy Products" class="text-blue-600 cursor-pointer hover:underline hover:scale-105 py-1 font-roboto hover:text-lg">View More</a></div>
  </div>
</div>

</div>
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
 
</html>