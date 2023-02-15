<?php
require "views/partials/head.php";

?>

<div id="overly"  class="flex justify-center items-center w-full h-screen">
    <!-- Choice of payment -->
    <div id="choicePayment" class=" justify-center items-center w-full ">
        <div class="block p-6  rounded-lg shadow-lg bg-white max-w-md">
            <div class="flex justify-between items-center mb-2">
                <h3 class="mb-3 text-gray-900 text-2xl leading-tight font-semibold flex items-center justify-center">Choose way to pay</h3>
                <a href="/">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" id="cancel" onclick="cancelPayment(event)" class="w-6 h-6 hover:bg-red-500 hover:rounded-lg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </a>
            </div>
            <!-- ABA Choice -->
            <div id="abaChoose" class="mb-4 flex items-center gap-5 p-3 rounded-lg hover:bg-zinc-300 hover:rounded-lg">
                <img src="assets/purchases/aba-pay.png" alt="" width="70" class="">
                <div class="tex">
                    <h2 class="text-lg text-black-500 font-medium">ABA PAY</h2>
                    <p class="text-gray-700 ">Scan to pay with ABA Mobile</p>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </div>
            <!-- Credit Card Choice -->
            <div id="creditCardChoose" class="mb-4 flex items-center justify-between p-3 rounded-lg hover:rounded-lg hover:bg-zinc-300">
                <div class="flex gap-5">
                    <img src="assets/purchases/credit-card.png" alt="" width="70" class="">
                    <div class="tex">
                        <h2 class="text-lg text-black-500 font-medium">Credit/Debit Card</h2>
                        <img src="assets/purchases/small-credit-card.png" alt="" width="140" class="">
                    </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </div>
        </div>
    </div>

    <!-- ABA payment -->
    <div id="abaPayment" class=" justify-center items-center w-full ">
        <div class="block p-6  rounded-lg shadow-lg bg-white max-w-md">
            <div class="flex justify-between items-center mb-2 w-96">
                <div class="flex items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" id="abaBack" class="w-6 h-6 font-semibold hover:bg-zinc-300 hover:rounded-lg ">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>

                    <img src="assets/purchases/aba-pay.png" alt="" width="70" class="">
                    <h3 class="text-gray-900 text-2xl leading-tight font-semibold flex items-center justify-center">ABA PAY</h3>
                </div>
                <a href="/">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" id="cancel" onclick="cancelPayment(event)" class="w-6 h-6 font-semibold hover:bg-red-500 hover:rounded-lg   ">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </a>
            </div>
            <div class="mb-4 flex items-center justify-center gap-5 p-3 rounded-lg hover:bg-zinc-300 hover:rounded-lg">
                <div class="flex flex-col justify-center items-center p-7">
                    <h2 class="text-lg text-black-500 font-medium" >8.50 USD</h2>
                    <p class="text-black-500 ">Scan to pay</p>
                    <img src="assets/purchases/qr-code1.jpg" alt="" width="180">
                </div>
            </div>
        </div>
    </div>
    <!-- Credit Card payment -->
    <div id="creditCardPayment" class=" justify-center items-center w-full">
        <div class="block p-6  rounded-lg shadow-lg bg-white max-w-md">
            <div class="flex justify-between items-center mb-2 w-96">
                <div class="flex items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" id="creditCardback" class="w-6 h-6 font-semibold hover:bg-zinc-300 hover:rounded-lg ">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>

                    <img src="assets/purchases/credit-card.png" alt="" width="70" class="">
                    <h3 class="text-gray-900 text-2xl leading-tight font-semibold flex items-center justify-center">Credit/Debit Card</h3>
                </div>
                <a href="/">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" id="cancel" onclick="cancelPayment(event)" class="w-6 h-6 font-semibold hover:bg-red-500 hover:rounded-lg   ">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </a>
            </div>
            <div class="mb-4 flex items-center justify-center gap-5 p-3 rounded-lg">
                <!-- Form inter credit card info -->
                <form class="flex flex-col justify-center items-center flex-wrap gap-3 w-full p-5">
                    <label class="relative w-full flex flex-col">
                        <span class="font-bold mb-3">Owner</span>
                        <input type="text" id="ownerName" name="ownerName"  placeholder="Owner Name" class=" w-full rounded-md peer pl-12 pr-2 py-2 border border-gray-200 placeholder-gray-500 focus:border-black focus:ring-red-300 focus:outline-none focus:ring focus:ring-opacity-40"  />
                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute bottom-0 left-0 -mb-0.5 transform translate-x-1/2 -translate-y-1/2 text-black peer-placeholder-shown:text-gray-300 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                        </svg>
                    </label>
                    <label class="relative w-full flex flex-col">
                        <span class="font-bold mb-3">Card number</span>
                        <input type="text" id="cardNumber" name="cardNumber" maxlength = "21" placeholder="0000 0000 0000" class=" w-full rounded-md peer pl-12 pr-2 py-2 border border-gray-200 placeholder-gray-500 focus:border-black focus:ring-red-300 focus:outline-none focus:ring focus:ring-opacity-40"  />
                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute bottom-0 left-0 -mb-0.5 transform translate-x-1/2 -translate-y-1/2 text-black peer-placeholder-shown:text-gray-300 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                        </svg>
                    </label>

                    <label class="relative w-full flex-1 flex flex-col">
                        <span class="font-bold mb-3">Expire date</span>
                        <input type="text" id="expireDate" name="expireDate" maxlength="5" placeholder="MM/YY"  class=" w-full rounded-md peer pl-12 pr-2 py-2 border border-gray-200 placeholder-gray-300 focus:border-black focus:ring-red-300 focus:outline-none focus:ring focus:ring-opacity-40" />
                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute bottom-0 left-0 -mb-0.5 transform translate-x-1/2 -translate-y-1/2 text-black peer-placeholder-shown:text-gray-300 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </label>

                    <label class="relative w-full flex-1 flex flex-col">
                        <span class="font-bold flex items-center gap-3 mb-3">
                        CVC/CVV
                            <span class="relative group">
                                <span class="hidden group-hover:flex justify-center items-center px-2 py-1 text-xs absolute -right-2 transform translate-x-full -translate-y-1/2 w-max top-1/2 bg-black text-white"> Hey ceci est une infobulle !</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </span>
                        </span>
                        <input type="text" id="cardCvv" name="cardCvv" maxlength="4" placeholder="&bull;&bull;&bull;"  class=" w-full rounded-md peer pl-12 pr-2 py-2 border border-gray-300 placeholder-gray-300 focus:border-black focus:ring-red-300 focus:outline-none focus:ring focus:ring-opacity-40" />
                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute bottom-0 left-0 -mb-0.5 transform translate-x-1/2 -translate-y-1/2 text-black peer-placeholder-shown:text-gray-300 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </label>
                    <div class="mt-6 w-full">
                        <button  name="submit" class="w-full px-4 py-2 tracking-wide text-white  font-sans transition-colors duration-200 transform bg-[#B60505] rounded-md hover:bg-[#B60505] focus:outline-none focus:bg-[#B60505]">
                            Pay 
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

<script src = 'views/js/purchase.js' ></script> 
<?php
require "views/partials/footer.php";
?>