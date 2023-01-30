<?php
require 'models/detail.model.php';

$dataInfors = getShowData();
$title = '';
$description = '';
foreach ($dataInfors as $dataInfor){
    $title = $dataInfor['name'];
    $description = $dataInfor['description'];
?>
    <div class="flex flex-wrap w-1/4 hover:shadow-2xl">
        <div class=" p-2 md:p-4 " id="container-card">
            <img src="assets/moveis/uncharted(10).jfif"
            class="block object-cover object-center  h-70  hover:scale-110 transition 
            duration-300 ease-in-out cursor-pointer" alt="Louvre" />
            <div id="contant">
            <h3 class="font-sans"><?= $title; ?></h3>
            <p class="font-sans"> <?= $description; ?> </p>
            </div>
            <div id="btn-detail">
                <button id="more-information" class="font-sans"><a id="more-detail-btn" href="<?php echo "/detail?name=6 Uncharted&picture=assets/moveis/uncharted(10).jfif" ?>">more information</a></button>
                <button id="see-ticket" class="font-sans">See ticket</button>
            </div>
        </div>
    </div>
<?php
}
