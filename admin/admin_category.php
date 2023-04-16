
<?php 

include('../../Online_Grocery/auth/connect.php');
?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css"  rel="stylesheet" />
  <title>
    Admin Categories
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
    <div class="">
      <p class="text-xl text-white font-serif">
         Add Categories
      </p>
    <div class="flex  justify-center item-center h-auto p-2 mb-4 rounded  bg-gray-100">
       
        <div class="w-full p-1 ">
        <form action="./add_cat_action.php" method="post">
        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enter Category Name</label>
            <input type="text" id="first_name" name="cat_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Category Name" required>
        
            <button type="submit" class=" mt-2 text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Submit Category</button>
        </form>
         </div>
        
       
      </div>
    </div>
    <!-- sub categories block -->
    <div class="">
      <p class="text-xl text-white font-serif">
         Add Sub Categories
      </p>
    <div class="flex  justify-center item-center h-auto p-2 mb-4 rounded  bg-gray-100">
       
        <div class="w-full p-1 ">
        <form action="./add_sub_cat_action.php" method="post">
        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enter Sub Category Name</label>
            <input type="text" id="first_name" name="sub_category_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Category Name" required>
        
<label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Main Category</label>


<select id="countries" name="cat_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  <option selected>Choose a category</option>


  <?php 
         $sql = "SELECT * FROM `Category`"; 
         $result = mysqli_query($conn, $sql);
         while($row = mysqli_fetch_assoc($result)){
          // echo $row['category_id'];
          // echo $row['category_name'];
          $id = $row['ID'];
          $cat = $row['cat_name'];
          

                    
                           echo'
                           
                           <option value="' . $id . ' ">' . $cat . '</option>
                           ';     


                                
                           

		 }

?>


  <option value="None">None</option>
  
</select>

            <button type="submit" class=" mt-2 text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Submit Category</button>
        </form>
         </div>
        
       
      </div>
    </div>
    <!-- sub categories block end -->
    <div class="">
      <p class="text-xl text-white font-serif">
        Categories List Here
      </p>
    <div class="flex  justify-center item-center h-auto p-2 mb-4 rounded  bg-gray-100">
       
        <div class="w-full p-1 ">
       <!-- category  na d main catgeory list -->

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 ">
        <thead class="text-xs text-gray-50 uppercase bg-gray-900 ">
            <tr>
            <th scope="col" class="px-6 py-3">
                   Index
                </th>
                <th scope="col" class="px-6 py-3">
                    Main Category Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Sub Category Name
                </th>
               
              
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
        <?php 
        // $sql = "SELECT * FROM `Category`"; 

         $sql = "SELECT * FROM `Category` INNER JOIN `sub_category` ON Category.ID = sub_category.cat_id";  
         $result = mysqli_query($conn, $sql);
         while($row = mysqli_fetch_assoc($result)){
          // echo $row['category_id'];
          // echo $row['category_name'];
          $id = $row['ID'];
          $cat = $row['cat_name'];
          $sub_cat = $row['sub_category_name'];

          

                    
                        //    echo'
                           
                        //    <option value="' . $id . ' ">' . $cat . '</option>
                        //    ';     
echo'

<tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
<th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
' . $id . '
</th>
<td class="px-6 py-4">
' . $cat . '
</td>
<td class="px-6 py-4">
' . $sub_cat . '
</td>

<td class="px-6 py-4">
    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
</td>
</tr>

';

                                
                           

		 }

?>
           
            
        </tbody>
    </table>
</div>

         </div>
        
       
      </div>
    </div>
      
      
   </div>
</div>
   
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>

</html>