<?php
require 'views/partials/head.php';
require 'controllers/admin/admin.adduser.validation.php';
?>
<div class="relative flex flex-col justify-center min-h-screen overflow-hidden w-full ">
        <div
            class="w-full text-black  p-6 m-auto bg-[#f5f5f5] border-t rounded-xl border-[#B60505]  shadow-lg shadow-red-800/50 lg:max-w-md  ">
            <h1 class="text-3xl font-semibold text-center text-[#B60505]">Admin</h1>
            <form action='' class="mt-6" method="get">
                <div class="mt-4">
                    <label for="text" class="block  font-sans ">Username</label>
                    <input type="text" placeholder="username" name='username' value='<?php echo isset($_GET['username']) ? $_GET['username'] : ''; ?>'
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md focus:border-black focus:ring-red-300 focus:outline-none focus:ring focus:ring-opacity-40 ">                        
                </div>
                <div class="mt-4">
                    <label for="email" class="block font-sans ">Email</label>
                    <input type="email" placeholder="email" name='email' value='<?php echo isset($_GET['email']) ? $_GET['email'] : ''; ?>' 
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md focus:border-black focus:ring-red-300 focus:outline-none focus:ring focus:ring-opacity-40 ">                        
                </div>
                <div class="mt-4">
                        <label for="password" class="block font-sans ">Password</label>
                        <input type="password" placeholder="password" name='password' value='<?php echo isset($_GET['password']) ? $_GET['password'] : ''; ?>'
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md focus:border-black focus:ring-red-300 focus:outline-none focus:ring focus:ring-opacity-40 ">                               
                </div>              
                <label class="block mt-6">
                    <span class="text-gray-700 focus:border-black">Roles</span>
                    <select class="form-select mt-1 block w-full px-4 py-2 text-gray-700 focus:border-black" name= 'role' value='<?php echo isset($_GET['role']) ? $_GET['role'] : ''; ?>' >
                        <option>select roles...</option>           
                        <option value= '1'>admin</option>
                        <option value= '2'>seller</option>
                        <option value= '3'>customer</option>                      
                    </select>
                </label>
                <div class="mt-4">
                        <label for="password" class="block font-sans ">Date of birth</label>
                        <input type="date" placeholder="password" name='date-of-birth'  value='<?php echo isset($_GET['date-of-birth']) ? $_GET['date-of-birth'] : ''; ?>' 
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md focus:border-black focus:ring-red-300 focus:outline-none focus:ring focus:ring-opacity-40 ">                                          
                </div> 
                <div class="mt-6">
                    <button  name="submit"
                        class="w-full px-4 py-2 tracking-wide text-white  font-sans transition-colors duration-200 transform bg-[#B60505] rounded-md hover:bg-[#B60505] focus:outline-none focus:bg-[#B60505]">
                        Create
                    </button>
                </div>
            </form>
            <p class="mt-8 text-xs font-light text-center text-gray-700"><a href="/admin"
                class="font-medium text-[#B60505] hover:underline">Back</a></p>
        </div>
    </div>