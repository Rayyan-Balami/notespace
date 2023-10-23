<!-- my-notes -->
<div class="my-note pl-2">
    <div class="my-note-header flex justify-between items-center px-4 md:px-6 pt-4 pb-2">
        <h1 class="text-2xl font-semibold">My Notes</h1>
        <!-- search -->
        <div class="relative mb-4 grid grid-cols-2 place-content-center">
                <div>
                    <input type="text" placeholder="Search" class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200
              pl-10 pr-4 py-2 w-80 focus:bg-white focus:outline-none focus:ring-2
               focus:ring-blue-500 focus:border-transparent duration-300" />
                    <i class="absolute left-3 top-3 text-gray-500 dark:text-gray-400 fas fa-search"></i>
                </div>
                <div>
                    <!-- select subject -->
                    <select class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200
              pl-10 pr-4 py-2 w-80 focus:bg-white focus:outline-none focus:ring-2
               focus:ring-blue-500 focus:border-transparent duration-300">
                        <option value="all">Subject : All</option>
                        <option value="maths">Maths</option>
                        <option value="science">Science</option>
                        <option value="english">English</option>
                        <option value="hindi">Hindi</option>
                        <option value="social">Social</option>
                    </select>
                </div>
            </div>
        <a href="#" class="text-blue-600 hover:text-blue-600 font-semibold duration-300">View All</a>
    </div>
    <div class="my-note-content px-2 md:px-4 py-2">
        <div class="my-note-card grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2 md:gap-4">
            <!-- acpect square crad with title of max 2 line -->

            <div
                class="card p-2 h-fit sm:h-auto rounded-lg hover:bg-gray-300 dark:hover:bg-gray-800 lg:dark:hover:bg-gray-700 duration-500">
                <div class="img h-4/6 w-full aspect-square rounded-t-lg overflow-hidden">
                    <!-- random image -->
                    <img src="https://source.unsplash.com/random" alt="" class="h-full w-full object-cover" />
                </div>
                <div class="p-2 h-2/6 w-full grid grid-rows-2 rounded-b-lg bg-white dark:bg-gray-900">
                    <div class="">
                        <h2 class=" min-h-1/2 text-gray-700 dark:text-gray-300 mb-1 line-clamp-2 hover:cursor-pointer">
                            I'm supper
                            dog for you.</h2>
                    </div>
                    <div class="min-h-1/2 font-thin flex items-center justify-between">
                        <div class="w-1/2">
                            <h3>@rynHiroo</h3>
                            <button class="text-sm flex items-center gap-2 text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 duration-300">
                                <i class="fa-solid fa-clock"></i>
                                <p>2 hours ago</p>
                            </button>
                        </div>
                        <div class="w-1/2 flex justify-between px-2" >
                            <button>
                                <i class="fa-solid fa-heart"></i>
                                <p>100</p>
                            </button>
                            <button>
                                <i class="fa-solid fa-bookmark"></i>
                                <p>100</p>
                            </button>
                            //buy button
                            
                        </div>
                    
                    </div>
                </div>
            </div>
            <div
                class="card p-2 h-fit sm:h-auto rounded-lg hover:bg-gray-300 dark:hover:bg-gray-800 lg:dark:hover:bg-gray-700 duration-500">
                <div class="img h-4/6 w-full aspect-square rounded-t-lg overflow-hidden">
                    <!-- random image -->
                    <img src="https://source.unsplash.com/random" alt="" class="h-full w-full object-cover" />
                </div>
                <div class="p-2 h-2/6 w-full grid grid-rows-2 rounded-b-lg bg-white dark:bg-gray-900">
                    <div class="">
                        <h2 class=" min-h-1/2 text-gray-700 dark:text-gray-300 mb-1 line-clamp-2 hover:cursor-pointer">
                            I'm supper
                            dog for you.</h2>
                    </div>
                    <div class="min-h-1/2 font-thin flex items-center justify-between">
                        <div class="w-1/2">
                            <h3>@rynHiroo</h3>
                            <button class="text-sm flex items-center gap-2 text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 duration-300">
                                <i class="fa-solid fa-clock"></i>
                                <p>2 hours ago</p>
                            </button>
                        </div>
                        <div class="w-1/2 flex justify-between px-2" >
                            <button>
                                <i class="fa-solid fa-heart"></i>
                                <p>100</p>
                            </button>
                            <button>
                                <i class="fa-solid fa-bookmark"></i>
                                <p>100</p>
                            </button>
                        </div>
                    
                    </div>
                </div>
            </div>
            <div
                class="card p-2 h-fit sm:h-auto rounded-lg hover:bg-gray-300 dark:hover:bg-gray-800 lg:dark:hover:bg-gray-700 duration-500">
                <div class="img h-4/6 w-full aspect-square rounded-t-lg overflow-hidden">
                    <!-- random image -->
                    <img src="https://source.unsplash.com/random" alt="" class="h-full w-full object-cover" />
                </div>
                <div class="p-2 h-2/6 w-full grid grid-rows-2 rounded-b-lg bg-white dark:bg-gray-900">
                    <div class="">
                        <h2 class=" min-h-1/2 text-gray-700 dark:text-gray-300 mb-1 line-clamp-2 hover:cursor-pointer">
                            I'm supper
                            dog for you.</h2>
                    </div>
                    <div class="min-h-1/2 font-thin flex items-center justify-between">
                        <div class="w-1/2">
                            <h3>@rynHiroo</h3>
                            <button class="text-sm flex items-center gap-2 text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 duration-300">
                                <i class="fa-solid fa-clock"></i>
                                <p>2 hours ago</p>
                            </button>
                        </div>
                        <div class="w-1/2 flex justify-between px-2" >
                            <button>
                                <i class="fa-solid fa-heart"></i>
                                <p>100</p>
                            </button>
                            <button>
                                <i class="fa-solid fa-bookmark"></i>
                                <p>100</p>
                            </button>
                        </div>
                    
                    </div>
                </div>
            </div>

            <div
                class="card p-2 h-fit sm:h-auto rounded-lg hover:bg-gray-300 dark:hover:bg-gray-800 lg:dark:hover:bg-gray-700 duration-500">
                <div class="img h-4/6 w-full aspect-square rounded-t-lg overflow-hidden">
                    <!-- random image -->
                    <img src="https://source.unsplash.com/random" alt="" class="h-full w-full object-cover" />
                </div>
                <div class="p-2 h-2/6 w-full grid grid-rows-2 rounded-b-lg bg-white dark:bg-gray-900">
                    <div class="">
                        <h2 class=" min-h-1/2 text-gray-700 dark:text-gray-300 mb-1 line-clamp-2 hover:cursor-pointer">
                            I'm supper
                            dog for you.</h2>
                    </div>
                    <div class="min-h-1/2 font-thin flex items-center justify-between">
                        <div class="w-1/2">
                            <h3>@rynHiroo</h3>
                            <button class="text-sm flex items-center gap-2 text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 duration-300">
                                <i class="fa-solid fa-clock"></i>
                                <p>2 hours ago</p>
                            </button>
                        </div>
                        <div class="w-1/2 flex justify-between px-2" >
                            <button>
                                <i class="fa-solid fa-heart"></i>
                                <p>100</p>
                            </button>
                            <button>
                                <i class="fa-solid fa-bookmark"></i>
                                <p>100</p>
                            </button>
                        </div>
                    
                    </div>
                </div>
            </div>

            <div
                class="card p-2 h-fit sm:h-auto rounded-lg hover:bg-gray-300 dark:hover:bg-gray-800 lg:dark:hover:bg-gray-700 duration-500">
                <div class="img h-4/6 w-full aspect-square rounded-t-lg overflow-hidden">
                    <!-- random image -->
                    <img src="https://source.unsplash.com/random" alt="" class="h-full w-full object-cover" />
                </div>
                <div class="p-2 h-2/6 w-full grid grid-rows-2 rounded-b-lg bg-white dark:bg-gray-900">
                    <div class="">
                        <h2 class=" min-h-1/2 text-gray-700 dark:text-gray-300 mb-1 line-clamp-2 hover:cursor-pointer">
                            I'm supper
                            dog for you.</h2>
                    </div>
                    <div class="min-h-1/2 font-thin flex items-center justify-between">
                        <div class="w-1/2">
                            <h3>@rynHiroo</h3>
                            <button class="text-sm flex items-center gap-2 text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 duration-300">
                                <i class="fa-solid fa-clock"></i>
                                <p>2 hours ago</p>
                            </button>
                        </div>
                        <div class="w-1/2 flex justify-between px-2" >
                            <button>
                                <i class="fa-solid fa-heart"></i>
                                <p>100</p>
                            </button>
                            <button>
                                <i class="fa-solid fa-bookmark"></i>
                                <p>100</p>
                            </button>
                        </div>
                    
                    </div>
                </div>
            </div>

            <div
                class="card p-2 h-fit sm:h-auto rounded-lg hover:bg-gray-300 dark:hover:bg-gray-800 lg:dark:hover:bg-gray-700 duration-500">
                <div class="img h-4/6 w-full aspect-square rounded-t-lg overflow-hidden">
                    <!-- random image -->
                    <img src="https://source.unsplash.com/random" alt="" class="h-full w-full object-cover" />
                </div>
                <div class="p-2 h-2/6 w-full grid grid-rows-2 rounded-b-lg bg-white dark:bg-gray-900">
                    <div class="">
                        <h2 class=" min-h-1/2 text-gray-700 dark:text-gray-300 mb-1 line-clamp-2 hover:cursor-pointer">
                            I'm supper
                            dog for you.</h2>
                    </div>
                    <div class="min-h-1/2 font-thin flex items-center justify-between">
                        <div class="w-1/2">
                            <h3>@rynHiroo</h3>
                            <button class="text-sm flex items-center gap-2 text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 duration-300">
                                <i class="fa-solid fa-clock"></i>
                                <p>2 hours ago</p>
                            </button>
                        </div>
                        <div class="w-1/2 flex justify-between px-2" >
                            <button>
                                <i class="fa-solid fa-heart"></i>
                                <p>100</p>
                            </button>
                            <button>
                                <i class="fa-solid fa-bookmark"></i>
                                <p>100</p>
                            </button>
                        </div>
                    
                    </div>
                </div>
            </div>

            <div
                class="card p-2 h-fit sm:h-auto rounded-lg hover:bg-gray-300 dark:hover:bg-gray-800 lg:dark:hover:bg-gray-700 duration-500">
                <div class="img h-4/6 w-full aspect-square rounded-t-lg overflow-hidden">
                    <!-- random image -->
                    <img src="https://source.unsplash.com/random" alt="" class="h-full w-full object-cover" />
                </div>
                <div class="p-2 h-2/6 w-full grid grid-rows-2 rounded-b-lg bg-white dark:bg-gray-900">
                    <div class="">
                        <h2 class=" min-h-1/2 text-gray-700 dark:text-gray-300 mb-1 line-clamp-2 hover:cursor-pointer">
                            I'm supper
                            dog for you.</h2>
                    </div>
                    <div class="min-h-1/2 font-thin flex items-center justify-between">
                        <div class="w-1/2">
                            <h3>@rynHiroo</h3>
                            <button class="text-sm flex items-center gap-2 text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 duration-300">
                                <i class="fa-solid fa-clock"></i>
                                <p>2 hours ago</p>
                            </button>
                        </div>
                        <div class="w-1/2 flex justify-between px-2" >
                            <button>
                                <i class="fa-solid fa-heart"></i>
                                <p>100</p>
                            </button>
                            <button>
                                <i class="fa-solid fa-bookmark"></i>
                                <p>100</p>
                            </button>
                        </div>
                    
                    </div>
                </div>
            </div>

            <div
                class="card p-2 h-fit sm:h-auto rounded-lg hover:bg-gray-300 dark:hover:bg-gray-800 lg:dark:hover:bg-gray-700 duration-500">
                <div class="img h-4/6 w-full aspect-square rounded-t-lg overflow-hidden">
                    <!-- random image -->
                    <img src="https://source.unsplash.com/random" alt="" class="h-full w-full object-cover" />
                </div>
                <div class="p-2 h-2/6 w-full grid grid-rows-2 rounded-b-lg bg-white dark:bg-gray-900">
                    <div class="">
                        <h2 class=" min-h-1/2 text-gray-700 dark:text-gray-300 mb-1 line-clamp-2 hover:cursor-pointer">
                            I'm supper
                            dog for you.</h2>
                    </div>
                    <div class="min-h-1/2 font-thin flex items-center justify-between">
                        <div class="w-1/2">
                            <h3>@rynHiroo</h3>
                            <button class="text-sm flex items-center gap-2 text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 duration-300">
                                <i class="fa-solid fa-clock"></i>
                                <p>2 hours ago</p>
                            </button>
                        </div>
                        <div class="w-1/2 flex justify-between px-2" >
                            <button>
                                <i class="fa-solid fa-heart"></i>
                                <p>100</p>
                            </button>
                            <button>
                                <i class="fa-solid fa-bookmark"></i>
                                <p>100</p>
                            </button>
                        </div>
                    
                    </div>
                </div>
            </div>

            <div
                class="card p-2 h-fit sm:h-auto rounded-lg hover:bg-gray-300 dark:hover:bg-gray-800 lg:dark:hover:bg-gray-700 duration-500">
                <div class="img h-4/6 w-full aspect-square rounded-t-lg overflow-hidden">
                    <!-- random image -->
                    <img src="https://source.unsplash.com/random" alt="" class="h-full w-full object-cover" />
                </div>
                <div class="p-2 h-2/6 w-full grid grid-rows-2 rounded-b-lg bg-white dark:bg-gray-900">
                    <div class="">
                        <h2 class=" min-h-1/2 text-gray-700 dark:text-gray-300 mb-1 line-clamp-2 hover:cursor-pointer">
                            I'm supper
                            dog for you.</h2>
                    </div>
                    <div class="min-h-1/2 font-thin flex items-center justify-between">
                        <div class="w-1/2">
                            <h3>@rynHiroo</h3>
                            <button class="text-sm flex items-center gap-2 text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 duration-300">
                                <i class="fa-solid fa-clock"></i>
                                <p>2 hours ago</p>
                            </button>
                        </div>
                        <div class="w-1/2 flex justify-between px-2" >
                            <button>
                                <i class="fa-solid fa-heart"></i>
                                <p>100</p>
                            </button>
                            <button>
                                <i class="fa-solid fa-bookmark"></i>
                                <p>100</p>
                            </button>
                        </div>
                    
                    </div>
                </div>
            </div>

            <div
                class="card p-2 h-fit sm:h-auto rounded-lg hover:bg-gray-300 dark:hover:bg-gray-800 lg:dark:hover:bg-gray-700 duration-500">
                <div class="img h-4/6 w-full aspect-square rounded-t-lg overflow-hidden">
                    <!-- random image -->
                    <img src="https://source.unsplash.com/random" alt="" class="h-full w-full object-cover" />
                </div>
                <div class="p-2 h-2/6 w-full grid grid-rows-2 rounded-b-lg bg-white dark:bg-gray-900">
                    <div class="">
                        <h2 class=" min-h-1/2 text-gray-700 dark:text-gray-300 mb-1 line-clamp-2 hover:cursor-pointer">
                            I'm supper
                            dog for you.</h2>
                    </div>
                    <div class="min-h-1/2 font-thin flex items-center justify-between">
                        <div class="w-1/2">
                            <h3>@rynHiroo</h3>
                            <button class="text-sm flex items-center gap-2 text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 duration-300">
                                <i class="fa-solid fa-clock"></i>
                                <p>2 hours ago</p>
                            </button>
                        </div>
                        <div class="w-1/2 flex justify-between px-2" >
                            <button>
                                <i class="fa-solid fa-heart"></i>
                                <p>100</p>
                            </button>
                            <button>
                                <i class="fa-solid fa-bookmark"></i>
                                <p>100</p>
                            </button>
                        </div>
                    
                    </div>
                </div>
            </div>

            <div
                class="card p-2 h-fit sm:h-auto rounded-lg hover:bg-gray-300 dark:hover:bg-gray-800 lg:dark:hover:bg-gray-700 duration-500">
                <div class="img h-4/6 w-full aspect-square rounded-t-lg overflow-hidden">
                    <!-- random image -->
                    <img src="https://source.unsplash.com/random" alt="" class="h-full w-full object-cover" />
                </div>
                <div class="p-2 h-2/6 w-full grid grid-rows-2 rounded-b-lg bg-white dark:bg-gray-900">
                    <div class="">
                        <h2 class=" min-h-1/2 text-gray-700 dark:text-gray-300 mb-1 line-clamp-2 hover:cursor-pointer">
                            I'm supper
                            dog for you.</h2>
                    </div>
                    <div class="min-h-1/2 font-thin flex items-center justify-between">
                        <div class="w-1/2">
                            <h3>@rynHiroo</h3>
                            <button class="text-sm flex items-center gap-2 text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 duration-300">
                                <i class="fa-solid fa-clock"></i>
                                <p>2 hours ago</p>
                            </button>
                        </div>
                        <div class="w-1/2 flex justify-between px-2" >
                            <button>
                                <i class="fa-solid fa-heart"></i>
                                <p>100</p>
                            </button>
                            <button>
                                <i class="fa-solid fa-bookmark"></i>
                                <p>100</p>
                            </button>
                        </div>
                    
                    </div>
                </div>
            </div>

            <div
                class="card p-2 h-fit sm:h-auto rounded-lg hover:bg-gray-300 dark:hover:bg-gray-800 lg:dark:hover:bg-gray-700 duration-500">
                <div class="img h-4/6 w-full aspect-square rounded-t-lg overflow-hidden">
                    <!-- random image -->
                    <img src="https://source.unsplash.com/random" alt="" class="h-full w-full object-cover" />
                </div>
                <div class="p-2 h-2/6 w-full grid grid-rows-2 rounded-b-lg bg-white dark:bg-gray-900">
                    <div class="">
                        <h2 class=" min-h-1/2 text-gray-700 dark:text-gray-300 mb-1 line-clamp-2 hover:cursor-pointer">
                            I'm supper
                            dog for you.</h2>
                    </div>
                    <div class="min-h-1/2 font-thin flex items-center justify-between">
                        <div class="w-1/2">
                            <h3>@rynHiroo</h3>
                            <button class="text-sm flex items-center gap-2 text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 duration-300">
                                <i class="fa-solid fa-clock"></i>
                                <p>2 hours ago</p>
                            </button>
                        </div>
                        <div class="w-1/2 flex justify-between px-2" >
                            <button>
                                <i class="fa-solid fa-heart"></i>
                                <p>100</p>
                            </button>
                            <button>
                                <i class="fa-solid fa-bookmark"></i>
                                <p>100</p>
                            </button>
                        </div>
                    
                    </div>
                </div>
            </div>

            <div
                class="card p-2 h-fit sm:h-auto rounded-lg hover:bg-gray-300 dark:hover:bg-gray-800 lg:dark:hover:bg-gray-700 duration-500">
                <div class="img h-4/6 w-full aspect-square rounded-t-lg overflow-hidden">
                    <!-- random image -->
                    <img src="https://source.unsplash.com/random" alt="" class="h-full w-full object-cover" />
                </div>
                <div class="p-2 h-2/6 w-full grid grid-rows-2 rounded-b-lg bg-white dark:bg-gray-900">
                    <div class="">
                        <h2 class=" min-h-1/2 text-gray-700 dark:text-gray-300 mb-1 line-clamp-2 hover:cursor-pointer">
                            I'm supper
                            dog for you.</h2>
                    </div>
                    <div class="min-h-1/2 font-thin flex items-center justify-between">
                        <div class="w-1/2">
                            <h3>@rynHiroo</h3>
                            <button class="text-sm flex items-center gap-2 text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 duration-300">
                                <i class="fa-solid fa-clock"></i>
                                <p>2 hours ago</p>
                            </button>
                        </div>
                        <div class="w-1/2 flex justify-between px-2" >
                            <button>
                                <i class="fa-solid fa-heart"></i>
                                <p>100</p>
                            </button>
                            <button>
                                <i class="fa-solid fa-bookmark"></i>
                                <p>100</p>
                            </button>
                        </div>
                    
                    </div>
                </div>
            </div>

            <div
                class="card p-2 h-fit sm:h-auto rounded-lg hover:bg-gray-300 dark:hover:bg-gray-800 lg:dark:hover:bg-gray-700 duration-500">
                <div class="img h-4/6 w-full aspect-square rounded-t-lg overflow-hidden">
                    <!-- random image -->
                    <img src="https://source.unsplash.com/random" alt="" class="h-full w-full object-cover" />
                </div>
                <div class="p-2 h-2/6 w-full grid grid-rows-2 rounded-b-lg bg-white dark:bg-gray-900">
                    <div class="">
                        <h2 class=" min-h-1/2 text-gray-700 dark:text-gray-300 mb-1 line-clamp-2 hover:cursor-pointer">
                            I'm supper
                            dog for you.</h2>
                    </div>
                    <div class="min-h-1/2 font-thin flex items-center justify-between">
                        <div class="w-1/2">
                            <h3>@rynHiroo</h3>
                            <button class="text-sm flex items-center gap-2 text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 duration-300">
                                <i class="fa-solid fa-clock"></i>
                                <p>2 hours ago</p>
                            </button>
                        </div>
                        <div class="w-1/2 flex justify-between px-2" >
                            <button>
                                <i class="fa-solid fa-heart"></i>
                                <p>100</p>
                            </button>
                            <button>
                                <i class="fa-solid fa-bookmark"></i>
                                <p>100</p>
                            </button>
                        </div>
                    
                    </div>
                </div>
            </div>

            <div
                class="card p-2 h-fit sm:h-auto rounded-lg hover:bg-gray-300 dark:hover:bg-gray-800 lg:dark:hover:bg-gray-700 duration-500">
                <div class="img h-4/6 w-full aspect-square rounded-t-lg overflow-hidden">
                    <!-- random image -->
                    <img src="https://source.unsplash.com/random" alt="" class="h-full w-full object-cover" />
                </div>
                <div class="p-2 h-2/6 w-full grid grid-rows-2 rounded-b-lg bg-white dark:bg-gray-900">
                    <div class="">
                        <h2 class=" min-h-1/2 text-gray-700 dark:text-gray-300 mb-1 line-clamp-2 hover:cursor-pointer">
                            I'm supper
                            dog for you.</h2>
                    </div>
                    <div class="min-h-1/2 font-thin flex items-center justify-between">
                        <div class="w-1/2">
                            <h3>@rynHiroo</h3>
                            <button class="text-sm flex items-center gap-2 text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 duration-300">
                                <i class="fa-solid fa-clock"></i>
                                <p>2 hours ago</p>
                            </button>
                        </div>
                        <div class="w-1/2 flex justify-between px-2" >
                            <button>
                                <i class="fa-solid fa-heart"></i>
                                <p>100</p>
                            </button>
                            <button>
                                <i class="fa-solid fa-bookmark"></i>
                                <p>100</p>
                            </button>
                        </div>
                    
                    </div>
                </div>
            </div>

            <div
                class="card p-2 h-fit sm:h-auto rounded-lg hover:bg-gray-300 dark:hover:bg-gray-800 lg:dark:hover:bg-gray-700 duration-500">
                <div class="img h-4/6 w-full aspect-square rounded-t-lg overflow-hidden">
                    <!-- random image -->
                    <img src="https://source.unsplash.com/random" alt="" class="h-full w-full object-cover" />
                </div>
                <div class="p-2 h-2/6 w-full grid grid-rows-2 rounded-b-lg bg-white dark:bg-gray-900">
                    <div class="">
                        <h2 class=" min-h-1/2 text-gray-700 dark:text-gray-300 mb-1 line-clamp-2 hover:cursor-pointer">
                            I'm supper
                            dog for you.</h2>
                    </div>
                    <div class="min-h-1/2 font-thin flex items-center justify-between">
                        <div class="w-1/2">
                            <h3>@rynHiroo</h3>
                            <button class="text-sm flex items-center gap-2 text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 duration-300">
                                <i class="fa-solid fa-clock"></i>
                                <p>2 hours ago</p>
                            </button>
                        </div>
                        <div class="w-1/2 flex justify-between px-2" >
                            <button>
                                <i class="fa-solid fa-heart"></i>
                                <p>100</p>
                            </button>
                            <button>
                                <i class="fa-solid fa-bookmark"></i>
                                <p>100</p>
                            </button>
                        </div>
                    
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</section>
</main>
</body>