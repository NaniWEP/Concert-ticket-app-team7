
<?php
require 'views/partials/head.php';
require 'controllers/details/detail.controller.php';
?>
<section class=" body-font overflow-hidden bg-black text-white" >
          <div class="container px-5 py-24 mx-auto mr-96">
            <div class="lg:w-3/5 ml-24 flex flex-wrap">
                <img alt="ecommerce" class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-200" src="<?php echo $_GET['picture']?>">
                <div class="lg:w-1/2 w-full lg:pl-14  lg:mt-0">
                  <h1 class="text-3xl title-font font-medium mb-3 text-white"><?php echo  $movie_name ;?></h1>
                  <div class="flex mb-4">
                    <span class="flex items-center">
                      <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                      </svg>
                      <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                      </svg>
                      <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                      </svg>
                      <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                      </svg>
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                      </svg>
                      <p class="flex ml-5 border-spacing-1 bg-purple-400 border-0 py-1 px-3 focus:outline-none rounded">Movie</p>
                   
                    </span>
                  </div>
                  <p class="leading-relaxed"><?php echo  $description ;?></p>
                  <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">
                    <button class="flex ml-auto text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded"><a href="beforepayment.html"> Buy Now</a></button>
                    <button class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">               
                      <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
                    </svg>
                  </div>
                  <div>
                    <p>Opening Date  : <?php echo  $date ;?></p>
                    <p>Running Time  : <?php echo  $time ;?> s</p>
                    <p>Language      : <?php echo  $language ;?></p> 
                    <p>Subtitle      : <?php echo   $subtitle ;?></p>
                  </div>
                </div>
            </div>
          </div>

          <div class="flex justify-center ">
            <iframe width="1000" height="500" src="<?php echo $trailer ?>" title="65 - Official Trailer - Only In Cinemas March 17" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>              
          </div>
          <?php
            require 'views/partials/footer.php';
          ?>
        </section>



  