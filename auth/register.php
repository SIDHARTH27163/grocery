<?php
// include('../admin/admin_home.php')
session_start();

include('../auth/connect.php')
?>


<!DOCTYPE html>

<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="../css/index.css?v=<?php echo time(); ?>">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />

  <title>Register Fresh Shop</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <!-- header starts -->

  <nav class="bg-teal-700 p-1">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl px-4 md:px-6 py-2.5">
      <a href="../index.php" class="flex items-center">
        <img src="../images/logo.png" class="h-6 mr-3 sm:h-9" alt="Flowbite Logo" />
        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white font-roboto">Fresh Shop</span>
      </a>
      <div class="flex items-center">
        <a href="tel:5541251234" class="mr-6 text-sm font-medium text-white hover:underline">(555) 412-1234</a>
        <a href="../auth/login.php" class="text-sm font-medium text-white hover:underline">Login</a>
      </div>
    </div>
  </nav>


  <!-- header ends -->
  <div class="flex flex-col h-auto p-4   w-full items-center justify-center bg-gray-900 bg-cover bg-no-repeat" style="background-image:url('https://images.pexels.com/photos/1656663/pexels-photo-1656663.jpeg?auto=compress&cs=tinysrgb&w=600')">


    <!-- tost -->



    <!-- toast -->
    <div class="rounded-xl bg-gray-800 my-10   bg-opacity-50 px-16 py-5  shadow-lg backdrop-blur-md max-sm:px-8">
    <?php

$nameErr= $emailErr= $phoneErr=$user_typeErr=$passwordErr=$cpasswordErr=$villageErr=$postofficeErr=$pincodeErr=$tehsilErr=$districtErr=$stateErr="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
   
    $name=$_REQUEST['name'];
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = $_REQUEST["email"];
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["phone"])) {
    $phoneErr = "Phone number is required";
  } else {
    $phone = $_REQUEST["phone"];
    // check if e-mail address is well-formed
    if(!preg_match('/^[0-9]{10}+$/', $phone)) {
      $phoneErr = "Invalid phone number ";
      } 
  }
  if (empty($_POST["user_type"])) {
    $user_typeErr = "This Feild Is Required";
  } else {
   
    $user_type=$_REQUEST['user_type'];
  }
  if (empty($_POST["password"])) {
    $passwordErr = "This Feild Is Required";
  } else {
   
    $password=$_REQUEST['password'];
  }
  if (empty($_POST["cpassword"])) {
    $cpasswordErr = "This Feild Is Required";
  } else {
   
    $cpassword=$_REQUEST['cpassword'];
  }
  if (empty($_POST["village"])) {
    $villageErr = "This Feild Is Required";
  } else {
   
    $village=$_REQUEST['village'];
  }
  if (empty($_POST["postoffice"])) {
    $postofficeErr = "This Feild Is Required";
  } else {
   
    $postoffice=$_REQUEST['postoffice'];
  }
  if(empty($_POST['pincode'])){
    $pincodeErr="This Feild Is Required";

  }else{
      $pincode=$_REQUEST['pincode'];
  }
  if (empty($_POST["tehsil"])) {
    $tehsilErr = "This Feild Is Required";
  } else {
   
    $tehsil=$_REQUEST['tehsil'];
  }
  if (empty($_POST["district"])) {
    $districtErr = "This Feild Is Required";
  } else {
   
    $district=$_REQUEST['district'];
  }
  if (empty($_POST["state"])) {
    $stateErr = "This Feild Is Required";
  } else {
   
    $state=$_REQUEST['state'];
  }

  if(!empty($name )and !empty($email) and !empty($phone) and
  !empty($user_type) and !empty($password)
   and !empty($village) and !empty($postoffice)and 
   !empty($pincode) and !empty($tehsil) and 
   !empty($district) and !empty($state)){

    $sql3 = "CREATE TABLE IF NOT EXISTS users (ID int(30) AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    phone varchar(255) NOT NULL,
    user_type varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    village varchar(255) NOT NULL,
    postoffice varchar(255) NOT NULL,
    pincode varchar(255) NOT NULL,
    tehsil varchar(255) NOT NULL,
    district varchar(255) NOT NULL,
    state varchar(255) NOT NULL,
    update_date DATE NULL DEFAULT CURRENT_TIMESTAMP,
    created_date DATE NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY  (ID))";
    
    if ($conn->query($sql3) === TRUE) {}else{}
    $date=date("Y/m/d");
    $sql  = "INSERT INTO users VALUES(
      NULL,
      '$name' ,'$email' , '$phone' , '$user_type' , '$password' , '$village' , '$postoffice' , '$pincode' ,'$tehsil' , '$district' , '$state' , NULL, '$date')";
  
  if ($conn->query($sql) === TRUE) {
    echo '
    <div id="toast-default" class="flex items-center w-full max-w-xs p-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
        <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-blue-500 bg-blue-100 rounded-lg dark:bg-blue-800 dark:text-blue-200">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd"></path></svg>
            <span class="sr-only">Fire icon</span>
        </div>
        <div class="ml-3 text-sm font-normal">Registered Successfully / Account Created</div>
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


  


  // echo($name);
}


