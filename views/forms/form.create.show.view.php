
<?php
require 'views/partials/head.php';

?>

<div class="min-h-screen bg-gray-100 p-0 sm:p-12">
  <div class="mx-auto max-w-md px-6 py-12 bg-white border-0 shadow-lg sm:rounded-3xl">
    <h1 class="text-2xl font-bold mb-8 ml-24">create new show</h1>
    <form id="form" novalidate>
      <div class="relative z-0 w-full mb-5">
        <input type="text"  name="title" placeholder=" "   required
          class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
        <label for="title" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Enter title</label>
        <span class="text-sm text-red-600 hidden" id="error">title is required</span>
      </div>
    <div class="flex space-x-4">
        <div class="relative z-0 w-full mb-5">
          <input type="text" name="language"   placeholder=" "
            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
          <label for="language" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Enter language</label>
          <span class="text-sm text-red-600 hidden" id="error">language is required</span>
        </div>
        <div class="relative z-0 w-full mb-5 ">
          <input type="text" name="subtitle"   placeholder=" "
            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
          <label for="subtitle" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Enter subtitle</label>
          <span class="text-sm text-red-600 hidden" id="error">subtitle is required</span>
        </div>
    </div>

      <div class="relative z-0 w-full mb-5">
        <select name="select"  value="" onclick="this.setAttribute('value', this.value);"
          class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-black border-gray-200"  >
          <option value="" selected disabled hidden></option>
          <option value="1">Movie </option>
          <option value="2">Music</option>
        </select>
        <label for="select" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Select type of show</label>
        <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
      </div>

      <div class="flex flex-row space-x-4">
        <div class="relative z-0 w-full mb-5">
          <input type="text" name="date"  placeholder=" " onclick="this.setAttribute('type', 'date');"
            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
          <label for="date" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Date</label>
          <span class="text-sm text-red-600 hidden" id="error">Date is required</span>
        </div>
        <div class="relative z-0 w-full">
          <input type="text"  name="time" placeholder=" " onclick="this.setAttribute('type', 'time');"
            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
          <label for="time" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Time</label>
          <span class="text-sm text-red-600 hidden" id="error">Time is required</span>
        </div>
      </div>

      <div class="relative z-0 w-full mb-5">
        <input type="text" name="duration" placeholder=" "
          class="pt-3 pb-2 pr-12 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
        <div class="absolute top-0 right-0 mt-3 mr-4 text-gray-400">min</div>
        <label for="duration" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Duration</label>
        <span class="text-sm text-red-600 hidden" id="error">Duration is required</span>
      </div>

      <div class="relative z-0 w-full mb-5">
        <input type="file" name="img-show" placeholder=" "
          class="pt-3 pb-2 pr-12 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
        <label for="duration" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">imgShow</label>
        <span class="text-sm text-red-600 hidden" id="error">img show is required</span>
      </div>

      <div class="relative z-0 w-full mb-5">
        <input type="file" name="trailer" placeholder=" "
          class="pt-3 pb-2 pr-12 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
        <label for="duration" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">trailer</label>
        <span class="text-sm text-red-600 hidden" id="error">trailer is required</span>
      </div>
    
      <div class="relative z-0 w-full mb-5">
        <textarea name="description"  class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"></textarea>
        <label for="description" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Enter description</label>
        <span class="text-sm text-red-600 hidden" id="error">description is required</span>
      </div>

      <div class="mt-6">
            <button  name="submit" class="w-full px-4 py-2 tracking-wide text-white  font-sans transition-colors duration-200 transform bg-[#B60505] rounded-md hover:bg-[#B60505] focus:outline-none focus:bg-[#B60505]">
                Crate
            </button>
         </div>
    </form>
  </div>
</div>
