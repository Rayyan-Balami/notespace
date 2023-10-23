<!-- user quick links -->
<div class="grid grid-cols-2 gap-2 pb-2">
    <div class="col-span-2 relative space-y-2">
        <!-- username / profile -->
        <button id="profile-button"
            class="w-full overflow-hidden flex items-center justify-between rounded-lg text-blue-600 border border-blue-400 bg-blue-50 hover:bg-blue-600 hover:bg-opacity-10 dark:hover:text-blue-600 dark:bg-gray-900 dark:text-blue-50 dark:border-gray-800 dark:hover:bg-opacity-40 dark:hover:bg-gray-800 lg:dark:hover:bg-gray-700 px-4 py-3 duration-300 ">
            <img src="thumbnail.png" alt="Rounded avatar" class="w-10 h-10 rounded-full object-cover ">
            <span>
                <?php echo $_SESSION['fname'];
                echo " ";
                echo $_SESSION['lname']; ?>
            </span>
            <div class="pointer-events-none">
                <i class="fa-solid fa-caret-down"></i>
            </div>
        </button>

        <div id="profile-content" class="rounded-md overflow-hidden" 
        style="display: none;">
            <a href="./userProfile.php"
                class="flex items-center gap-2 rounded-md hover:bg-blue-600 hover:bg-opacity-10 dark:hover:bg-opacity-40 hover:text-blue-600 dark:hover:bg-gray-800 lg:dark:hover:bg-gray-700 px-4 py-3 duration-300">
                <div class="w-8 text-left">
                <i class="fa-solid fa-user-graduate"></i>
                </div>
                <span>Account</span>
            </a>
            <a href="#"
                class="flex items-center gap-2 rounded-md hover:bg-blue-600 hover:bg-opacity-10 dark:hover:bg-opacity-40 hover:text-blue-600 dark:hover:bg-gray-800 lg:dark:hover:bg-gray-700 px-4 py-3 duration-300">
                <div class="w-8 text-left">
                <i class="fa-solid fa-arrow-right-from-bracket fa-rotate-180"></i>
                </div>
                <span>Logout</span>
            </a>
            
        </div>


        <script>
            // Get references to the button and semester content
            const profileButton = document.getElementById("profile-button");
            const profileContent = document.getElementById("profile-content");

            // Add a click event listener to the button
            profileButton.addEventListener("click", () => {
                // Toggle the visibility of the semester content
                if (profileContent.style.display === "none" || profileContent.style.display === "") {
                    profileContent.style.display = "block";
                } else {
                    profileContent.style.display = "none";
                }
            });
        </script>

    </div>
    <!-- favourites -->
    <div class="col-span-2">
        <a href="#"
            class="group flex items-center gap-2 rounded-md hover:bg-blue-600 hover:bg-opacity-10 dark:hover:bg-opacity-40 hover:text-blue-600 dark:hover:bg-gray-800 lg:dark:hover:bg-gray-700 px-4 py-3 duration-300">
            <div class="w-8 text-left group-hover:text-yellow-500">
                <i class="fa-solid fa-bookmark"></i>
            </div>
            <span class="group-hover:text-blue-600">Favorites</span>
        </a>
    </div>
    <!-- upload -->
    <div class="">
        <a href="#"
            class="group grid place-content-center rounded-md hover:bg-blue-600 hover:bg-opacity-10 dark:hover:bg-opacity-40 hover:text-blue-600 dark:hover:bg-gray-800 lg:dark:hover:bg-gray-700 px-4 py-3 duration-300">
            <div class="text-3xl text-center ">
                <i class="fa-solid fa-file-arrow-up"></i>
            </div>
            <div>Upload</div>

        </a>
    </div>
    <!-- desk / users notes -->
    <div class="">
        <a href="./myNotes.php"
        class="group grid place-content-center rounded-md hover:bg-blue-600 hover:bg-opacity-10 dark:hover:bg-opacity-40 hover:text-blue-600 dark:hover:bg-gray-800 lg:dark:hover:bg-gray-700 px-4 py-3 duration-300">
            <div class="text-3xl text-center ">
                <i class="fa-solid fa-file-lines"></i>
            </div>
            <div>Desk</div>

        </a>
    </div>
</div>