<?php
include('./auth/connect.php');
    
    ?>
<!DOCTYPE html>

<html>
    <head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="./css/index.css?v=<?php echo time(); ?>">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css"  rel="stylesheet" />
  
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
  
    <body id="wrapper" onload="preload()">
  <div id="loading">

  </div>
      <?php
      include './components/Header.php';
      ?>
   
  

    <!-- <div class="icon-bar">
  <a href="#" class="gear"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-11 h-11 text-teal-800 animate-spin hover:w-12 hover:h-12 hover:animate-spin ">
  <path fill-rule="evenodd" d="M11.828 2.25c-.916 0-1.699.663-1.85 1.567l-.091.549a.798.798 0 01-.517.608 7.45 7.45 0 00-.478.198.798.798 0 01-.796-.064l-.453-.324a1.875 1.875 0 00-2.416.2l-.243.243a1.875 1.875 0 00-.2 2.416l.324.453a.798.798 0 01.064.796 7.448 7.448 0 00-.198.478.798.798 0 01-.608.517l-.55.092a1.875 1.875 0 00-1.566 1.849v.344c0 .916.663 1.699 1.567 1.85l.549.091c.281.047.508.25.608.517.06.162.127.321.198.478a.798.798 0 01-.064.796l-.324.453a1.875 1.875 0 00.2 2.416l.243.243c.648.648 1.67.733 2.416.2l.453-.324a.798.798 0 01.796-.064c.157.071.316.137.478.198.267.1.47.327.517.608l.092.55c.15.903.932 1.566 1.849 1.566h.344c.916 0 1.699-.663 1.85-1.567l.091-.549a.798.798 0 01.517-.608 7.52 7.52 0 00.478-.198.798.798 0 01.796.064l.453.324a1.875 1.875 0 002.416-.2l.243-.243c.648-.648.733-1.67.2-2.416l-.324-.453a.798.798 0 01-.064-.796c.071-.157.137-.316.198-.478.1-.267.327-.47.608-.517l.55-.091a1.875 1.875 0 001.566-1.85v-.344c0-.916-.663-1.699-1.567-1.85l-.549-.091a.798.798 0 01-.608-.517 7.507 7.507 0 00-.198-.478.798.798 0 01.064-.796l.324-.453a1.875 1.875 0 00-.2-2.416l-.243-.243a1.875 1.875 0 00-2.416-.2l-.453.324a.798.798 0 01-.796.064 7.462 7.462 0 00-.478-.198.798.798 0 01-.517-.608l-.091-.55a1.875 1.875 0 00-1.85-1.566h-.344zM12 15.75a3.75 3.75 0 100-7.5 3.75 3.75 0 000 7.5z" clip-rule="evenodd" />
</svg>

</a>
  
</div> -->
<div class="top_head ">
<section class="text-gray-600 body-font ">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center ">
    <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col  md:items-start md:text-left mb-16 md:mb-0 items-center text-center p-5 ">
      <div class="bg-gray-100 p-5 rounded-lg ">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Before they sold out
        <br class="hidden lg:inline-block">reach them
      </h1>
      <p class="mb-8 leading-relaxed">Any text regarding to the product place here</p>
      <div class="flex justify-center">
        <a href="#head" class="inline-flex  text-white bg-teal-800 border-0 py-2 px-6 focus:outline-none hover:bg-teal-900 rounded text-lg">Shop Now</a>
       
      </div>
      </div>
    </div>
   
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 p-5 rounded-md opacity-90 bg-teal-900 ">
      <img class="object-cover object-center rounded " alt="hero" src="./images/test.jpeg">
    </div>
  </div>
</section>
</div>
<?php
    include './Widgets/welcome.php';
    ?>
<section class="bg-white dark:bg-gray-900">
    <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
        <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">We didn't reinvent the wheel</h2>
            <p class="mb-4">Operating an online shop focused on parts involves a meticulous blend of precision, quality, and customer-centric service. Whether it's components for automotive, electronics, machinery, or any specialized industry, a parts-oriented online store demands a comprehensive inventory catering to diverse needs.

Such a platform functions as a haven for enthusiasts, professionals, and businesses seeking reliable, high-quality parts. The product range could span intricate mechanical components, electronic modules, hardware, tools, and beyond, ensuring a one-stop destination for varied requirements.</p>
          
        </div>
        <div class="grid grid-cols-2 gap-4 mt-8">
            <img class="w-full rounded-lg" src="images/photo-1542838132-92c53300491e.jpg" alt="office content 1">
            <img class="mt-4 w-full lg:mt-10 rounded-lg" src="images/download.jpg" alt="office content 2">
        </div>
    </div>
</section>
<div>


</div>
<?php
    include './components/Footer.php';
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