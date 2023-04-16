
<?php 
// include('../../Online_Grocery/images1')
include('../../Online_Grocery/auth/connect.php');
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
      <!-- form  starts -->
      <div class="">
      <p class="text-xl text-white font-serif">
         Add Product
      </p>
    <div class="flex  justify-center item-center h-auto p-2 mb-4 rounded  bg-gray-100">
       
        <div class="w-full p-1 ">
        <form action="./add_product_action.php"  enctype="multipart/form-data" method="post">
        <div class="mt-1 p-2" >
        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enter Vegitable Name</label>
            <input type="text" id="first_name" name="veg_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Enter Name" required>
        </div>
           <div class="flex flex-row justify-between">
           <div class="mt-1 p-2 w-1/2" >
           <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enter Image 1</label>
           <input type="file" id="first_name" name="image1" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Enter Image" required>
           </div>
           <div class="mt-1 p-2 w-1/2" >
           <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enter Image 2</label>
           <input type="file" id="first_name" name="image2" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Enter Image" required>
           </div>
           </div>
<div class="flex flex-row justify-between">
   
<div class="mt-1 p-2 w-1/2" >
           <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enter Image 3</label>
           <input type="file" id="first_name" name="image3" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Enter Image" required>
           </div>
           <div class="mt-1 p-2 w-1/2" >
           <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enter Image 4</label>
           <input type="file" id="first_name" name="image4" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Enter Image" required>
           </div>
</div>

           <div class="mt-1 p-2" >
        
<label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select a Category</label>
<select id="countries" name="category_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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
                           
                           <option value="' . $cat . ' ">' . $cat . '</option>
                           ';     


                                
                           

		 }

?>
</select>

        </div>
        <!-- sub_category_name -->
        <div class="mt-1 p-2" >
               
<label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select a Sub Category</label>
<select id="countries" name="sub_category_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  <option selected>Choose a sub category</option>
  
  <?php 
          $sql = "SELECT * FROM `Category` INNER JOIN `sub_category` ON Category.ID = sub_category.cat_id";  
         $result = mysqli_query($conn, $sql);
         while($row = mysqli_fetch_assoc($result)){
          // echo $row['category_id'];
          // echo $row['category_name'];
          $id = $row['ID'];
         
          $sub_cat = $row['sub_category_name'];
          

                    
                           echo'
                           
                           <option value="' . $sub_cat . ' ">' . $sub_cat . '</option>
                           ';     


                                
                           

		 }

?>
</select>
        </div>
        
        <div class="flex flex-row justify-between">
        <div class="mt-1 p-2 w-1/2" >
        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enter Pack Size 1</label>
            <input type="number" id="first_name" name="pack_size1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Enter Pack Size" required>
        </div>
        <div class="mt-1 p-2 w-1/2" >
        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enter Pack Size 2</label>
            <input type="number" id="first_name" name="pack_size2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Enter Pack Size" required>
        </div>
        </div>
      <div class="flex flx-row justify-between">
      <div class="mt-1 p-2 w-1/2" >
        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enter Pack Size 3</label>
            <input type="number" id="first_name" name="pack_size3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Enter Pack Size" required>
        </div>
        <div class="mt-1 p-2 w-1/2" >
        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enter Pack Size 4</label>
            <input type="number" id="first_name" name="pack_size4" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Enter Pack Size" required>
        </div>
      </div>
       <div class="flex flex-row justify-between">
       <div class="mt-1 p-2 w-1/2" >
        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enter Original Price</label>
            <input type="number" id="first_name" name="o_price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Enter Original Price" required>
        </div>
        <div class="mt-1 p-2 w-1/2" >
        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enter Price After Discount</label>
            <input type="number" id="first_name" name="price_dis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Enter Price After Discount" required>
        </div>
       </div>
        <button type="submit" class=" mt-2 text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Submit </button>
          
        </form>
         </div>
        
       
      </div>
    </div>
    <!-- form ends -->
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg bg-gray-900 border-gray-700 mt-16">
    <table class="w-full text-sm text-left text-gray-500 ">
        <thead class="text-xs text-gray-50 uppercase bg-gray-900 ">
            <tr>
            <th scope="col" class="px-6 py-3">
                   Index
                </th>
                <th scope="col" class="px-6 py-3">
                  Product Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Main Category Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Sub Category Name
                </th>
               
                <th scope="col" class="px-6 py-3">
                   Pack Sizes
                </th>
                <th scope="col" class="px-6 py-3">
                   image
                </th>
                <th scope="col" class="px-6 py-3">
                    Price Before Discount
                </th>
                <th scope="col" class="px-6 py-3">
                    Price After Discount
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
        <?php 
        // $sql = "SELECT * FROM `Category`"; 

         $sql = "SELECT * FROM `Products` ORDER BY ID DESC";  
         $result = mysqli_query($conn, $sql);
         while($row = mysqli_fetch_assoc($result)){
          // echo $row['category_id'];
          // echo $row['category_name'];
          $id = $row['ID'];
          $veg_name = $row['veg_name'];
          $cat = $row['category_name'];
          $sub_cat = $row['sub_category_name'];
          $pack1 = $row['pack_size1'];

          $pack2 = $row['pack_size2'];
          $pack3 = $row['pack_size3'];
          $pack4 = $row['pack_size4'];
          $image = $row['image1'];
          $o_price = $row['o_price'];
          $price_dis = $row['price_dis'];





          

                    
                        //    echo'
                           
                        //    <option value="' . $id . ' ">' . $cat . '</option>
                        //    ';     
echo'

<tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
<th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
' . $id . '
</th>
<td class="px-6 py-4">
' . $veg_name . '
</td>
<td class="px-6 py-4">
' . $cat . '
</td>
<td class="px-6 py-4">
' . $sub_cat . '
</td>
<td class="px-6 py-4">
' . $pack1 . 'kg /'.$pack2.'kg /' . $pack3 . 'kg /'.$pack4.'kg
</td>
<td class="px-6 py-4">

<img src="../images1/'. $image .'" class="h-10 mr-3 sm:h-10" alt="'. $image .'" />


</td>
<td class="px-6 py-4">
' . $o_price . ' Rs/Kg
</td>
<td class="px-6 py-4">
' . $price_dis . ' Rs/kg
</td>
<td class="px-6 py-4">
    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
</td>
</tr>

';

                                
                           

		 }

?>
     <!-- <img src="../images1/images.jpg"/>       -->
            
        </tbody>
    </table>
    </div>
      
   </div>
</div>
   
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>

</html>