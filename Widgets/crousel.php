
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
     
    },
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
        }
      }
    }
  </script>
    </head>
    <body>

  
<div class="py-8  px-6">
    
<div class="flex items-center justify-center w-full h-full py-8  px-6">

<div class="w-full relative flex items-center justify-center">
    <button aria-label="slide backward" class="absolute z-30 left-0 ml-10 bg-black  p-3 focus:outline-none focus:bg-gray-900 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 cursor-pointer" id="prev">
        <svg class="text-gray-100" width="14" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
    </button>
    <div class="w-full h-full mx-auto overflow-x-hidden overflow-y-hidden">
    <h2 class="text-2xl font-bold mb-2 tracking-tight text-gray-900">Our Latest Products</h2>      
 
    <div id="slider" class="h-full flex lg:gap-8 md:gap-6 gap-14 items-center justify-start transition ease-out duration-700">
           
            
           
            <?php

$sql = "SELECT * FROM `Products` order by ID DESC LIMIT 6 "; 
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
echo('

<a href="./product_detail.php?id='.$id.'" class="flex flex-shrink-0 relative w-full sm:w-auto h-80">
<img src="./images1/'.$image1.'" alt="black chair and white table" class="object-contain object-center " />
<div class="bg-teal-800 bg-opacity-30 absolute w-full h-full p-6">
  <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white text-teal-900">'.$category.'</h2>
  <div class="flex h-full items-end pb-6">
      <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white text-teal-900">'.$name.'</h3>
  </div>
</div>
</a>

');
// <!-- product - end -->

                    
               

}



?>
           
           
            
        </div>
    </div>
    <button aria-label="slide forward" class="absolute bg-black  p-3 z-30 right-0 mr-10 focus:outline-none focus:bg-gray-900 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400" id="next">
        <svg class="text-gray-100" width="14" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
    </button>
</div>
</div>



</div>
        
    

    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
 <script>
    let defaultTransform = 0;
function goNext() {
    defaultTransform = defaultTransform - 398;
    var slider = document.getElementById("slider");
    if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.7) defaultTransform = 0;
    slider.style.transform = "translateX(" + defaultTransform + "px)";
}
next.addEventListener("click", goNext);
function goPrev() {
    var slider = document.getElementById("slider");
    if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
    else defaultTransform = defaultTransform + 398;
    slider.style.transform = "translateX(" + defaultTransform + "px)";
}
prev.addEventListener("click", goPrev);

 </script>



</html>