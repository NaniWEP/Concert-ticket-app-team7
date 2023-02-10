<?php
require "views/partials/head.php";

?>

<div class="flex justify-center items-center w-full h-screen">
    <div class="flex justify-center items-center w-full ">
        <div class="block p-6  rounded-lg shadow-lg bg-white max-w-md">
            <div class="flex justify-between items-center mb-2">
                <h3 class="mb-3 text-gray-900 text-2xl leading-tight font-semibold flex items-center justify-center">Choose way to pay</h3>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 hover:bg-zinc-300 hover:rounded-lg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </div>
            <div class="mb-4 flex items-center gap-5 p-3 rounded-lg hover:bg-zinc-300 hover:rounded-lg">
                <img src="assets/aba-pay.png" alt="" width="70" class="">
                <div class="tex">
                    <h2 class="text-lg text-black-500 font-medium">ABA PAY</h2>
                    <p class="text-gray-700 ">Scan to pay with ABA Mobile</p>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </div>
            <div class="mb-4 flex items-center justify-between p-3 rounded-lg hover:rounded-lg hover:bg-zinc-300">
                <div class="flex gap-5">
                    <img src="assets/credit-card.png" alt="" width="70" class="">
                    <div class="tex">
                        <h2 class="text-lg text-black-500 font-medium">Credit/Debit Card</h2>
                        <img src="assets/small-credit-card.png" alt="" width="140" class="">
                    </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </div>
        </div>
    </div>
</div>


<?php
require "../views/partials/footer.php";
?>