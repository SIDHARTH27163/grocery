

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css"  rel="stylesheet" />
  <link rel="stylesheet" href="../css/index.css?v=<?php echo time(); ?>"/>
  <title>
    Manage Theme Colors
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
   <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg bg-teal-900 border-gray-700 mt-16">
      <div class="grid grid-cols-3 gap-4 mb-4">
         <div class="flex items-center justify-center h-24 rounded  bg-gray-100">
            <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
         </div>
         <div class="flex items-center justify-center h-24 rounded  bg-gray-100">
            <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
         </div>
         <div class="flex items-center justify-center h-24 rounded  bg-gray-100">
            <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
         </div>
      </div>
      <div class="flex items-center justify-center h-48 mb-4 rounded  bg-gray-100">
         <p class="text-2xl text-gray-400 dark:text-gray-500">Colors</p>
      </div>
    
      
      
   </div>
</div>
   
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>

</html>