<div class="carousel-inner relative w-full overflow-hidden">
            <div class="carousel-item active relative float-left w-full ">
                <div class="slideshow-container">

                  <?php
                      $banners = 
                      [
                        'ant-man.jpg',
                        'aquaman.webp',
                        'john-wick-4.webp',
                        'quantumania-1.webp',
                        'shazam.webp'
                      ];
                  foreach ($banners as $banner)
                  {
                  ?>

                    <div class="mySlides fade">
                        <img src="assets/banners/<?= $banner ?>" class="h-96 w-full">
                    </div>

                  <?php
                  }
                  ?>
                </div>
            </div>
        </div>