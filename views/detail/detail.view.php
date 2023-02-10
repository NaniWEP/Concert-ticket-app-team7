
<?php
require 'views/partials/head.php';
require 'controllers/details/detail.controller.php';
require 'views/partials/nav.php' 

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
              <p class="flex ml-5 border-spacing-1 bg-purple-400 border-0 py-1 px-3 focus:outline-none rounded"><?php echo $type['name']?></p>
            
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
            <p>Opening Date  : <?php echo  $date_time['date'] ;?></p>
            <p>Opening time : <?php echo $date_time['time']?> pm</p>
            <p>Running Time  : <?php echo  $time ;?> mn</p>
            <p>Language      : <?php echo  $language ;?></p> 
            <p>Subtitle      : <?php echo   $subtitle ;?></p>
          </div>
        </div>
    </div>
  </div>
  <div class="flex justify-center ">
    <iframe width="1150" height="500" src="<?php echo $trailer ?>" title="65 - Official Trailer - Only In Cinemas March 17" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>              
  </div>
  <div class="bg-gray-200 border-l-[12px] border-[#B60505] m-10 p-10 flex mr-20 rounded-lg ">
    <div  class="mr-20">
      <div class="text-black text-lg hover:border-b-[3px] border-[#B60505] ">Today</div>
      <div class="text-black text-lg ">6</div>
      <div class="text-black text-lg">FEB</div>
    </div>
    <div class="mr-20">
      <div class="text-black text-lg hover:border-b-[3px] border-[#B60505]">Today</div>
      <div class="text-black text-lg">6</div>
      <div class="text-black text-lg">FEB</div>
    </div>
    <div class="mr-20">
      <div class="text-black text-lg hover:border-b-[3px] border-[#B60505]">Today</div>
      <div class="text-black text-lg">6</div>
      <div class="text-black text-lg">FEB</div>
    </div>
  </div>
  <div class="container mx-auto px-20">
      <div class="flex flex-col w-full" style="cursor: auto;">
        <div class="grid gap-36 gap-y-10 grid-cols-1 sm:grid-cols-2 my-2  w-full">
          <div class="metric-card  bg-slate-700  rounded-lg p-4 max-w-72 w-full " style="cursor: auto;">
              <div class="w-12">
                  <img src="https://assets-in.bmscdn.com/discovery-catalog/events/tr:w-400,h-600,bg-CCCCCC:w-400.0,h-660.0,cm-pad_resize,bg-000000,fo-top:oi-discovery-catalog@@icons@@like_202006280402.png,ox-24,oy-617,ow-29:q-80/et00008457-phkwxjxyys-portrait.jpg" alt="">
              </div>
              <div class="text-white ">BestMount  ainT2020</div>
              <div class="py-13">
                  <div class="flex flex-wrap justify-center gap-4 p-4 ">
                    <div  class=" border-t-[2px] border-[#B60505] flex sm:inline-flex justify-center items-center bg-black  hover:text-black hover:bg-white  text-white font-semibold text-center rounded-md outline-none transition duration-100 px-5 py-2 mr-10">
                      15:25
                      </div>
                    <div class=" border-t-[2px] border-[#B60505] flex sm:inline-flex justify-center items-center bg-black  hover:text-black hover:bg-white  text-white font-semibold text-center rounded-md outline-none transition duration-100 px-5 py-2 mr-10">
                      20:20
                    </div>
                    <div class=" border-t-[2px] border-[#B60505] flex sm:inline-flex justify-center items-center bg-black  hover:text-black hover:bg-white   text-white font-semibold text-center rounded-md outline-none transition duration-100 px-5 py-2">
                      15:02
                    </div>
                  </div>
              </div>
          </div>
          <div class="metric-card bg-slate-700 rounded-lg p-4 max-w-72 w-full" style="cursor: auto;">
              <div class="w-12">
                  <img src="https://assets-in.bmscdn.com/discovery-catalog/events/tr:w-400,h-600,bg-CCCCCC:w-400.0,h-660.0,cm-pad_resize,bg-000000,fo-top:oi-discovery-catalog@@icons@@like_202006280402.png,ox-24,oy-617,ow-29:q-80/et00008457-phkwxjxyys-portrait.jpg" alt="">
              </div>
              <div class="text-white ">BestMount  ainT2020</div>
              <div class=" py-13">
                  <div class="flex flex-wrap justify-center gap-4 p-4 ">
                    <div class=" border-t-[2px] border-[#B60505] flex sm:inline-flex justify-center items-center bg-black  hover:text-black hover:bg-white  text-white font-semibold text-center rounded-md outline-none transition duration-100 px-5 py-2 mr-10">
                      14:12
                    </div>
                    <div class=" border-t-[2px] border-[#B60505] flex sm:inline-flex justify-center items-center bg-black  hover:text-black hover:bg-white  text-white font-semibold text-center rounded-md outline-none transition duration-100 px-5 py-2 mr-10">
                      16:40
                     </div>
                    <div class=" border-t-[2px] border-[#B60505] flex sm:inline-flex justify-center items-center bg-black  hover:text-black hover:bg-white  text-white font-semibold text-center rounded-md outline-none transition duration-100 px-5 py-2">
                      13:50
                    </div>
                  </div>
              </div>
          </div>
          <div class="metric-card bg-slate-700  rounded-lg p-4 max-w-72 w-full" style="cursor: auto;">
              <div class="w-12">
                  <img src="https://assets-in.bmscdn.com/discovery-catalog/events/tr:w-400,h-600,bg-CCCCCC:w-400.0,h-660.0,cm-pad_resize,bg-000000,fo-top:oi-discovery-catalog@@icons@@like_202006280402.png,ox-24,oy-617,ow-29:q-80/et00008457-phkwxjxyys-portrait.jpg" alt="">
              </div>
              <div class="text-white ">BestMount  ainT2020</div>
              <div class=" py-13">
                  <div class="flex flex-wrap justify-center gap-4 p-4 ">
                      <div class=" border-t-[2px] border-[#B60505] flex sm:inline-flex justify-center items-center bg-black  hover:text-black hover:bg-white  text-white font-semibold text-center rounded-md outline-none transition duration-100 px-5 py-2 mr-10">
                        18:20
                      </div>
                      <div class="border-t-[2px] border-[#B60505] flex sm:inline-flex justify-center items-center bg-black  hover:text-black hover:bg-white  text-white font-semibold text-center rounded-md outline-none transition duration-100 px-5 py-2 mr-10">
                        20:10
                      </div>
                      <div class="border-t-[2px] border-[#B60505] flex sm:inline-flex justify-center items-center bg-black  hover:text-black hover:bg-white  text-white font-semibold text-center rounded-md outline-none transition duration-100 px-5 py-2">
                        17:08
                      </div>
                  </div>
              </div>
          </div>
          <div class="metric-card bg-slate-700   rounded-lg p-4 max-w-72 w-full" style="cursor: auto;">
              <div class="w-12 flex ">
                  <img src="https://assets-in.bmscdn.com/discovery-catalog/events/tr:w-400,h-600,bg-CCCCCC:w-400.0,h-660.0,cm-pad_resize,bg-000000,fo-top:oi-discovery-catalog@@icons@@like_202006280402.png,ox-24,oy-617,ow-29:q-80/et00008457-phkwxjxyys-portrait.jpg" alt="">
              </div>
              <div class="text-white ">BestMount  ainT2020</div>
              <div class=" py-13">
                  <div class="flex flex-wrap justify-center gap-4 p-4 ">
                    <div class=" border-t-[2px] border-[#B60505] flex sm:inline-flex justify-center items-center bg-black hover:text-black hover:bg-white  text-white font-semibold text-center rounded-md outline-none transition duration-100 px-5 py-2 mr-10">
                      12:32
                    </div>
                    <div class=" border-t-[2px] border-[#B60505] flex sm:inline-flex justify-center items-center bg-black  hover:text-black hover:bg-white text-white font-semibold text-center rounded-md outline-none transition duration-100 px-5 py-2 mr-10">
                      23:22
                    </div>
                    <div class=" border-t-[2px] border-[#B60505] flex sm:inline-flex justify-center items-center bg-black  hover:text-black hover:bg-white text-white font-semibold text-center rounded-md outline-none transition duration-100 px-5 py-2">
                      15:40
                    </div>
                  </div>
              </div>
            </div>
          </div>
      </div>
  </div>
  <?php
    require 'views/partials/footer.php';
  ?>
</section>




  