?>
        <div class="mb-2 p-2 flex flex-col items-center">
          <img src="../images/logo.png" class="rounded-full" width="100" alt="" srcset="" />
          <h1 class="mb-2 text-2xl text-white">Fresh Shop</h1>
          <span class="text-gray-300">Enter Your Details</span>
          <!--  -->

        </div>
        <form class="w-full max-w-lg" method="post" action="../auth/register.php">
          <div class="flex flex-wrap -mx-3 mb-2">
            <div class="w-full md:w-1/2 px-3 mb-2 md:mb-0">
              <label class="block uppercase tracking-wide text-gray-100 text-xs font-bold mb-2" for="grid-first-name">
                Full Name
              </label>
              <input name="name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="John Doe">
              <p class="text-red-500 text-xs italic"><?php echo $nameErr;?></p>
            </div>
            <div class="w-full md:w-1/2 px-3">
              <label class="block uppercase tracking-wide text-gray-100 text-xs font-bold mb-2" for="grid-last-name">
                Email
              </label>
              <input name="email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="email" placeholder="john@gmail.com">
              <p class="text-red-500 text-xs italic"><?php echo $emailErr;?></p>
            </div>
          </div>
          <div class="flex flex-wrap -mx-3 mb-2">
            <div class="w-full md:w-1/2 px-3 mb-2 md:mb-0">
              <label class="block uppercase tracking-wide text-gray-100 text-xs font-bold mb-2" for="grid-first-name">
                Phone Number/ Mobile Number
              </label>
              <input name="phone" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="tel" placeholder="00000000">
              <p class="text-red-500 text-xs italic"><?php echo $phoneErr;?></p>
            </div>
            <div class="w-full md:w-1/3 px-3 mb-2 md:mb-0">
              <label class="block uppercase tracking-wide text-gray-100 text-xs font-bold mb-2" for="grid-state">
               Create Account As
              </label>
              <div class="relative">
                <select name="user_type" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state" placeholder="Select Option">
                   <option value=""></option>
                 
                  <option value="1">user</option>
                  <option value="2">farmer</option>
                  <option value="3">Shopkeper/ Seeler</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                  <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                  </svg>
                </div>
              </div>
              <p class="text-red-500 text-xs italic"><?php echo $user_typeErr;?></p>
            </div>
          </div>
          <div class="flex flex-wrap -mx-3 mb-2">
            <div class="w-full md:w-1/2 px-3 mb-2 md:mb-0">
              <label class="block uppercase tracking-wide text-gray-100 text-xs font-bold mb-2" for="grid-password">
                Password
              </label>
              <input name="password" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="password" placeholder="******************">
              <p class="text-red-500 text-xs italic"><?php echo $passwordErr;?></p>
            </div>

            <div class="w-full md:w-1/2 px-3 mb-2 md:mb-0">
              <label class="block uppercase tracking-wide text-gray-100 text-xs font-bold mb-2" for="grid-password">
                Confirm Password
              </label>
              <input name="cpassword" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="password" placeholder="******************">
              <p class="text-red-500 text-xs italic"><?php echo $cpasswordErr;?></p>
            </div>
          </div>
          <div class="flex flex-wrap -mx-3 mb-2">
            <div class="w-full md:w-1/3 px-3 mb-2 md:mb-0">
              <label class="block uppercase tracking-wide text-gray-100 text-xs font-bold mb-2" for="grid-city">
                Village 
              </label>
              <div class="relative">
                <select name="village" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state" placeholder="Select Option">
                   <option value=""></option>
                  <?php 
         $sql = "SELECT * FROM `vill_loc`"; 
         $result = mysqli_query($conn, $sql);
         while($row = mysqli_fetch_assoc($result)){
          // echo $row['category_id'];
          // echo $row['category_name'];
          $id = $row['ID'];
          $vill_loc = $row['vill_loc'];
          

                    
                           echo'
                           
                           <option value="' . $vill_loc . ' ">' . $vill_loc . '</option>
                           ';     


                                
                           

		 }

?>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                  <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                  </svg>
                </div>
              </div>
              <p class="text-red-500 text-xs italic"><?php echo $user_typeErr;?></p>
            </div>
            <div class="w-full md:w-1/3 px-3 mb-2 md:mb-0">
              <label class="block uppercase tracking-wide text-gray-100 text-xs font-bold mb-2" for="grid-state">
                Post Office
              </label>
              <div class="relative">
                <select name="postoffice" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state" placeholder="Select Option">
                  <option value=""></option>
                  <?php 
         $sql = "SELECT * FROM `postoffices`"; 
         $result = mysqli_query($conn, $sql);
         while($row = mysqli_fetch_assoc($result)){
          // echo $row['category_id'];
          // echo $row['category_name'];
          $id = $row['ID'];
          $postoffice = $row['postoffice'];
          

                    
                           echo'
                           
                           <option value="' . $postoffice . ' ">' . $postoffice . '</option>
                           ';     


                                
                           

		 }

