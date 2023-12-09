
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
  <title>
   Manage Utilities
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
      <div class=" h-auto mb-4 rounded  bg-gray-100">
         
      <p class="text-2xl text-center text-gray-400 dark:text-gray-500">Add Utilities</p>
      <p class="text-lg text-center text-gray-700 ">Add Locality / Village</p> 
      <div class="flex  justify-center item-center h-auto p-2 mb-4 rounded  bg-gray-100">
       <!-- action for village entry -->
     
       
       <!-- code ends -->
       <div class="w-full p-1 mx-auto">
       <?php
       
       $vill_locErr="";
       if(isset($_POST["submit_village"])) {

        $sql1 = "CREATE TABLE IF NOT EXISTS vill_loc (ID int(30) AUTO_INCREMENT,
        vill_loc varchar(255) NOT NULL,
        
        up_date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
        
        PRIMARY KEY  (ID))";
        
        if ($conn->query($sql1) === TRUE) {}else{}

        if (empty($_POST["vill_loc"])) {
          $vill_locErr ="* This Feild Is Required";
        } else {
         
          $vill_loc=$_REQUEST['vill_loc'];
          
        }
       if(!empty($vill_loc)){
        $date=date("Y/m/d");
        $sql  = "INSERT INTO vill_loc VALUES(
          NULL,
          '$vill_loc' ,'$date')";
      
      if ($conn->query($sql) === TRUE) {
        echo '
        <div id="toast-default" class="flex items-center w-full max-w-xs p-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-blue-500 bg-blue-100 rounded-lg dark:bg-blue-800 dark:text-blue-200">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Fire icon</span>
            </div>
            <div class="ml-3 text-sm font-normal">Village / Locality inserted</div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-default" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
        ';
      
      
      } else {
        echo "Error: " . $sql . "<br>" . $conn->$error;
      }
       }


      

    }
       
       ?>

       <form action="../../Online_Grocery/admin/manage_utilities.php" method="post">
       <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enter Locality Name</label>
           <input type="text" id="first_name" name="vill_loc" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Locality Name" >
           <p class="text-red-500 text-xs italic"><?php echo $vill_locErr;?></p>
           <button type="submit_village" name="submit_village" class=" mt-2 text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Submit </button>
       </form>
        </div>
       
      
     </div> 
    </div>
    <!-- for adding city -->
    <div class=" h-auto mb-4 rounded  bg-gray-100">
         
         <p class="text-2xl text-center text-gray-400 dark:text-gray-500">Add Utilities</p>
         <p class="text-lg text-center text-gray-700 ">Add City</p> 
         <div class="flex  justify-center item-center h-auto p-2 mb-4 rounded  bg-gray-100">
          <!-- action for village entry -->
        
          
          <!-- code ends -->
          <div class="w-full p-1 mx-auto">
          <?php
          
          $cityErr="";
          if(isset($_POST["submit_city"])) {
   
           $sql3 = "CREATE TABLE IF NOT EXISTS cities (ID int(30) AUTO_INCREMENT,
           city_name varchar(255) NOT NULL,
           
           up_date DATE NOT NULL DEFAULT CURRENT_TIMESTAMP,
           
           PRIMARY KEY  (ID))";
           
           if ($conn->query($sql3) === TRUE) {}else{}
   
           if (empty($_POST["city"])) {
             $cityErr ="* This Feild Is Required";
           } else {
            
             $city=$_REQUEST['city'];
             
           }
          if(!empty($city)){
           $date=date("Y/m/d");
           $sql4 =  "INSERT INTO cities VALUES(
             NULL,
             '$city' ,'$date')";
         
         if ($conn->query($sql4) === TRUE) {
           echo '
           <div id="toast-default" class="flex items-center w-full max-w-xs p-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
               <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-blue-500 bg-blue-100 rounded-lg dark:bg-blue-800 dark:text-blue-200">
                   <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd"></path></svg>
                   <span class="sr-only">Fire icon</span>
               </div>
               <div class="ml-3 text-sm font-normal">City Added</div>
               <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-default" aria-label="Close">
                   <span class="sr-only">Close</span>
                   <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
               </button>
           </div>
           ';
         
         
         } else {
           echo "Error: " . $sql4 . "<br>" . $conn->$error;
         }
          }
   
   
         
   
       }
          
          ?>
   
          <form action="../../Online_Grocery/admin/manage_utilities.php" method="post">
          <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enter City Name</label>
              <input type="text" id="first_name" name="city" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter City Name" >
              <p class="text-red-500 text-xs italic"><?php echo $cityErr;?></p>
              <button type="submit_city" name="submit_city" class=" mt-2 text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Submit </button>
          </form>
           </div>
          
         
        </div> 
       </div>
      
      <!-- for adding city ends -->
