<nav id="side-navbar" class="w-64 mr-4 z-10 hidden lg:block fixed lg:relative lg:z-0  lg:pt-4 lg:ml-4">
        <ul class="sticky top-24">
            <?php

            //include userDashBoard.php if user is logged in
            
            if ($_SESSION['loggedin']) {
                include 'userDashBoard.php';
            }

            ?>
            <!-- home -->
            <li class="">
                <a href="../public/notespace.php"
                    class="flex items-center gap-2 rounded-md hover:bg-blue-600 hover:bg-opacity-10 dark:hover:bg-opacity-40 hover:text-blue-600 dark:hover:bg-gray-800 lg:dark:hover:bg-gray-700 px-4 py-3 duration-300">
                    <div class="w-8 text-left">
                    <i class="fa-regular fa-house"></i>
                    </div>
                    <span>Home</span>
                </a>
            </li>

            <!-- notes -->
            <li class="">
                <a href="#"
                    class="flex items-center gap-2 rounded-md hover:bg-blue-600 hover:bg-opacity-10 dark:hover:bg-opacity-40 hover:text-blue-600 dark:hover:bg-gray-800 lg:dark:hover:bg-gray-700 px-4 py-3 duration-300">
                    <div class="w-8 text-left">
                        <i class="fa-solid fa-book"></i>
                    </div>
                    <span>Notes</span>
                </a>
            </li>

            <!-- semester -->
            <li class="group relative">
                <button id="semester-button"
                    class="w-full flex items-center gap-2 rounded-md hover:bg-blue-600 hover:bg-opacity-10 dark:hover:bg-opacity-40 hover:text-blue-600 dark:hover:bg-gray-800 lg:dark:hover:bg-gray-700 px-4 py-3 duration-300">
                    <div class="w-8 text-left">
                        <i class="fa-solid fa-user-graduate"></i>
                    </div>
                    <span>Semester</span>
                    <div class="pointer-events-none absolute right-5 top-3 ">
                        <i class="fa-solid fa-caret-down"></i>
                    </div>
                </button>
                <div id="semester-content" class="p-2 grid grid-cols-4 grid-rows-2 gap-2 text-center rounded-md"
                    style="display: none;">
                    <a class="aspect-square bg-gray-100 dark:bg-gray-700 grid place-content-center rounded-md shadow-sm  hover:bg-blue-600 hover:bg-opacity-20 dark:hover:bg-opacity-20 hover:text-blue-600 duration-300"
                        href="">1</a>
                    <a class="aspect-square bg-gray-100 dark:bg-gray-700 grid place-content-center rounded-md shadow-sm  hover:bg-blue-600 hover:bg-opacity-20 dark:hover:bg-opacity-20 hover:text-blue-600 duration-300"
                        href="">2</a>
                    <a class="aspect-square bg-gray-100 dark:bg-gray-700 grid place-content-center rounded-md shadow-sm  hover:bg-blue-600 hover:bg-opacity-20 dark:hover:bg-opacity-20 hover:text-blue-600 duration-300"
                        href="">3</a>
                    <a class="aspect-square bg-gray-100 dark:bg-gray-700 grid place-content-center rounded-md shadow-sm  hover:bg-blue-600 hover:bg-opacity-20 dark:hover:bg-opacity-20 hover:text-blue-600 duration-300"
                        href="">4</a>
                    <a class="aspect-square bg-gray-100 dark:bg-gray-700 grid place-content-center rounded-md shadow-sm  hover:bg-blue-600 hover:bg-opacity-20 dark:hover:bg-opacity-20 hover:text-blue-600 duration-300"
                        href="">5</a>
                    <a class="aspect-square bg-gray-100 dark:bg-gray-700 grid place-content-center rounded-md shadow-sm  hover:bg-blue-600 hover:bg-opacity-20 dark:hover:bg-opacity-20 hover:text-blue-600 duration-300"
                        href="">6</a>
                    <a class="aspect-square bg-gray-100 dark:bg-gray-700 grid place-content-center rounded-md shadow-sm  hover:bg-blue-600 hover:bg-opacity-20 dark:hover:bg-opacity-20 hover:text-blue-600 duration-300"
                        href="">7</a>
                    <a class="aspect-square bg-gray-100 dark:bg-gray-700 grid place-content-center rounded-md shadow-sm  hover:bg-blue-600 hover:bg-opacity-20 dark:hover:bg-opacity-20 hover:text-blue-600 duration-300"
                        href="">8</a>
                </div>
            </li>

            <script>
                // Get references to the button and semester content
                const semesterButton = document.getElementById("semester-button");
                const semesterContent = document.getElementById("semester-content");

                // Add a click event listener to the button
                semesterButton.addEventListener("click", () => {
                    // Toggle the visibility of the semester content
                    if (semesterContent.style.display === "none" || semesterContent.style.display === "") {
                        semesterContent.style.display = "grid";
                    } else {
                        semesterContent.style.display = "none";
                    }
                });
            </script>


            <!-- community -->
            <li class="">
                <a href="#"
                    class="group flex items-center gap-2 rounded-md hover:bg-blue-600 hover:bg-opacity-10 dark:hover:bg-opacity-40 dark:hover:bg-gray-800 lg:dark:hover:bg-gray-700 px-4 py-3 duration-300">
                    <div class="w-8 text-left group-hover:text-red-600">
                        <i class="fa-solid fa-heart"></i>
                    </div>
                    <span class="group-hover:text-blue-600">Community</span>
                </a>
            </li>

            <?php

            //check if user is logged in and email is verified if not show verify email alert
            
            if ($_SESSION['loggedin'] && $_SESSION['verified'] == false) {
                echo '
                <div class="pt-2">
                    <a href="../public/userAuth/emailVerifyForm.html"
                        class="group flex items-center gap-2 rounded-lg text-red-600 border border-red-400 bg-red-50 dark:bg-red-600 dark:border-red-600 dark:bg-opacity-10 dark:hover:bg-opacity-20 px-4 py-3 duration-300">
                        <div class="w-8 text-left">
                        <i class="fa-solid fa-envelope fa-shake"></i>
                        </div>
                        <span class="">Act now ❤️‍🩹 :<br>Email Verification</span>
                    </a>
                </div>';
                echo '
                <div class="pt-2">
                    <a href="../public/userAuth/emailVerifyForm.html"
                        class="group flex items-center gap-2 rounded-lg text-green-600 border border-green-400 bg-green-50 dark:bg-green-600 dark:border-green-600 dark:bg-opacity-10 dark:hover:bg-opacity-20 px-4 py-3 duration-300">
                        <div class="w-8 text-left">
                        <i class="fa-solid fa-wand-magic-sparkles fa-bounce"></i>
                        </div>
                        <span class="">Personalize 🤠 :<br>Your account, your style</span>
                    </a>
                </div>';
            }

            ?>


        </ul>


        <!-- side navbar ends here -->
    </nav>