<nav
    class="lg:hidden fixed bottom-0 sm:bottom-4 left-1/2 z-50 w-full h-16 -translate-x-1/2 sm:max-w-lg bg-white sm:rounded-full border-t-2 sm:border border-gray-200 dark:bg-gray-900 dark:border-gray-700">
            <!-- bottom navigation -->
            <div class="py-2 px-5 sm:px-8 text-xs w-full h-full sm:max-w-lg ">
            <div class="flex justify-between items-center">
                <div>
                    <a href="../public/notespace.php" class="flex flex-col justify-between items-center">
                        <span class="text-lg"><i class="fa-solid fa-home"></i></span>
                        <span>Home</span>
                    </a>
                </div>
                <div>
                    <a href="../public/notespace.php" class="flex flex-col justify-between items-center">
                        <span class="text-lg"><i class="fa-solid fa-book"></i></span>
                        <span>Notes</span>
                    </a>
                </div>
                <div>
                    <a href="../public/notespace.php" class="flex flex-col justify-between items-center">
                        <span class="text-lg"><i class="fa-solid fa-square-plus"></i></span>
                        <span>Upload</span>
                    </a>
                </div>
                <div>
                    <a href="../public/notespace.php" class="flex flex-col justify-between items-center">
                        <span class="text-lg"><i class="fa-solid fa-magnifying-glass"></i></span>
                        <span>Search</span>
                    </a>
                </div>
                <div>


                    <a href="./userProfile.php" class="flex flex-col justify-between items-center">
                        <?php
            // Check if logged in
            if ($_SESSION['loggedin'] == true) {
                ?>
                    <div
                        class="w-7 h-7 rounded-full overflow-hidden grid place-content-center bg-gray-200 dark:bg-gray-700">
                        <?php
                        // Check if the user has a profile picture
                        if ($_SESSION['profilePicture'] == null) {
                            echo $_SESSION['fname'][0] . $_SESSION['lname'][0];
                        } else {
                            echo '<img src="thumbnail.php" alt="Rounded avatar" class="w-10 h-10 rounded-full object-cover">';
                        }
                        ?>
                    </div>
                    <span>You</span>
                <?php
            } else {
                // If not logged in, show the user icon
                echo '<span class="text-lg"><i class="fa-solid fa-user"></i></i></span>
                <span>You</span>';
            }
            ?>

                    </a>
                </div>
            </div>
        </div>
        <!-- bottom navigation end -->
</nav>