<!-- for adding tehsil starts here -->
<div class=" h-auto mb-4 rounded  bg-gray-100">
         
         <p class="text-2xl text-center text-gray-400 dark:text-gray-500">Add Utilities</p>
         <p class="text-lg text-center text-gray-700 ">Add Tehsil</p> 
         <div class="flex  justify-center item-center h-auto p-2 mb-4 rounded  bg-gray-100">
         
          
          <!-- code ends -->
          <div class="w-full p-1 mx-auto">
          <?php
          
          $tehsilErr="";
          if(isset($_POST["submit_tehsil"])) {
   
           $sql3 = "CREATE TABLE IF NOT EXISTS tehsils (ID int(30) AUTO_INCREMENT,
           tehsil_name varchar(255) NOT NULL,
           
           up_date DATE NOT NULL DEFAULT CURRENT_TIMESTAMP,
           
           PRIMARY KEY  (ID))";
           
           if ($conn->query($sql3) === TRUE) {}else{}
   
           if (empty($_POST["tehsil"])) {
             $tehsilErr ="* This Feild Is Required";
           } else {
            
             $tehsil=$_REQUEST['tehsil'];
             
           }
          if(!empty($tehsil)){
           $date=date("Y/m/d");
           $sql4 =  "INSERT INTO tehsils VALUES(
             NULL,
             '$tehsil' ,'$date')";
         
         if ($conn->query($sql4) === TRUE) {
           echo '
           <div id="toast-default" class="flex items-center w-full max-w-xs p-4 text-gray-900 bg-blue-900 rounded-lg shadow " role="alert">
               <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-blue-500 bg-blue-100 rounded-lg dark:bg-blue-800 dark:text-blue-200">
                   <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd"></path></svg>
                   <span class="sr-only">Fire icon</span>
               </div>
               <div class="ml-3 text-sm font-normal text-white">Tehsil Added</div>
               <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-default" aria-label="Close">
                   <span class="sr-only">Close</span>
                   <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
               </button>
           </div>
           ';
         
         
         } else {
           echo "Error: " . $sql4 . "<br>" . $conn->$error;
         }
          }
   
   
         
   
       }
          
          ?>
   
          <form action="../../Online_Grocery/admin/manage_utilities.php" method="post">
          <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enter Tehsil Name</label>
              <input type="text" id="first_name" name="tehsil" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Tehsil Name" >
              <p class="text-red-500 text-xs italic"><?php echo $tehsilErr;?></p>
              <button type="submit_tehsil" name="submit_tehsil" class=" mt-2 text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Submit </button>
          </form>
           </div>
          
         
        </div> 
       </div>
<!-- for adding tehsil ends -->

<!-- for adding district starts here -->
<div class=" h-auto mb-4 rounded  bg-gray-100">
         
         <p class="text-2xl text-center text-gray-400 dark:text-gray-500">Add Utilities</p>
         <p class="text-lg text-center text-gray-700 ">Add District</p> 
         <div class="flex  justify-center item-center h-auto p-2 mb-4 rounded  bg-gray-100">
          <!-- action for district entry -->
        
          
          <!-- code ends -->
          <div class="w-full p-1 mx-auto">
          <?php
          
          $districtErr="";
          if(isset($_POST["submit_district"])) {
   
           $sql3 = "CREATE TABLE IF NOT EXISTS districts (ID int(30) AUTO_INCREMENT,
           district_name varchar(255) NOT NULL,
           
           up_date DATE NOT NULL DEFAULT CURRENT_TIMESTAMP,
           
           PRIMARY KEY  (ID))";
           
           if ($conn->query($sql3) === TRUE) {}else{}
   
           if (empty($_POST["district"])) {
             $districtErr ="* This Feild Is Required";
           } else {
            
             $district=$_REQUEST['district'];
             
           }
          if(!empty($district)){
           $date=date("Y/m/d");
           $sql4 =  "INSERT INTO districts VALUES(
             NULL,
             '$district' ,'$date')";
         
         if ($conn->query($sql4) === TRUE) {
           echo '
           <div id="toast-default" class="flex items-center w-full max-w-xs p-4 text-gray-900 bg-blue-900 rounded-lg shadow " role="alert">
               <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-blue-500 bg-blue-100 rounded-lg dark:bg-blue-800 dark:text-blue-200">
                   <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd"></path></svg>
                   <span class="sr-only">Fire icon</span>
               </div>
               <div class="ml-3 text-sm font-normal text-white">district Added</div>
               <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-default" aria-label="Close">
                   <span class="sr-only">Close</span>
                   <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
               </button>
           </div>
           ';
         
         
         } else {
           echo "Error: " . $sql4 . "<br>" . $conn->$error;
         }
          }
   
   
         
   
       }
          
          ?>
   
          <form action="../../Online_Grocery/admin/manage_utilities.php" method="post">
          <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enter District Name</label>
              <input type="text" id="first_name" name="district" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter District Name" >
              <p class="text-red-500 text-xs italic"><?php echo $districtErr;?></p>
              <button type="submit_district" name="submit_district" class=" mt-2 text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Submit </button>
          </form>
           </div>
          
         
        </div> 
       </div>
