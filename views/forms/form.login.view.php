<?php
require 'views/partials/head.php';
require 'controllers/forms/login/form.login.controller.validate.php';
?>
 <div class="flex w-full pl-6 pt-6">
    <a href="/" class="text-white " >
        <button class="w-full px-4 py-2  tracking-wide text-white font-sans transition-colors duration-200 transform bg-[#B60505] rounded-md hover:bg-[#B60505] focus:outline-none focus:bg-[#B60505]">
            BACK
        </button>
    </a>
</div>
<div class="relative flex flex-col justify-center min-h-screen overflow-hidden w-96">
    <div class="w-full p-6 m-auto bg-white border-t border-[#B60505] rounded shadow-lg shadow-red-800/50 lg:max-w-md">
        <img src="../../assets/logo.png" class="w-16 ml-32 text-[#B60505]" alt="">
        <form action="" class="mt-6" method="post">
            <div class="mt-4">
                <label for="email" class="block font-sans ">Email</label>
                <input type="email" placeholder="email" name='email'  value='<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>'
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md focus:border-black focus:ring-red-300 focus:outline-none focus:ring focus:ring-opacity-40 <?php if ($colorErrorEmail){ echo "border-red-700";} ?>">                     
                <small class="text-red-600"> <?php echo $emailError; ?></small>
            </div>
            <div class="mt-4">
                <label for="password" class="block font-sans ">Password</label>
                <input type="password" placeholder="password" name='password'  id="myInputPassword"  value='<?php echo isset($_POST['password']) ? $_POST['password'] : ''; ?>'
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md focus:border-black focus:ring-red-300 focus:outline-none focus:ring focus:ring-opacity-40 <?php if ($colorErrorPassword){ echo "border-red-700";} ?>"> 
                <input type="checkbox" onclick=" myFunctionInputPassword()"> Show password <br>
                <small class="text-red-600"> <?php echo $passwordError; ?></small>
            </div>
            <div class="mt-6">
                <a href="#" class="font-sans text-gray-600 hover:underline">Forget Password?</a>
                <div class="mt-6">
                    <button
                        class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-[#B60505] rounded-md hover:bg-[#B60505] focus:outline-none focus:bg-[#B60505]">
                        Login
                    </button>
                </div>
        </form>
        <p class="mt-8 text-xs font-light text-center text-gray-700"> Don't have an account? 
            <a href="/register" class="font-medium text-[#B60505] hover:underline">Sign up</a>
        </p>
    </div>
</div>
</div>  
<?php
require "views/partials/footer.php";