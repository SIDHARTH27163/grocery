
<?php 
// include('../../Online_Grocery/images1')
include('../auth/connect.php');
?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css"  rel="stylesheet" />
  <link rel="stylesheet" href="../css/index.css?v=<?php echo time(); ?>"/>
  <title>Admin Cart</title>
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
                  Order Date
                </th>
               
                <th scope="col" class="px-6 py-3">
                   Quantity
                </th>
                <th scope="col" class="px-6 py-3">
                   image
                </th>
                <th scope="col" class="px-6 py-3">
                    Payemnet
                </th>
                <th scope="col" class="px-6 py-3">
                    Delivery
                </th>
                <th scope="col" class="px-6 py-3">
                    Order Status
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
        <?php 
        // $sql = "SELECT * FROM `Category`"; 

        $sql = "SELECT * FROM `products` INNER JOIN `cart` ON products.Id = cart.p_id  order by products.ID DESC " ; 
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
 // echo $row['category_id'];
 $id = $row['ID'];
 $name = $row['veg_name'];
 $category=$row['category_name'];
 $image=$row['image1'];
 $price=$row['price_dis'];
 $price1=$row['total_price'];
 $q=$row['quantity'];
 $p_status=$row['p_status'];
 $o_status=$row['o_status'];
 $d_status=$row['d_status'];
 $date=$row['date'];





          

                    
                        //    echo'
                           
                        //    <option value="' . $id . ' ">' . $cat . '</option>
                        //    ';     
echo'

<tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
<th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
' . $id . '
</th>
<td class="px-6 py-4">
' . $name . '
</td>
<td class="px-6 py-4">
' . $category . '
</td>

<td class="px-6 py-4">
' . $date . '
</td>
<td class="px-6 py-4">
' . $q.'kg
</td>
<td class="px-6 py-4">

<img src="../images1/'. $image .'" class="h-10 mr-3 sm:h-10" alt="'. $image .'" />


</td>
<td class="px-6 py-4">
' . $p_status . ' 
</td>
<td class="px-6 py-4">
' . $d_status . ' 
</td>
<td class="px-6 py-4">
' . $o_status . ' 
</td>
<td class="px-6 py-4">
    <a href="../../Online_Grocery/admin/update_orders.php?id='.$id.'" class=" cursor-pointer font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
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