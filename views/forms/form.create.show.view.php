
<?php
require 'views/partials/head.php';
require 'controllers/forms/actions/form.create.show.controller.validation.php';
$id = $_GET['showId'];
$dateTime = getDatetime($id);
$type = type($id);
?>

<div class="min-h-screen bg-gray-100 p-0 sm:p-12">
  <div class="mx-auto max-w-md px-6 py-12 bg-white border-0 shadow-lg sm:rounded-3xl">
    <h1 class="text-2xl font-bold mb-8 ml-24">create new show</h1>
    <form action="" method="post" enctype="multipart/form-data" >
    <!-- enctype="multipart/form-data" -->
          <div class="relative z-0 w-full mb-5">
            <input type="text"  name="title" value='<?php if(isset($_GET['action'])){echo $show['title'];}else{echo isset($_POST['title']) ? $_POST['title'] : '';}?>'
              class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
            <label for="title" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Enter title</label>
            <small class="text-[#B60505]"> <?php echo $titleError; ?></small> 
          </div>
        <div class="flex space-x-4">
            <div class="relative z-0 w-full mb-5">
              <input type="text" name="language"   value='<?php if(isset($_GET['action'])){echo $show['language'];}else{ echo isset($_POST['language']) ? $_POST['language'] : ''; }?>'
                class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
              <label for="language" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Enter language</label>
              <small class="text-[#B60505]"> <?php echo $languageError; ?></small>
            </div>
            <div class="relative z-0 w-full mb-5 ">
              <input type="text" name="subtitle"   value='<?php if(isset($_GET['action'])){echo $show['subtitle'];}else{echo isset($_POST['subtitle']) ? $_POST['subtitle'] : '';} ?>'
                class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
              <label for="subtitle" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Enter subtitle</label>
              <small class="text-[#B60505]"> <?php echo $subtitleError; ?></small>
            </div>
        </div>

          <div class="relative z-0 w-full mb-5">
            <select name="type-id"  onclick="this.setAttribute('value', this.value);"
              class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-black border-gray-200"  >
              <option value="" selected disabled hidden></option>
              <option value="1" <?php echo (isset($_POST['type-id']) && $_POST['type-id'] || $_GET['type'] === '1') ? 'selected' : ''; ?>>Movie </option>
              <option value="2" <?php echo (isset($_POST['type-id']) && $_POST['type-id'] || $_GET['type'] === '2') ? 'selected' :  ''; ?>>Concert</option>
            </select>
            <label for="select" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Select type of show</label>
            <small class="text-[#B60505]"> <?php echo $typeIdError; ?></small>
          </div>

          <div class="flex flex-row space-x-4">
            <div class="relative z-0 w-full mb-5">
              <input type="text" name="date" onclick="this.setAttribute('type', 'date');" value='<?php echo isset($_POST['date']) ? $_POST['date'] : $dateTime['date']; ?>'
                class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
              <label for="date" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Date</label>
              <small class="text-[#B60505]"> <?php echo $dateError; ?></small>
            </div>
            <div class="relative z-0 w-full">
              <input type="text"  name="time" placeholder=" " onclick="this.setAttribute('type', 'time') " value='<?php echo isset($_POST['time']) ? $_POST['time'] : $dateTime['time']; ?>'
                class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
              <label for="time" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Time</label>
              <small class="text-[#B60505]"> <?php echo $timeError; ?></small>
            </div>
          </div>

          <div class="relative z-0 w-full mb-5">
            <input type="number"  name="running-time" value='<?php echo isset($_POST['running-time']) ? $_POST['running-time'] : $show['running_time']; ?>'
            class="pt-3 pb-2   block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
            <div class="absolute top-0 right-0 mt-3 mr-4 text-gray-400">min</div>
            <label for="duration" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Duration</label>
            <small class="text-[#B60505]"> <?php echo $runningTimeError; ?></small>
          </div>

          <div class="relative z-0 w-full mb-5">
            <input type="file" name="image"  value='<?php echo isset($_POST['image']) ? $_POST['image'] :''; ?>'
              class="pt-3 pb-2 pr-12 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
            <label for="duration" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">imgShow</label>
            <small class="text-[#B60505]"> <?php echo $imgShowError; ?></small>
          </div>

          <div class="relative z-0 w-full mb-5">
            <input type="text" name="trailer" value='<?php echo isset($_POST['trailer']) ? $_POST['trailer'] : $show['trailer']; ?>'
              class="pt-3 pb-2 pr-12 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
            <label for="duration" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">trailer</label>
            <small class="text-[#B60505]"> <?php echo $trailerError; ?></small>
          </div>
        
          <div class="relative z-0 w-full mb-5">
            <textarea name="description"  class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200">
                <?php echo isset($_POST['description']) ? htmlspecialchars($_POST['description'], ENT_QUOTES) : $show['description']; ?>
            </textarea>
            <label for="description" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Enter description</label>
            <small class="text-[#B60505]"> <?php echo $descriptionError; ?></small>
          </div>

          <div class="mt-6">
                <button  name="upload" type="submit" class="w-full px-4 py-2 tracking-wide text-white  font-sans transition-colors duration-200 transform bg-[#B60505] rounded-md hover:bg-[#B60505] focus:outline-none focus:bg-[#B60505]">
                    Crate
                </button>
          </div>
    </form>
  </div>
</div>
<!-- <script src = 'views/js/form.show.js' ></script>    -->
