<?php session_start();  ?>
<nav class=" border-gray-200 dark:bg-gray-900 bg-[#202124] w-full top-0 sticky z-10">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl px-4 md:px-6 py-2.5 ">
        <a href="/" class="flex ">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 mr-3 sm:h-9" alt="Flowbite Logo" />
            <span class="self-center text-xl font-semibold whitespace-nowrap  dark:text-white text-white font-sans">Flowbite</span>
        </a>
        <div class="">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white font-sans">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none"
                 stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                 d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>
            <form action="/" method="get" class="flex flex-row gap-4">
                <input type="search" name="search" id="default-search" class="block w-96 p-2 pl-10 text-sm text-gray-900  border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 font-sans" placeholder="Search..." required>
                <button class='bg-red-500 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center'>search</button>    
            </form>
        </div>
        </div>
        <div class="flex items-center">
            
            <a href=""><img src="/assets/cart.png" class="w-10 mr-8" alt=""></a>
                <?php
                if(isset($_COOKIE['email']) && isset($_COOKIE['email']))
                {?>
                    <a href="controllers/forms/logout/logout.controller.php" class="font-sans text-red-500">logout</a>
                    <a href=""><img src="/assets/account.png" class="w-8 ml-2" alt=""></a>                    
                <?php  
                }else
                {?>
                    <div class="text-red-600 ">
                        <a href="/login" class="font-sans mr-1">login</a>|
                        <!-- <a href="/register" class="font-sans ">register</a> -->
                        <a href="/register" class="font-sans ">register</a>
                    </div>
            <?php         
                }?>
            
        </div>
    </div>
    <div class="max-w-screen-xl px-4 py-3 md:px-6 md:-mr-96">
            <ul class="flex flex-row space-x-8 text-sm font-medium ">
                <li>
                    <a href="#" class="text-white  hover:underline font-sans" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="#" class="text-white  hover:underline font-sans">Company</a>
                </li>
                <li>
                    <a href="#" class="text-white  hover:underline font-sans">Team</a>
                </li>
                <li>
                    <a href="#" class="text-white hover:underline font-sans">Features</a>
                </li>
            </ul>
    </div>
</nav>