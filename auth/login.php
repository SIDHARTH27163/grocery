<?php
// include('../Online_Grocery/index.php')
    session_start();
    $message="";
	
    if(count($_POST)>0) {
        $con = mysqli_connect('localhost','root','','Shop') or die('Unable To connect');
        $result = mysqli_query($con,"SELECT * FROM users WHERE email='" . $_POST["email"] . "' and password = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["id"] = $row['ID'];
        $_SESSION["name"] = $row['name'];
        $_SESSION["email"] = $row['email'];
		
        $_SESSION["user_type"] = $row['user_type'];
		    

		
		
		
        } else {
         $message = "Invalid Username or Password!";
        }
    }
    if(isset($_SESSION["id"])) {
      if($_SESSION["user_type"]==0){
        header("Location:../admin/admin_home.php");
      }
      
        elseif($_SESSION["user_type"]==1){
          header("Location:../index.php");
      }      
      else{

        header("Location:../index.php");
      }
    
    }

?>
<!DOCTYPE html>

<html>
    <head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="../css/index.css?v=<?php echo time(); ?>">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css"  rel="stylesheet" />
       
       
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
    <div class="flex flex-col h-screen w-full items-center justify-center bg-gray-900 bg-cover bg-no-repeat" style="background-image:url('https://images.pexels.com/photos/1656663/pexels-photo-1656663.jpeg?auto=compress&cs=tinysrgb&w=600')">
  
       
<!-- tost -->



<!-- toast -->
        <div class="rounded-xl bg-gray-800 bg-opacity-50 px-16 py-10 shadow-lg backdrop-blur-md max-sm:px-8">
    <div class="text-white">
      <div class="mb-8 flex flex-col items-center">
        <img src="../images/logo.png" class="rounded-full" width="100" alt="" srcset="" />
        <h1 class="mb-2 text-2xl">Fresh Shop</h1>
        <span class="text-gray-300">Enter Login Details</span>
        <span class="text-red-500">  <?php if($message!="") { echo $message; } ?></span>
      
      </div>
      <form action="login.php" method="post">
        <div class="mb-4 text-lg">
          <input class="rounded-3xl border-none bg-teal-800 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-slate-200 shadow-lg outline-none backdrop-blur-md" type="email" name="email" placeholder="id@email.com" />
        </div>

        <div class="mb-4 text-lg">
          <input class="rounded-3xl border-none bg-teal-800 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-slate-200 shadow-lg outline-none backdrop-blur-md" type="Password" name="password" placeholder="*********" />
        </div>
        <div class="mt-8 flex justify-center item-center text-lg text-black">
          <button type="submit" class="rounded-3xl bg-green-900 bg-opacity-50 px-10 py-2 text-white shadow-xl backdrop-blur-md transition-colors duration-300 hover:bg-yellow-600">Login</button>
          
        </div>
        <span class="text-red-600 font-sans text-sm font-sembold"> Didnt Have An Account<br/> <a href="../auth/register.php" class="text-lg text-red-700 font-bold font-mono hover:scale-105 hover:underline cursor-pointer">Create Account Now</a></span>

      </form>
    </div>
  </div>
</div>
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
 
</html>