<?php  
    require 'views/partials/head.php';
    require 'controllers/forms/form.register.controller.php';
?>

    <div class="relative flex flex-col justify-center min-h-screen overflow-hidden">
        <div
            class="w-full p-6 m-auto bg-[#f5f5f5] border-t rounded-xl border-[#B60505]  shadow-lg shadow-red-800/50 lg:max-w-md">
            <h1 class="text-3xl font-semibold text-center text-[#B60505]">LOGO</h1>
            <form action='' class="mt-6" method="post" >
                <div class="mt-4">
                    <label for="text" class="block  font-sans ">Username</label>
                    <input type="text" placeholder="username" name='username' value='<?php echo isset($_POST['username']) ? $_POST['username'] : ''; ?>'
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md focus:border-black focus:ring-red-300 focus:outline-none focus:ring focus:ring-opacity-40 <?php if ($colorErrorName){ echo "border-red-700";} ?>">
                        <small class="text-red-600"> <?php echo $userNameError; ?></small>
                </div>
                <div class="mt-4">
                    <label for="email" class="block font-sans ">Email</label>
                    <input type="email" placeholder="email" name='email'  value='<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>'
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md focus:border-black focus:ring-red-300 focus:outline-none focus:ring focus:ring-opacity-40 <?php if ($colorErrorEmail){ echo "border-red-700";} ?>">                     
                        <small class="text-red-600"> <?php echo $emailError; ?></small>
                </div>
                
                <div class="mt-4">
                    <div>
                        <label for="password" class="block font-sans ">Password</label>
                        <input type="password" placeholder="password" name='password'  value='<?php echo isset($_POST['password']) ? $_POST['password'] : ''; ?>'
                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md focus:border-black focus:ring-red-300 focus:outline-none focus:ring focus:ring-opacity-40 <?php if ($colorErrorPassword){ echo "border-red-700";} ?>"> 
                        <small class="text-red-600"> <?php echo $passwordError; ?></small>
                    </div>
                </div>
                <div class="mt-4">
                    <label for="password" class="block font-sans ">Comfirm password</label>
                    <input type="password" placeholder="comfirm password" name='comfirmPassword'  value='<?php echo isset($_POST['comfirmPassword']) ? $_POST['comfirmPassword'] : ''; ?>'
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md focus:border-black focus:ring-red-300 focus:outline-none focus:ring focus:ring-opacity-40 <?php if ($colorErrorComfirm){ echo "border-red-700";} ?>">          
                        <small class="text-red-600"> <?php echo $comfirmPasswordError; ?></small>
                    </div>
                <div class="mt-6">
                    <button  name="submit"
                        class="w-full px-4 py-2 tracking-wide text-white  font-sans transition-colors duration-200 transform bg-[#B60505] rounded-md hover:bg-[#B60505] focus:outline-none focus:bg-[#B60505]">
                        Register
                    </button>
                </div>
            </form>
            <p class="mt-8 text-xs font-light text-center text-gray-700"> Have an account? <a href="#"
                class="font-medium text-[#B60505] hover:underline">Log in</a></p>
        </div>
    </div>

