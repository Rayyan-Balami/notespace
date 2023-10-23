<?php
//session start
session_start();

//if user is not logged in then show login and signup button
if ($_SESSION['loggedin'] != true) {
    echo '<div class="grid place-content-center mx-auto">
    <div
        class="w-full max-w-lg p-6 grid grid-rows-3 gap-4 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-xl dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700">
        <p class="text-center">
            👋 Welcome!<br />Log in or sign up to access your profile.
        </p>
        <!-- login link -->
        <div>
            <a href="../public/userAuth/loginForm.html"
                class="w-full px-5 py-3 flex items-center justify-between text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:bg-blue-700">
                Log In
                <div>
                    <i class="fa-solid fa-user-graduate"></i>
                </div>
            </a>
        </div>
        <!-- signup link -->
        <div class="">
            <a href="../public/userAuth/ signupForm.html"
                class="px-5 py-3 flex items-center justify-between  text-white dark:text-gray-300 bg-gray-900 border rounded-lg dark:border-gray-700">
                <div>
                    Don&apos;t have an account ? 🤯 Sign Up &nbsp;
                </div>
                <div>
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>
                </div>
            </a>
        </div>
    </div>
</div>';
    exit();
} else {
    ?>
    <section class="md:p-4 bg-white dark:bg-gray-950 md:bg-gray-100 md:dark:bg-gray-800 lg:rounded-xl w-full">
        <!-- top header -->
        <div class="flex flex-col items-center justify-center ">
            <div class="md:mt-4 px-4 w-full space-y-3 max-w-xl">
                <div class="gap-4 flex md:items-center relative">
                    <div class="w-28 h-28 md:w-40 md:h-40 bg-cover bg-center bg-no-repeat rounded-full overflow-hidden">
                        <img src="https://img.freepik.com/premium-vector/gamer-mascot-geek-boy-esports-logo-avatar-with-headphones-glasses-cartoon-character_8169-228.jpg"
                            alt="Profile Image" class="w-full h-full object-cover" />
                    </div>
                    <div class="absolute top-0 right-0 flex items-center gap-1">
                        <div class="grid place-content-center px-1 py-1">
                            <i class="fa-solid fa-lock"></i>
                        </div>
                        <a href="#"
                            class="px-2 py-1 text-white bg-gray-700 text-sm rounded-full inline-flex items-center justify-center font-medium">
                            <i class="fa-regular fa-pen-to-square"></i>&nbsp;Edit
                        </a>
                        <a href="#"
                            class="px-2 py-1 text-white bg-gray-700 text-sm rounded-full inline-flex items-center justify-center font-medium">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>&nbsp;Share
                        </a>

                    </div>
                    <div class="flex flex-col justify-end pb-4 md:pb-0">
                        <h1 class="text-end text-2xl font-bold">Rayyan Balami</h1>
                        <p class="text-lg">@_geeeky_gamer</p>
                    </div>
                </div>

                <div class="col-span-2 md:col-span-1 space-y-3 px-5">
                    <div class="grid grid-cols-3 gap-10 place-content-center">
                        <div class="text-center">
                            <div class="font-bold text-2xl">10</div>
                            <div class="text-sm">Following</div>
                        </div>
                        <div class="text-center">
                            <div class="font-bold text-2xl">1.20 K</div>
                            <div class="text-sm">Followers</div>
                        </div>
                        <div class="text-center">
                            <div class="font-bold text-2xl">100 K</div>
                            <span class="text-sm">Likes</span>
                        </div>
                    </div>

                    <p class="text-center">Description about me goes here</p>
                   
                </div>
            </div>
        </div>
        <!-- top header end -->

        <!-- middle navigation -->
        <div class="mt-4 grid grid-cols-4 text-xs">
            <div>
                <a href="../public/notespace.php" class="flex flex-col justify-between items-center">
                    <span class="text-lg"><i class="fa-solid fa-book"></i></span>
                    <span>My Notes</span>
                </a>
            </div>
            <div>
                <a href="../public/notespace.php" class="flex flex-col justify-between items-center">
                    <span class="text-lg"><i class="fa-solid fa-heart"></i></span>
                    <span>Liked</span>
                </a>
            </div>
            <div>
                <a href="../public/notespace.php" class="flex flex-col justify-between items-center">
                    <span class="text-lg"><i class="fa-solid fa-bookmark"></i></span>
                    <span>Favourites</span>
                </a>
            </div>
            <div>
                <a href="../public/notespace.php" class="flex flex-col justify-between items-center">
                    <span class="text-lg"><i class="fa-solid fa-gear"></i></span>
                    <span>Settings</span>
                </a>
            </div>
        </div>
        <!-- middle navigation end -->

        <!-- video grid -->
        <div class="grid grid-cols-4 gap-0.5 mt-2">
            <div class="relative w-full h-60 bg-cover bg-center bg-no-repeat" style="
            background-image: url('https://sf-tk-sg.ibytedtos.com/obj/tiktok-web-sg/tt-sg-article-cover-351970d5103b996fbe9ddc67f6d668cc.gif');
          ">
                <!-- small player with views -->
                <div class="absolute bottom-1 left-1 flex gap-1 text-white text-xs items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>800</span>
                </div>
                <!-- small player with views end -->
            </div>

            <div class="relative w-full h-60 bg-cover bg-center bg-no-repeat" style="
            background-image: url('https://i.pinimg.com/originals/05/d3/80/05d38056f155a2e852691a62546413cf.gif');
          ">
                <!-- small player with views -->
                <div class="absolute bottom-1 left-1 flex gap-1 text-white text-xs items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>800</span>
                </div>
                <!-- small player with views end -->
            </div>

            <div class="relative w-full h-60 bg-cover bg-center bg-no-repeat" style="
            background-image: url('https://cdn.acidcow.com/pics/20190628/gifs_14.gif');
          ">
                <!-- small player with views -->
                <div class="absolute bottom-1 left-1 flex gap-1 text-white text-xs items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>800</span>
                </div>
                <!-- small player with views end -->
            </div>

            <div class="relative w-full h-60 bg-cover bg-center bg-no-repeat" style="
            background-image: url('https://www.allkpop.com/upload/2021/06/comment/260124/1624685055-tumblr-72b06bab00d71145f9900a3bdd40a288-e6d20803-500.gif');
          ">
                <!-- small player with views -->
                <div class="absolute bottom-1 left-1 flex gap-1 text-white text-xs items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>800</span>
                </div>
                <!-- small player with views end -->
            </div>

            <!-- ///////////// -->

            <div class="relative w-full h-60 bg-cover bg-center bg-no-repeat" style="
            background-image: url('https://media0.giphy.com/media/5tujxS8BprYWkDzjXM/giphy.gif?cid=790b7611f58c0b916eb59574df025c7ca891a396c6176d14&rid=giphy.gif&ct=g');
          ">
                <!-- small player with views -->
                <div class="absolute bottom-1 left-1 flex gap-1 text-white text-xs items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>800</span>
                </div>
                <!-- small player with views end -->
            </div>

            <div class="relative w-full h-60 bg-cover bg-center bg-no-repeat" style="
            background-image: url('https://i.pinimg.com/originals/a7/9e/bb/a79ebb256a2e8b450f6d29d813a538bf.gif');
          ">
                <!-- small player with views -->
                <div class="absolute bottom-1 left-1 flex gap-1 text-white text-xs items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>800</span>
                </div>
                <!-- small player with views end -->
            </div>

            <div class="relative w-full h-60 bg-cover bg-center bg-no-repeat" style="
            background-image: url('https://media3.giphy.com/media/daOQ5lE52dUhgD8acn/giphy.gif?cid=790b7611359354d7bdfe94465e3f7a6dc892e92e85b0da7e&rid=giphy.gif&ct=g');
          ">
                <!-- small player with views -->
                <div class="absolute bottom-1 left-1 flex gap-1 text-white text-xs items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>800</span>
                </div>
                <!-- small player with views end -->
            </div>

            <div class="relative w-full h-60 bg-cover bg-center bg-no-repeat" style="
            background-image: url('https://media2.giphy.com/media/GMKSiOWWSyRv1P0G0s/giphy.gif?cid=790b76117872dd4d66aab9bcec13817a9ce1043478fbcc59&rid=giphy.gif&ct=g');
          ">
                <!-- small player with views -->
                <div class="absolute bottom-1 left-1 flex gap-1 text-white text-xs items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>800</span>
                </div>
                <!-- small player with views end -->
            </div>

            <!-- //////////// -->

            <div class="relative w-full h-60 bg-cover bg-center bg-no-repeat" style="
            background-image: url('https://66.media.tumblr.com/ec902eca6ef176851823e29314d56ede/f90bf85c8b66de71-3a/s400x600/419ad07f433f14b8851af32ecedc2ea0f64e1a18.gif');
          ">
                <!-- small player with views -->
                <div class="absolute bottom-1 left-1 flex gap-1 text-white text-xs items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>800</span>
                </div>
                <!-- small player with views end -->
            </div>

            <div class="relative w-full h-60 bg-cover bg-center bg-no-repeat" style="
            background-image: url('https://media4.giphy.com/media/lnPEWRyHHQhKuFsNLo/giphy.gif?cid=790b76115514496b47f0100da633cdce8e29f904cea6f308&rid=giphy.gif&ct=g');
          ">
                <!-- small player with views -->
                <div class="absolute bottom-1 left-1 flex gap-1 text-white text-xs items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>800</span>
                </div>
                <!-- small player with views end -->
            </div>

            <div class="relative w-full h-60 bg-cover bg-center bg-no-repeat" style="
            background-image: url('https://c.tenor.com/ooA0qXfBTUEAAAAM/dog-tiktok.gif');
          ">
                <!-- small player with views -->
                <div class="absolute bottom-1 left-1 flex gap-1 text-white text-xs items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>800</span>
                </div>
                <!-- small player with views end -->
            </div>

            <div class="relative w-full h-60 bg-cover bg-center bg-no-repeat" style="
            background-image: url('https://64.media.tumblr.com/6407088ae4b520c36b0ca6f06cdbf8e3/7e615472c8228ae9-ba/s400x600/dba5fd9c77b1dd419a6bbe6c3ac73357ce7eebb8.gifv');
          ">
                <!-- small player with views -->
                <div class="absolute bottom-1 left-1 flex gap-1 text-white text-xs items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>800</span>
                </div>
                <!-- small player with views end -->
            </div>
        </div>
        <!-- video grid end -->
    </section>
    </main>
    <?php
}
?>