?>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                  <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                  </svg>
                </div>
              </div>
              <p class="text-red-500 text-xs italic"><?php echo $postofficeErr;?></p>
            </div>
            <div class="w-full md:w-1/3 px-3 mb-2 md:mb-0">
              <label class="block uppercase tracking-wide text-gray-100 text-xs font-bold mb-2" for="grid-state">
                Pin Code
              </label>
              <div class="relative">
                <select name="pincode" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state" placeholder="Select Option">
                   <option value=""></option>
                  <?php 
         $sql = "SELECT * FROM `pincodes`"; 
         $result = mysqli_query($conn, $sql);
         while($row = mysqli_fetch_assoc($result)){
          // echo $row['category_id'];
          // echo $row['category_name'];
          $id = $row['ID'];
          $pincode_name = $row['pincode_name'];
          

                    
                           echo'
                           
                           <option value="' . $pincode_name . ' ">' . $pincode_name . '</option>
                           ';     


                                
                           

		 }

?>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                  <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                  </svg>
                </div>
              </div>
              <p class="text-red-500 text-xs italic"><?php echo $pincodeErr;?></p>
            </div>
          </div>
          <div class="flex flex-wrap -mx-3 mb-2">
          <div class="w-full md:w-1/3 px-3 mb-2 md:mb-0">
              <label class="block uppercase tracking-wide text-gray-100 text-xs font-bold mb-2" for="grid-state">
                Tehsil
              </label>
              <div class="relative">
                <select name="tehsil" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state" placeholder="Select Option">
                   <option value=""></option>
                  <?php 
         $sql = "SELECT * FROM `tehsils`"; 
         $result = mysqli_query($conn, $sql);
         while($row = mysqli_fetch_assoc($result)){
          // echo $row['category_id'];
          // echo $row['category_name'];
          $id = $row['ID'];
          $tehsil_name = $row['tehsil_name'];
          

                    
                           echo'
                           
                           <option value="' . $tehsil_name . ' ">' . $tehsil_name . '</option>
                           ';     


                                
                           

		 }

?>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                  <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                  </svg>
                </div>
              </div>
              <p class="text-red-500 text-xs italic"><?php echo $tehsilErr;?></p>
            </div>
            <div class="w-full md:w-1/3 px-3 mb-2 md:mb-0">
              <label class="block uppercase tracking-wide text-gray-100 text-xs font-bold mb-2" for="grid-state">
                District
              </label>
              <div class="relative">
                <select name="district" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state" placeholder="Select Option">
                   <option value=""></option>
                  <?php 
         $sql = "SELECT * FROM `districts`"; 
         $result = mysqli_query($conn, $sql);
         while($row = mysqli_fetch_assoc($result)){
          // echo $row['category_id'];
          // echo $row['category_name'];
          $id = $row['ID'];
          $district_name = $row['district_name'];
          

                    
                           echo'
                           
                           <option value="' . $district_name . ' ">' . $district_name . '</option>
                           ';     


                                
                           

		 }

?>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                  <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                  </svg>
                </div>
              </div>
              <p class="text-red-500 text-xs italic"><?php echo $districtErr;?></p>
            </div>
            <div class="w-full md:w-1/3 px-3 mb-2 md:mb-0">
              <label class="block uppercase tracking-wide text-gray-100 text-xs font-bold mb-2" for="grid-state">
               State
              </label>
              <div class="relative">
                <select name="state" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state" placeholder="Select Option">
                   <option value=""></option>
                  <?php 
         $sql = "SELECT * FROM `states`"; 
         $result = mysqli_query($conn, $sql);
         while($row = mysqli_fetch_assoc($result)){
          // echo $row['category_id'];
          // echo $row['category_name'];
          $id = $row['ID'];
          $state_name = $row['state_name'];
          

                    
                           echo'
                           
                           <option value="' . $state_name . ' ">' . $state_name . '</option>
                           ';     


                                
                           

		 }

?>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                  <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                  </svg>
                </div>
              </div>
              <p class="text-red-500 text-xs italic"><?php echo $stateErr;?></p>
            </div>
            </div>
            <div class="w-full py-4 flex items-center justify-center gap-x-3">

<button class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded" type="submit" name="submit">
Register Now
</button>
<span class="text-red-600 font-sans text-sm font-sembold"> Allready Have An Account <a href="../auth/login.php" class="text-lg text-red-700 font-bold font-mono hover:scale-105 hover:underline cursor-pointer">Login Now</a></span>

</div>
          </div>
         
        </form>
      </div>
    
  </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>

</html>