<!-- for adding district ends -->
<!-- post office starts -->

<div class=" h-auto mb-4 rounded  bg-gray-100">
         
         <p class="text-2xl text-center text-gray-400 dark:text-gray-500">Add Utilities</p>
         <p class="text-lg text-center text-gray-700 ">Add post office</p> 
         <div class="flex  justify-center item-center h-auto p-2 mb-4 rounded  bg-gray-100">
          <!-- action for postoffice entry -->
        
          
          <!-- code ends -->
          <div class="w-full p-1 mx-auto">
          <?php
          
          $postofficeErr="";
          if(isset($_POST["submit_postoffice"])) {
   
           $sql3 = "CREATE TABLE IF NOT EXISTS postoffices (ID int(30) AUTO_INCREMENT,
           postoffice varchar(255) NOT NULL,
           
           up_date DATE NOT NULL DEFAULT CURRENT_TIMESTAMP,
           
           PRIMARY KEY  (ID))";
           
           if ($conn->query($sql3) === TRUE) {}else{}
   
           if (empty($_POST["postoffice"])) {
             $postofficeErr ="* This Feild Is Required";
           } else {
            
             $postoffice=$_REQUEST['postoffice'];
             
           }
          if(!empty($postoffice)){
           $date=date("Y/m/d");
           $sql4 =  "INSERT INTO postoffices VALUES(
             NULL,
             '$postoffice' ,'$date')";
         
         if ($conn->query($sql4) === TRUE) {
           echo '
           <div id="toast-default" class="flex items-center w-full max-w-xs p-4 text-gray-900 bg-blue-900 rounded-lg shadow " role="alert">
               <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-blue-500 bg-blue-100 rounded-lg dark:bg-blue-800 dark:text-blue-200">
                   <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd"></path></svg>
                   <span class="sr-only">Fire icon</span>
               </div>
               <div class="ml-3 text-sm font-normal text-white">Postoffice Added</div>
               <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-default" aria-label="Close">
                   <span class="sr-only">Close</span>
                   <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
               </button>
           </div>
           ';
         
         
         } else {
           echo "Error: " . $sql4 . "<br>" . $conn->$error;
         }
          }
   
   
         
   
       }
          
          ?>
   
          <form action="../../Online_Grocery/admin/manage_utilities.php" method="post">
          <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enter postoffice</label>
              <input type="text" id="first_name" name="postoffice" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Post office Name" >
              <p class="text-red-500 text-xs italic"><?php echo $postofficeErr;?></p>
              <button type="submit_postoffice" name="submit_postoffice" class=" mt-2 text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Submit </button>
          </form>
           </div>
          
         
        </div> 
       </div>



