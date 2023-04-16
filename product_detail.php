
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
  <link rel="stylesheet" href="./css/index.css?v=<?php echo time(); ?>">
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
  include('./components/Header.php');
  ?>
    <div class="px-4 py-2 bg-teal-700">
     
 
        
        <?php 
       // $nameErr =  "";
$id = ($_GET['id']); 


// <!-- add to cart form  -->

$qErr ="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["quantity"])) {
      $qErr = "Quantity Feild Is Required";
    } else {

        $sql1 = "CREATE TABLE IF NOT EXISTS Cart (ID int(30) AUTO_INCREMENT,
quantity varchar(255) NOT NULL,
total_price int(20) NOT NULL,
u_id varchar(255) NOT NULL,
p_id VARCHAR(255) NOT NULL,
o_status Varchar(205) NOT NULL,
p_status Varchar(205) NOT NULL,
d_status Varchar(205) NOT NULL,
up_date DATE DEFAULT CURRENT_TIMESTAMP,

PRIMARY KEY  (ID))";

if ($conn->query($sql1) === TRUE) {}else{}
      //$name = test_input($_POST["name"]);

// auto create table in database


// <input type="hidden" id="custId" name="p_id" value="'.$name.'">  

//echo()

// auto create ends here
$qun=$_REQUEST['quantity'];
$pr=$_REQUEST['price_disc'];

   
    
$total_price=$qun*$pr;

        $p_id =$id;
        $u_id =$_SESSION['id'];

$sql = $sql = "INSERT INTO Cart VALUES(
    NULL,
    '$qun' , '$total_price' , '$u_id' ,'$p_id' ,'pending','pending' , 'pending',NULL)";

if ($conn->query($sql) === TRUE) {
  echo '<div id="alert-1" class="flex p-4 mb-4 text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
  <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
  <span class="sr-only">Info</span>
  <div class="ml-3 text-sm font-medium">
    Go To Cart <a href="./users_cart.php" class="font-semibold underline hover:no-underline">Click Me</a>.And Order Placed Successfully.
  </div>
    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-1" aria-label="Close">
      <span class="sr-only">Close</span>
      <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
  </button>
</div>';


} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
    }
}

// <!-- add to cart ends logic -->


