


<button class=" bg-red-500 text-white rounded-3xl px-2 py-2 mt-20 ml-40"><a href="register.php">ADD USER+</a></button> 
    
    <div class="container w-full flex justify-center mt-10">
        <div class="flex flex-col ml-20">
            <div class="w-full">
                <div class="border-b border-gray-200 shadow">
                    <table class="divide-y divide-gray-300">
                        <thead class="bg-gray-50 ">
                            <tr>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    ID
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Name
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Email
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Password
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Roles
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Edit
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Delete
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-300">
                            <?php
                            $datas = getUserData();
                            foreach ($datas as $data){
                                ?>
                                <tr class="whitespace-nowrap">
                                    <td class="px-10 py-4 text-sm text-gray-500">
                                    <?php echo $data["id"]?>
                                      
                                    </td>
                                    <td class="px-10 py-4">
                                        <div class="text-sm text-gray-900">
                                            <?php echo $data["name"]?>
                                        </div>
                                    </td>
                                    <td class="px-10 py-4">
                                        <div class="text-sm text-gray-500"><?php echo $data["email"]?></div>
                                    </td>
                                    <td class="px-10 py-4">
                                        <div class="text-sm text-gray-500"><?php echo $data["password"]?></div>
                                    </td>
                                    <td class="px-10 py-4 text-sm text-gray-500">
                                    <?php echo $data["role_id"]?>
                                    </td>
                                    <td class="px-10 py-4">
                                       <button><a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </a></button>
                                    </td>
                                    <td class="px-10 py-4">
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