<!-- post office ends -->
<!-- for adding pincode starts here -->
<div class=" h-auto mb-4 rounded  bg-gray-100">
         
         <p class="text-2xl text-center text-gray-400 dark:text-gray-500">Add Utilities</p>
         <p class="text-lg text-center text-gray-700 ">Add Pincode</p> 
         <div class="flex  justify-center item-center h-auto p-2 mb-4 rounded  bg-gray-100">
          <!-- action for pincode entry -->
        
          
          <!-- code ends -->
          <div class="w-full p-1 mx-auto">
          <?php
          
          $pincodeErr="";
          if(isset($_POST["submit_pincode"])) {
   
           $sql3 = "CREATE TABLE IF NOT EXISTS pincodes (ID int(30) AUTO_INCREMENT,
           pincode_name varchar(255) NOT NULL,
           
           up_date DATE NOT NULL DEFAULT CURRENT_TIMESTAMP,
           
           PRIMARY KEY  (ID))";
           
           if ($conn->query($sql3) === TRUE) {}else{}
   
           if (empty($_POST["pincode"])) {
             $pincodeErr ="* This Feild Is Required";
           } else {
            
             $pincode=$_REQUEST['pincode'];
             
           }
          if(!empty($pincode)){
           $date=date("Y/m/d");
           $sql4 =  "INSERT INTO pincodes VALUES(
             NULL,
             '$pincode' ,'$date')";
         
         if ($conn->query($sql4) === TRUE) {
           echo '
           <div id="toast-default" class="flex items-center w-full max-w-xs p-4 text-gray-900 bg-blue-900 rounded-lg shadow " role="alert">
               <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-blue-500 bg-blue-100 rounded-lg dark:bg-blue-800 dark:text-blue-200">
                   <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd"></path></svg>
                   <span class="sr-only">Fire icon</span>
               </div>
               <div class="ml-3 text-sm font-normal text-white">Pincode Added</div>
               <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-default" aria-label="Close">
                   <span class="sr-only">Close</span>
                   <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
               </button>
           </div>
           ';
         
         
         } else {
           echo "Error: " . $sql4 . "<br>" . $conn->$error;
         }
          }
   
   
         
   
       }
          
          ?>
   
          <form action="../../Online_Grocery/admin/manage_utilities.php" method="post">
          <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enter Pincode</label>
              <input type="text" id="first_name" name="pincode" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter pincode Name" >
              <p class="text-red-500 text-xs italic"><?php echo $pincodeErr;?></p>
              <button type="submit_pincode" name="submit_pincode" class=" mt-2 text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Submit </button>
          </form>
           </div>
          
         
        </div> 
       </div>
<!-- for adding pincode ends -->
<!-- for adding state starts here -->
<div class=" h-auto mb-4 rounded  bg-gray-100">
         
         <p class="text-2xl text-center text-gray-400 dark:text-gray-500">Add Utilities</p>
         <p class="text-lg text-center text-gray-700 ">Add state</p> 
         <div class="flex  justify-center item-center h-auto p-2 mb-4 rounded  bg-gray-100">
          <!-- action for state entry -->
        
          
          <!-- code ends -->
          <div class="w-full p-1 mx-auto">
          <?php
          
          $stateErr="";
          if(isset($_POST["submit_state"])) {
   
           $sql3 = "CREATE TABLE IF NOT EXISTS states (ID int(30) AUTO_INCREMENT,
           state_name varchar(255) NOT NULL,
           
           up_date DATE NOT NULL DEFAULT CURRENT_TIMESTAMP,
           
           PRIMARY KEY  (ID))";
           
           if ($conn->query($sql3) === TRUE) {}else{}
   
           if (empty($_POST["state"])) {
             $stateErr ="* This Feild Is Required";
           } else {
            
             $state=$_REQUEST['state'];
             
           }
          if(!empty($state)){
           $date=date("Y/m/d");
           $sql4 =  "INSERT INTO states VALUES(
             NULL,
             '$state' ,'$date')";
         
         if ($conn->query($sql4) === TRUE) {
           echo '
           <div id="toast-default" class="flex items-center w-full max-w-xs p-4 text-gray-900 bg-blue-900 rounded-lg shadow " role="alert">
               <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-blue-500 bg-blue-100 rounded-lg dark:bg-blue-800 dark:text-blue-200">
                   <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd"></path></svg>
                   <span class="sr-only">Fire icon</span>
               </div>
               <div class="ml-3 text-sm font-normal text-white">State Added</div>
               <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-default" aria-label="Close">
                   <span class="sr-only">Close</span>
                   <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
               </button>
           </div>
           ';
         
         
         } else {
           echo "Error: " . $sql4 . "<br>" . $conn->$error;
         }
          }
   
   
         
   
       }
          
          ?>
   
          <form action="../../Online_Grocery/admin/manage_utilities.php" method="post">
          <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enter state</label>
              <input type="text" id="first_name" name="state" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter state Name" >
              <p class="text-red-500 text-xs italic"><?php echo $stateErr;?></p>
              <button type="submit_state" name="submit_state" class=" mt-2 text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Submit </button>
          </form>
           </div>
          
         
        </div> 
       </div>
<!-- for adding State ends -->
    </div>
</div>
   
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>

</html>