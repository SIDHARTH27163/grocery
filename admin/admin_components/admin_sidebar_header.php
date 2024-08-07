

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css"  rel="stylesheet" />
  <link rel="stylesheet" href="../css/index.css?v=<?php echo time(); ?>"/>
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
<body >


<nav class="fixed top-0 z-50 w-full border-b border-gray-200 bg-teal-900 border-gray-700">
  <div class="px-3 py-3 lg:px-5 lg:pl-3">
    <div class="flex items-center justify-between">
      <div class="flex items-center justify-start">
        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-teal-800 focus:outline-none focus:ring-2 focus:ring-gray-200 text-gray-400 hover:bg-gray-700 focus:ring-gray-600">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
               <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>
         </button>
        <a href="../../../Online_Grocery/index.php" class="flex ml-2 md:mr-24">
        <img src="./logo.png" class="h-6 mr-3 sm:h-9 rounded-full" alt="Fresh Shop Logo" />
          <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap text-white">Fresh Grocery Shop</span>
        </a>
      </div>
      <div class="flex items-center">
          <div class="flex items-center ml-3">
            <div>
              <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                <span class="sr-only">Open user menu</span>
                <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
              </button>
            </div>
            <div class="z-50 hidden my-4 text-base list-none divide-y divide-gray-100 rounded shadow bg-gray-700 divide-gray-600" id="dropdown-user">
              <div class="px-4 py-3" role="none">
                <p class="text-sm text-gray-50 text-white" role="none">
                  Neil Sims
                </p>
                <p class="text-sm font-medium text-gray-50 truncate " role="none">
                  neil.sims@flowbite.com
                </p>
              </div>
              <ul class="py-1" role="none">
                <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-50    dark:hover:text-white" role="menuitem">Dashboard</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-50    dark:hover:text-white" role="menuitem">Settings</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-50    dark:hover:text-white" role="menuitem">Earnings</a>
                </li>
                <li>
                  <a href="../../../Online_Grocery/auth/logout.php" class="block px-4 py-2 text-sm text-gray-50    dark:hover:text-white" role="menuitem">Sign out</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
    </div>
  </div>
</nav>

<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full border-r border-gray-200 sm:translate-x-0 bg-teal-900 " aria-label="Sidebar">
   <div class="h-full px-3 pb-4 overflow-y-auto bg-teal-900">
      <ul class="space-y-2">
         <li>
            <a href="../../../Online_Grocery/admin/admin_home.php" class="flex items-center p-2 text-base font-normal text-gray-50 rounded-lg text-white hover:bg-gray-800 bg-teal-900">
               <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 text-gray-400 group-hover:text-gray-50 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
               <span class="ml-3">Dashboard</span>
            </a>
         </li>
         <li>
            <a href="../../../Online_Grocery/admin/admin_category.php" class="flex items-center p-2 text-base font-normal text-gray-50 rounded-lg text-white hover:bg-gray-800 bg-teal-900">
               <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 text-gray-400 group-hover:text-gray-50 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Manage Categories</span>
               <span class="inline-flex items-center justify-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-200 rounded-full dark:bg-gray-700 ">Pro</span>
            </a>
         </li>
         <li>
            <a href="../../../Online_Grocery/admin/manage_products.php" class="flex items-center p-2 text-base font-normal text-gray-50 rounded-lg text-white hover:bg-gray-800 bg-teal-900">
               <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 text-gray-400 group-hover:text-gray-50 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Manage Products</span>
               <span class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
            </a>
         </li>
         <li>
            <a href="../../../Online_Grocery/admin/user_list.php" class="flex items-center p-2 text-base font-normal text-gray-50 rounded-lg text-white hover:bg-gray-800 bg-teal-900">
               <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 text-gray-400 group-hover:text-gray-50 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Manage Users</span>
            </a>
         </li>
         <li>
            <a href="../../../Online_Grocery/admin/admin_cart.php" class="flex items-center p-2 text-base font-normal text-gray-50 rounded-lg text-white hover:bg-gray-800 bg-teal-900">
               <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 text-gray-400 group-hover:text-gray-50 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Manage Orders</span>
            </a>
         </li>
         <li>
            <button type="button" class="flex items-center w-full p-2 text-gray-100 transition duration-75 rounded-lg group hover:bg-teal-800 dark:text-white " aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                  <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-100 transition duration-75 group-hover:text-white  dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
                  <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Add Utilities</span>
                  <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <ul id="dropdown-example" class="hidden py-2 space-y-2">
                  <li>
                     <a href="../../../Online_Grocery/admin/manage_utilities.php" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-teal-800 dark:text-white ">Add Locations / Village</a>
                  </li>
                  <li>
                     <a href="../../../Online_Grocery/admin/manage_utilities.php" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-teal-800 dark:text-white ">Add City</a>
                  </li>
                  <li>
                     <a href="../../../Online_Grocery/admin/manage_utilities.php" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-teal-800 dark:text-white ">Add Pincode</a>
                  </li>
                  <li>
                     <a href="../../../Online_Grocery/admin/manage_utilities.php" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-teal-800 dark:text-white ">Add District</a>
                  </li>
                  <li>
                     <a href="../../../Online_Grocery/admin/manage_utilities.php" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-teal-800 dark:text-white ">Add Tehsil</a>
                  </li>
                  <li>
                     <a href="../../../Online_Grocery/admin/manage_utilities.php" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-teal-800 dark:text-white ">Add State</a>
                  </li>
                  <li>
                     <a href="../../../Online_Grocery/admin/manage_colors.php" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-teal-800 dark:text-white ">Manage colors</a>
                  </li>
            </ul>
         </li>
        
      </ul>
   </div>
</aside>







</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>

</html>