$sql = "SELECT * FROM Products where ID = '$id' "; 
        
         $result = mysqli_query($conn, $sql);
         while($row = mysqli_fetch_assoc($result)){
          // echo $row['category_id'];
          // echo $row['category_name'];
          $p_id = $row['ID'];
          $name = $row['veg_name'];
          $category=$row['category_name'];
          $subcategory=$row['sub_category_name'];
          $image1=$row['image1'];
          $image2=$row['image2'];
          $image3=$row['image3'];
          $image4=$row['image4'];
          $price=$row['o_price'];
          $price1=$row['price_dis'];
          $pack1=$row['pack_size1'];
          $pack2=$row['pack_size2'];
          $pack3=$row['pack_size3'];
          $pack4=$row['pack_size4'];
          $date=$row['date'];
          //echo($_SESSION['user_type']);
		
		echo'
        <div class="md:flex items-start justify-center py-12 2xl:px-20 md:px-6 px-4 bg-white fade-in">
        <div class="xl:w-2/6 lg:w-2/5 w-80 md:block hidden bg-teal-700 p-4 rounded-t-xl">
            <img src="./images1/'.$image1.'"  loading="lazy" alt="'.$image1.'" class="h-full w-full object-cover object-center transition duration-200 hover:scale-110 "  />
            <img src="./images3/'.$image3.'"  loading="lazy" alt="'.$image3.'" class="h-full w-full object-cover object-center transition duration-200 hover:scale-110 mt-5" />
        </div> 
        <div class="md:hidden">
            <img class="w-full" alt="image of a girl posing" src="./images1/'.$image1.'" />
            <div class="flex items-center justify-between mt-3 space-x-1 md:space-x-0 grid gap-x-1 gap-y-8 grid-cols-2 md:gap-x-6 lg:grid-cols-4 xl:grid-cols-4">
                <img alt="image-tag-one" class="md:w-48 md:h-48 w-full" src="./images1/'.$image1.'" />
                <img alt="image-tag-one" class="md:w-48 md:h-48 w-full" src="./images2/'.$image2.'" />
                <img alt="image-tag-one" class="md:w-48 md:h-48 w-full" src="./images3/'.$image3.'" />
                <img alt="image-tag-one" class="md:w-48 md:h-48 w-full" src="./images4/'.$image4.'" />
            </div>
        </div>
        <div class="xl:w-2/5 md:w-1/2 lg:ml-8 md:ml-6 md:mt-0 mt-6">
            <div class="border-b border-gray-200 pb-6">
                <p class="text-sm leading-none text-gray-900 font-bold  ">'.$subcategory.' '.$category.' </p>
                <h1 class="lg:text-2xl text-xl font-semibold font-serif lg:leading-6 leading-7 text-gray-900  mt-2">'.$name.'</h1>
                <p class="text-sm leading-none text-gray-900 ">Updated On '.$date.'  </p>
            </div>
            
            <div class="py-4 border-b border-gray-200 flex items-center justify-between">
                <p class="text-base leading-4 text-gray-800 ">Pack Size Available</p>
                <div class="flex items-center justify-center">
                    <p class="text-sm leading-none text-gray-700  mr-3">'.$pack1.'kg </p>
                    <p class="text-sm leading-none text-gray-700  mr-3">'.$pack2.'kg </p>
                    <p class="text-sm leading-none text-gray-700  mr-3">'.$pack3.'kg </p>
                    <p class="text-sm leading-none text-gray-700  mr-3">'.$pack4.'kg </p>
                    
                  
                </div>
            </div>';
            if(!isset($_SESSION['id']) ) {
                echo('  
                <a href="./auth/login.php" class=" focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-base flex items-center justify-center leading-none text-white bg-teal-700 w-full py-4 hover:bg-teal-900 focus:outline-none">
                    
                    Login First
                </a>');
            }else{
                echo('
                <p class="text-lg font-bold mt-7 text-green-600 hover:text-gray-800 cursor-pointer hover:scale-105 ">Please Select Quantity</p>  
                <form action="/Online_Grocery/product_detail.php?id='.$id.'" method="post">
                <input type="hidden" id="custId" name="price_disc" value="'.$price1.'">
<label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Pack Quantity</label>
<select id="countries" name="quantity"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>

  <option value="1 ">1 kg</option>
  <option value="2 ">2 Kg</option>
  <option value="5 ">5 Kg</option>
  <option value="10 ">10 kg</option>
  <option value="25 ">25 kg</option>
  <option value="30 ">30 kg</option>
  <option value="40 ">40 kg</option>
  <option value="50 ">50 kg</option>
</select>

               
                <button type="submit" class=" focus:outline-none focus:ring-2 mt-2 focus:ring-offset-2 focus:ring-gray-800 text-base flex items-center justify-center leading-none text-black hover:text-white bg-teal-800 w-full py-4 hover:bg-teal-900 focus:outline-none">
                    
                   Add To Cart/ Buy Now
                </button>
                </form>
                ');
            }

          echo'
            <div>
           <div class="flex flex-row justify-between">
           <p class="text-lg font-bold mt-7 text-red-600 hover:text-red-900 cursor-pointer hover:scale-105 ">'.$name.' Market Price: '.$price.' Rs/Kg </p>
           <p class="text-lg font-bold mt-7 text-green-600 hover:text-gray-800 cursor-pointer hover:scale-105 ">'.$name.' Selling Price: '.$price1.' Rs/Kg</p>
           </div>
                <p class="xl:pr-48 text-base  text-gray-800  mt-7">Enjoy Fresh And Healthy '.$name.' Within Short Period Of Time.</p>
                <p class="text-base leading-4 mt-7 text-gray-700 ">Seller: 8BN321AF2IF0NYA</p>
                
            </div>
            <div>
                <div class="border-t border-b py-4 mt-7 border-gray-200">
                    <div data-menu class="flex justify-between items-center cursor-pointer">
                        <p class="text-base leading-4 text-gray-800 ">Shipping and returns</p>
                        <button class="cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 rounded" role="button" aria-label="show or hide">
                            <img class="transform dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/productDetail3-svg4.svg" alt="dropdown">
                            <img class="transform hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/productDetail3-svg4dark.svg" alt="dropdown">
                        </button>
                    </div>
                    <div class="hidden pt-4 text-base leading-normal pr-12 mt-4 text-gray-700 " id="sect">You will be responsible for paying for your own shipping costs for returning your item. Shipping costs are nonrefundable</div>
                </div>
            </div>
            <div>
                <div class="border-b py-4 border-gray-200">
                    <div data-menu class="flex justify-between items-center cursor-pointer">
                        <p class="text-base leading-4 text-gray-800 ">Contact us</p>
                        <button class="cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 rounded" role="button" aria-label="show or hide">
                            <img class="transform dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/productDetail3-svg4.svg" alt="dropdown">
                            <img class="transform hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/productDetail3-svg4dark.svg" alt="dropdown">
                        </button>
                    </div>
                    <div class="hidden pt-4 text-base leading-normal pr-12 mt-4 text-gray-700 " id="sect">If you have any questions on how to return your item to us, contact us.</div>
                </div>
            </div>
        </div>
    </div>
        
        ';

    

 }

?>
     
</div>
  
   <?php
include('./components/Footer.php')
?>
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
 <script>
    let elements = document.querySelectorAll("[data-menu]");
for (let i = 0; i < elements.length; i++) {
    let main = elements[i];
    main.addEventListener("click", function () {
        let element = main.parentElement.parentElement;
        let andicators = main.querySelectorAll("img");
        let child = element.querySelector("#sect");
        child.classList.toggle("hidden");
        andicators[0].classList.toggle("rotate-180");
    });
}

 </script>
  <script type="text/javascript">
      var preloaderc= document.getElementById('loading');
      function preload(){
        preloaderc.style.display='none';
      }
      
    
    </script>
</html>