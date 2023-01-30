  <?php require 'views/partials/head.php'  ?>
  <?php require 'views/partials/nav.php'  ?>
  
        <!-- slide sho -->
     
        <?php require 'views/partials/banner.php'  ?>
          <!-- small  and card -->
          <div class="flex flex-col items-center justify-center mt-5">
            <!-- small menue -->
            <div class="flex flex-row items-center gap-4 max-w-full">
                <ul class="flex flex-row items-center gap-8 max-w-full">
                  <?php require 'views/partials/menu.php';?>
              </ul>
            </div>
            <!-- card -->
            <section class="overflow-hidden text-gray-700 ">
                <div class="container px-5 py-2  lg:pt-12 lg:px-10">
                  <div class="flex flex-wrap  ">
                    <?php require 'views/partials/cards.php';?>
                  </div>
                </div>
            </section>
          </div>

<?php require 'views/partials/footer.php'  ?>         