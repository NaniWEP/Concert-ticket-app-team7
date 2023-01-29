  <?php require 'views/partials/head.php'  ?>
  <?php require 'views/partials/nav.php'  ?>
  
        <!-- slide sho -->
     
        <?php require 'views/partials/banner.php'  ?>
          <!-- small box and card -->
          <div class="flex flex-wrap mt-7">
            <!-- small box -->
            <div class=" ml-14">
                <ul class="flex">
                  <li class="flex-1 ">
                    <a class="text-center font-sans w-40 block border border-[#B60505] rounded py-2 px-4 
                    bg-[#B60505] hover:bg-red-800 text-white" href="#">Active Item</a>
                  </li>
                  <li class="flex-1">
                    <a class="text-center font-sans ml-10 w-40 block border border-[#B60505] rounded py-2 px-4
                     bg-[#B60505] hover:bg-red-800 text-white" href="#">Nav Item</a>
                  </li>
                  <li class=" flex-1 ">
                    <a class="text-center font-sans ml-10 w-40 block border border-[#B60505] rounded py-2 px-4
                     bg-[#B60505] hover:bg-red-800 text-white" href="#">Disabled Item</a>
                  </li>
                  <li class="flex-1">
                    <a class="text-center ml-10 w-40 block border border-[#B60505] rounded py-2 px-4
                     bg-[#B60505] hover:bg-red-800 text-white" href="#">Disabled Item</a>
                  </li>
                  <li class="flex-1">
                    <a class="text-center font-sans ml-10 w-40 block border border-[#B60505] rounded py-2 px-4
                     bg-[#B60505] hover:bg-red-800 text-white" href="#">Disabled Item</a>
                  </li>
                  <li class="flex-1">
                    <a class="text-center font-sans ml-10 w-40 block border border-[#B60505] rounded py-2 px-4
                     bg-[#B60505] hover:bg-red-800 text-white" href="#">Disabled Item</a>
                  </li>
              </ul>
            </div>
            <!-- card -->
            <section class="overflow-hidden text-gray-700 ">
                <div class="container px-5 py-2  lg:pt-12 lg:px-10">
                  <div class="flex flex-wrap  ">
                    <div class="flex flex-wrap w-1/4   hover:shadow-2xl">
                        <div class=" p-2 md:p-4 " id="container-card">
                            <img src="assets/moveis/the.giver(1).jfif" 
                            class="block object-cover object-center h-70 hover:scale-110 transition 
                            duration-300 ease-in-out cursor-pointer" alt="Louvre" />
                            <div id="contant">
                                <h3 class="font-sans"><?php $movie= 'The giver';echo $movie;?></h3>
                                <p class="font-sans"> Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    Nesciunt voluptate voluptates maxime, laudantium assumenda, </p>
                            </div>
                            <div id="btn-detail">
                                <button id="more-information" class="font-sans"><a id="more-detail-btn" href="<?php echo "/detail?name=TheGiver&picture=assets/moveis/the.giver(1).jfif" ?>">more information</a></button>
                                <button id="see-ticket" class="font-sans">See ticket</button>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap w-1/4  hover:shadow-2xl">
                      <div class=" p-2 md:p-4 " id="container-card">
                        <img src="assets/moveis/san.andreas(2).jfif"
                        class="block object-cover object-center  h-70  hover:scale-110 transition duration-300 ease-in-out cursor-pointer" alt="Louvre" />
                        <div id="contant">
                            <h3 class="font-sans"><?php $movie= 'San Andreas';echo $movie;?></h3>
                            <p class="font-sans"> Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Nesciunt voluptate voluptates maxime, laudantium assumenda, 
                                </p>
                        </div>
                        <div id="btn-detail">
                            <button id="more-information" class="font-sans"><a id="more-detail-btn" href="<?php echo "/detail?name=SanAndreas&picture=assets/moveis/san.andreas(2).jfif" ?>">more information</a></button>
                            <button id="see-ticket" class="font-sans">See ticket</button>
                        </div>
                      </div>
                    </div>
                    <div class="flex flex-wrap w-1/4  hover:shadow-2xl">
                      <div class=" p-2 md:p-4 " id="container-card">
                          <img src="assets/moveis/venom(3).jfif" 
                          class="block object-cover object-center h-70 hover:scale-110 transition duration-300 
                          ease-in-out cursor-pointer" alt="Louvre" />
                          <div id="contant">
                            <h3 class="font-sans"><?php $movie= 'Venom';echo $movie;?></h3>
                            <p class="font-sans"> Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Nesciunt voluptate voluptates maxime, laudantium assumenda, 
                                </p>
                          </div>
                          <div id="btn-detail">
                                <button id="more-information" class="font-sans"><a id="more-detail-btn" href="<?php echo "/detail?name=Venom&picture=assets/moveis/venom(3).jfif" ?>">more information</a></button>
                                <button id="see-ticket" class="font-sans">See ticket</button>
                          </div>
                      </div>
                    </div>
                    <div class="flex flex-wrap w-1/4 hover:shadow-2xl">
                        <div class=" p-2 md:p-4 " id="container-card">
                          <img src="assets/moveis/spider.man(4).jfif"
                          class="block object-cover object-center  h-70  hover:scale-110 transition 
                          duration-300 ease-in-out cursor-pointer" alt="Louvre" />
                          <div id="contant">
                            <h3 class="font-sans"><?php $movie= 'Spider Man';echo $movie;?></h3>
                            <p class="font-sans"> Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Nesciunt voluptate voluptates maxime, laudantium assumenda, 
                                </p>
                          </div>
                          <div id="btn-detail">
                                <button id="more-information" class="font-sans"><a id="more-detail-btn" href="<?php echo "/detail?name=SpiderMan&picture=assets/moveis/spider.man(4).jfif" ?>">more information</a></button>
                                <button id="see-ticket" class="font-sans">See ticket</button>
                          </div>
                        </div>
                    </div>

                    <div class="flex flex-wrap w-1/4 hover:shadow-2xl">
                        <div class=" p-2 md:p-4 " id="container-card">
                          <img src="assets/moveis/divergent(5).jfif"
                          class="block object-cover object-center  h-70  hover:scale-110 transition 
                          duration-300 ease-in-out cursor-pointer" alt="Louvre" />
                          <div id="contant">
                            <h3 class="font-sans"><?php $movie= 'Divergent';echo $movie;?></h3>
                            <p class="font-sans"> Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Nesciunt voluptate voluptates maxime, laudantium assumenda, 
                                </p>
                          </div>
                          <div id="btn-detail">
                                <button id="more-information" class="font-sans"><a id="more-detail-btn" href="<?php echo "/detail?name=Divergent&picture=assets/moveis/divergent(5).jfif" ?>">more information</a></button>
                                <button id="see-ticket" class="font-sans">See ticket</button>
                          </div>
                        </div>
                    </div>

                    <div class="flex flex-wrap w-1/4 hover:shadow-2xl">
                        <div class=" p-2 md:p-4 " id="container-card">
                          <img src="assets/moveis/john.wick(6).jfif"
                          class="block object-cover object-center  h-70  hover:scale-110 transition 
                          duration-300 ease-in-out cursor-pointer" alt="Louvre" />
                          <div id="contant">
                            <h3 class="font-sans"><?php $movie= 'John Wick';echo $movie;?></h3>
                            <p class="font-sans"> Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Nesciunt voluptate voluptates maxime, laudantium assumenda, 
                                </p>
                          </div>
                          <div id="btn-detail">
                                <button id="more-information" class="font-sans"><a id="more-detail-btn" href="<?php echo "/detail?name=JohnWick&picture=assets/moveis/john.wick(6).jfif" ?>">more information</a></button>
                                <button id="see-ticket" class="font-sans">See ticket</button>
                          </div>
                        </div>
                    </div>

                    <div class="flex flex-wrap w-1/4 hover:shadow-2xl">
                        <div class=" p-2 md:p-4 " id="container-card">
                          <img src="assets/moveis/the.gray.man(7).jfif"
                          class="block object-cover object-center  h-70  hover:scale-110 transition 
                          duration-300 ease-in-out cursor-pointer" alt="Louvre" />
                          <div id="contant">
                            <h3 class="font-sans"><?php $movie= 'The Gray Man';echo $movie;?></h3>
                            <p class="font-sans"> Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Nesciunt voluptate voluptates maxime, laudantium assumenda, 
                                </p>
                          </div>
                          <div id="btn-detail">
                                <button id="more-information" class="font-sans"><a id="more-detail-btn" href="<?php echo "/detail?name=TheGrayMan&picture=assets/moveis/the.gray.man(7).jfif" ?>">more information</a></button>
                                <button id="see-ticket" class="font-sans">See ticket</button>
                          </div>
                        </div>
                    </div>

                    <div class="flex flex-wrap w-1/4 hover:shadow-2xl">
                        <div class=" p-2 md:p-4 " id="container-card">
                          <img src="assets/moveis/suicide.squad(8).jfif"
                          class="block object-cover object-center  h-70  hover:scale-110 transition 
                          duration-300 ease-in-out cursor-pointer" alt="Louvre" />
                          <div id="contant">
                            <h3 class="font-sans"><?php $movie= 'Suicide Squad';echo $movie;?></h3>
                            <p class="font-sans"> Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Nesciunt voluptate voluptates maxime, laudantium assumenda, 
                                </p>
                          </div>
                          <div id="btn-detail">
                                <button id="more-information" class="font-sans"><a id="more-detail-btn" href="<?php echo "/detail?name=SuicideSquad&picture=assets/moveis/suicide.squad(8).jfif" ?>">more information</a></button>
                                <button id="see-ticket" class="font-sans">See ticket</button>
                          </div>
                        </div>
                    </div>

                    <div class="flex flex-wrap w-1/4 hover:shadow-2xl">
                        <div class=" p-2 md:p-4 " id="container-card">
                          <img src="assets/moveis/The.lost.city(9).jfif"
                          class="block object-cover object-center  h-70  hover:scale-110 transition 
                          duration-300 ease-in-out cursor-pointer" alt="Louvre" />
                          <div id="contant">
                            <h3 class="font-sans"><?php $movie= 'The Lost City';echo $movie;?></h3>
                            <p class="font-sans"> Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Nesciunt voluptate voluptates maxime, laudantium assumenda, 
                                </p>
                          </div>
                          <div id="btn-detail">
                                <button id="more-information" class="font-sans"><a id="more-detail-btn" href="<?php echo "/detail?name=TheLostCity&picture=assets/moveis/The.lost.city(9).jfif" ?>">more information</a></button>
                                <button id="see-ticket" class="font-sans">See ticket</button>
                          </div>
                        </div>
                    </div>

                    <div class="flex flex-wrap w-1/4 hover:shadow-2xl">
                        <div class=" p-2 md:p-4 " id="container-card">
                          <img src="assets/moveis/uncharted(10).jfif"
                          class="block object-cover object-center  h-70  hover:scale-110 transition 
                          duration-300 ease-in-out cursor-pointer" alt="Louvre" />
                          <div id="contant">
                            <h3 class="font-sans"><?php $movie= 'Uncharted';echo $movie;?></h3>
                            <p class="font-sans"> Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Nesciunt voluptate voluptates maxime, laudantium assumenda, 
                                </p>
                          </div>
                          <div id="btn-detail">
                                <button id="more-information" class="font-sans"><a id="more-detail-btn" href="<?php echo "/detail?name=6Uncharted&picture=assets/moveis/uncharted(10).jfif" ?>">more information</a></button>
                                <button id="see-ticket" class="font-sans">See ticket</button>
                          </div>
                        </div>
                    </div>

                    <div class="flex flex-wrap w-1/4 hover:shadow-2xl">
                        <div class=" p-2 md:p-4 " id="container-card">
                          <img src="assets/moveis/samaritan(11).jfif"
                          class="block object-cover object-center  h-70  hover:scale-110 transition 
                          duration-300 ease-in-out cursor-pointer" alt="Louvre" />
                          <div id="contant">
                            <h3 class="font-sans"><?php $movie= 'Samaritan';echo $movie;?></h3>
                            <p class="font-sans"> Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Nesciunt voluptate voluptates maxime, laudantium assumenda, 
                                </p>
                          </div>
                          <div id="btn-detail">
                                <button id="more-information" class="font-sans"><a id="more-detail-btn" href="<?php echo "/detail?name=Samaritan&picture=assets/moveis/samaritan(11).jfif" ?>">more information</a></button>
                                <button id="see-ticket" class="font-sans">See ticket</button>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
            </section>
          </div>
    <script src = 'views/js/banner.js' ></script>        
<?php require 'views/partials/footer.php'  ?>         