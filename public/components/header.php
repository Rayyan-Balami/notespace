<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NoteSpace</title>
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-white dark:bg-gray-950 text-gray-800 dark:text-gray-100">
    <!-- header starts here -->
    <header
        class="h-20 dark:bg-gray-950 bg-white md:dark:dark:bg-gray-950 px-4 md:px-8 sticky top-0 z-10 flex justify-between items-center">
        <div class="flex gap-6 items-center">
            <div class="logo">
                <h1 class="text-2xl font-semibold cursor-text"><a href="#">NoteSpace</a></h1>
            </div>
        </div>


        <div class="auth flex items-center justify-between space-x-4">
            <div class="search hidden md:block md:mr-4">
                <div class="relative w-96">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <input type="search" id="default-search"
                        class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search notes" required>
                    <button type="submit"
                        class="text-white absolute right-2 bottom-1.5 bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-1 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                </div>
            </div>

            <?php
            // if user is not logged in then show login and signup button
            
            if ($_SESSION['loggedin'] != true) {
                ?>
                <a href="../public/userAuth/loginForm.html"
                    class="hidden md:block hover:bg-gray-300 dark:hover:bg-gray-800 lg:dark:hover:bg-gray-700 border border-gray-400 py-2 shadow-sm rounded-full px-6 font-semibold duration-300">Log
                    In</a>
                <a href="../public/userAuth/signupForm.html"
                    class="hidden md:block text-white bg-blue-600 hover:bg-blue-700 py-2 shadow-sm rounded-full px-6 font-semibold duration-300">Sign
                    Up</a>
                <?php
            } else {
                ?>
                <div>
                    <a href="../public/userAuth/logout.php"
                        class="hidden md:block hover:bg-gray-300 dark:hover:bg-gray-800 lg:dark:hover:bg-gray-700  py-2 rounded-full px-6  duration-300">Log
                        Out</a>
                </div>
                <?php
            }
            ?>


        </div>
    </header>