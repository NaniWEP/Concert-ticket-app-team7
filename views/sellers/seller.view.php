<?php
require 'views/partials/head.php' ;
require 'views/partials/nav.php';

$shows = getShowDataSeller($id['id']);
echo (count($shows));
if ((count($shows))>0){

?>  <button class=' mr-auto ml-11 mt-7 text-white bg-red-500 border-0 py-2 px-4 focus:outline-none hover:bg-red-600 rounded'>Create show</button>
     <div class="container w-6/12 flex justify-center  mt-8 m-auto" >
        <div class="flex flex-col  ">
            <div class="w-full">
                <div class="border-b border-gray-200 shadow">
                    <table class="divide-y  divide-gray-300" >
                        <thead class="bg-gray-50 ">
                            <tr id='th' >
                                <th class="px-4 py-2  text-white-500">
                                    Img
                                </th>
                                <th class=" py-2  text-white-500">
                                    Title
                                </th>
                                <th class="px-6 py-2  text-white-500">
                                    Trailer
                                </th>
                                <th class="px-2 py-2  text-white-500">
                                    Type
                                </th>
                                <th class="px-4 py-2  text-white-500">
                                    Running Time
                                </th>
                                <th class="px-4 py-2  text-white-500">
                                    Open Date
                                </th>

                                <th class="px-4 py-2 t text-white-500">
                                    Language
                                </th>
                                <th class="px-4 py-2  text-white-500">
                                    Subtitle
                                </th>
                                <th class="px-4 py-2subtitle  text-white-500">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody class=" divide-y divide-gray-300">
                        <?php
                            foreach ($shows as $show){
                            ?>
                                <tr class="whitespace-nowrap" id='table'>
                                    <td class="px-2 py-4 text-sm text-gray-500">
                                    <img src="assets/moveis/<?php echo $show["img"]?>" alt=""> 
                                      
                                    </td>
                                    <td class="px-4 py-4">
                                        <div class="text-sm ">
                                            <?php echo $show["title"]?>
                                        </div>
                                    </td>
                                    <td class="px-2 max-w-sm py-4 text-sm ">
                                    <?php echo $show["trailer"]?>
                                    </td>
                                    <td class="px-2 max-w-sm py-4 text-sm ">
                                    <?php $type = type_show($show['type_id']); echo $type['name']  ?>
                                    </td>
                                    <td class="px-6 py-4 text-sm ">
                                    <?php echo $show["running_time"]?>
                                    </td>
                                    <td class="px-6 py-4 text-sm ">
                                    2023/10/12
                                    </td>
                                    <td class="px-6 py-4 text-sm ">
                                    <?php echo $show["language"]?>
                                    </td>
                                    <td class="px-6 py-4 text-sm ">
                                    <?php echo $show["subtitle"]?>
                                    </td>
                                    <td class="px-6 py-4">
                                    <button><a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </a></button>
                                
                                <button><a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-400" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </a></button>
                                </td>
                            </tr>   

                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>   
<?php
}
require 'views/partials/footer.php' ;

