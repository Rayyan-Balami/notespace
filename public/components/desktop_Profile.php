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
    <section class="p-4 md:flex gap-4 bg-white dark:bg-gray-950 md:bg-gray-100 md:dark:bg-gray-800 lg:rounded-xl w-full">
        <!-- col 1 -->
        <div class="md:w-2/5 space-y-4 mb-4 ">
            <div
                class="overflow-hidden bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 dark:bg-gray-800">
                <div class="p-4 grid place-items-center object-cover overflow-hidden" style="
              background-image: url('https://images.unsplash.com/photo-1654035685981-9ad298346c97?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2960&q=80');
              background-size: cover;
              background-position: center center;
              background-repeat: no-repeat;
            ">
                    <img class="rounded-full w-36 h-36"
                        src="https://flowbite-admin-dashboard.vercel.app/images/users/bonnie-green-2x.png"
                        alt="Jese picture" />
                </div>
                <div class="flex items-center justify-center gap-2 px-4 py-4 bg-white dark:bg-gray-900">
                    <span
                        class="px-2 py-1 rounded-md dark:bg-gray-700 dark:text-white border border-black dark:border-gray-400">
                        @ladybug <i class="fa-solid fa-certificate"></i>
                    </span>
                    <span
                        class="px-2 py-1 rounded-md dark:bg-gray-700 dark:text-white border border-black dark:border-gray-400">
                        55 <i class="fa-solid fa-marker"></i></i>
                    </span>
                    <span
                        class="px-2 py-1 rounded-md dark:bg-gray-700 dark:text-white border border-black dark:border-gray-400">
                        4.5 <i class="fa-solid fa-star"></i>
                    </span>
                </div>
                <div class="pb-4 flex gap-4 flex-wrap justify-center bg-white dark:bg-gray-900 ">
                    <button type="button"
                        class="px-3 py-2 flex items-center justify-between gap-2 text-sm font-medium rounded-lg  text-white border border-blue-600 bg-blue-600 dark:bg-blue-600 dark:border-blue-600 hover:bg-blue-700 duration-300">
                        <i class="fa-solid fa-arrow-up-from-bracket"></i>
                        Upload picture
                    </button>
                    <button type="button"
                        class="py-2 px-3 text-sm font-medium rounded-lg  text-red-600 border border-red-400 bg-red-50 dark:bg-red-600 dark:border-red-600 dark:bg-opacity-10 dark:hover:bg-opacity-20 duration-300">
                        Remove
                    </button>
                </div>
                <div class="pb-4 flex gap-4 flex-wrap justify-center bg-white dark:bg-gray-900 ">
                    <a href="../public/userAuth/logout.php"
                        class="hover:bg-gray-300 dark:hover:bg-gray-800 lg:dark:hover:bg-gray-700  py-2 rounded-full px-6  duration-300">Log
                        Out</a>
                </div>
                
            </div>
        </div>
        <!-- col 2 -->
        <div class="space-y-4 md:w-3/5">
            <!-- General information -->
            <div
                class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-900">
                <h3 class="mb-4 text-xl font-semibold dark:text-white">
                    General information
                </h3>
                <form action="signup.php" method="post" class="grid grid-cols-1 gap-4 mt-8 lg:grid-cols-2">
                    <!-- first name -->
                    <div>
                        <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">First Name</label>
                        <input type="text" placeholder="Hakuna" required name="fname"
                            value="<?php echo $_SESSION['fname']; ?>"
                            class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>

                    <!-- last name -->
                    <div>
                        <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Last Name</label>
                        <input type="text" placeholder="Matata" required name="lname"
                            value="<?php echo $_SESSION['lname']; ?>"
                            class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>

                    <!-- Address -->
                    <div>
                        <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Address</label>
                        <input type="text" placeholder="Heaven Dhoka" required name="Address"
                            value="<?php echo $_SESSION['address']; ?>"
                            class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>

                    <!-- phone-number -->
                    <div>
                        <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Phone Number</label>
                        <input type="text" placeholder="98XXXXXXXX" required name="phone"
                            value="<?php echo $_SESSION['phone']; ?>"
                            class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>

                    <!-- school name (optional) -->
                    <div class="lg:col-span-2">
                        <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">School/College Name</label>
                        <input type="text" placeholder="Enter school/College name" required name="school"
                            value="<?php echo $_SESSION['school']; ?>"
                            class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>

                    <!-- affiliated university -->
                    <div class="lg:col-span-2">
                        <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Affiliated University</label>
                        <input type="text" placeholder="eg : NoteSpace University" required name="university"
                            value="<?php echo $_SESSION['university']; ?>"
                            class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>
                    <div class="lg:col-span-2 grid grid-cols-3 gap-4">


                        <!-- select type of account -->
                        <div class="relative col-span-3 md:col-span-1">
                            <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Account Type</label>
                            <select name="accType" required
                                class="block w-full px-5 py-3 mt-2 appearance-none text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40">
                                <option value="student" <?php if ($_SESSION['accType'] === 'student')
                                    echo 'selected'; ?>>
                                    Student</option>
                                <option value="teacher" <?php if ($_SESSION['accType'] === 'teacher')
                                    echo 'selected'; ?>>
                                    Teacher</option>
                            </select>
                            <div class="pointer-events-none absolute right-5 bottom-3 text-gray-700 dark:text-gray-300">
                                <i class="fa-solid fa-sort"></i>
                            </div>
                        </div>


                        <!-- department -->
                        <div class="col-span-2 md:col-span-1">
                            <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Department</label>
                            <input type="text" placeholder="BCA" required name="department" value="<?php echo $_SESSION['department']; ?>"
                                class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                        </div>

                        <!-- select semester -->
                        <div class="relative">
                            <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Semester</label>
                            <select name="semester" required
                                class="block w-full px-5 py-3 mt-2 appearance-none text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40">
                                <option value="1" <?php if($_SESSION['semester']=='1') echo 'selected' ?>>1</option>
                                <option value="2" <?php if($_SESSION['semester']=='2') echo 'selected' ?>>2</option>
                                <option value="3" <?php if($_SESSION['semester']=='3') echo 'selected' ?>>3</option>
                                <option value="4" <?php if($_SESSION['semester']=='4') echo 'selected' ?>>4</option>
                                <option value="5" <?php if($_SESSION['semester']=='5') echo 'selected' ?>>5</option>
                                <option value="6" <?php if($_SESSION['semester']=='6') echo 'selected' ?>>6</option>
                                <option value="7" <?php if($_SESSION['semester']=='7') echo 'selected' ?>>7</option>
                                <option value="8" <?php if($_SESSION['semester']=='8') echo 'selected' ?>>8</option>
                            </select>
                            <div class="pointer-events-none absolute right-5 bottom-3 text-gray-700 dark:text-gray-300">
                                <i class="fa-solid fa-sort"></i>
                            </div>
                        </div>
                    </div>

                    <!-- submit button -->
                    <div
                        class="lg:col-span-2 mt-4 flex gap-2 items-center justify-between flex-wrap text-gray-600 dark:text-gray-200">
                        <span class="text-sm">Updating general info requires a new login.</span>
                        <button type="submit" value="save" name="save"
                            class="w-fit px-5 py-3 text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:bg-blue-700">
                            Save
                        </button>
                    </div>
                </form>
            </div>

            <!--Email Address information -->
            <div
                class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:lg:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-900">
                <div class="mb-4 flex items-center justify-between gap-2 flex-wrap">
                    <h3 class="text-xl font-semibold dark:text-white">
                        Eamil information
                    </h3>
                        <?php 
                        //if email is not verified then show verify email alert
                        if($_SESSION['verified']==false){
                            echo '<a href="../public/userAuth/emailVerifyForm.html"
                        class="group w-full flex items-center gap-2 rounded-lg text-red-600 border border-red-400 bg-red-50 dark:bg-red-600 dark:border-red-600 dark:bg-opacity-10 dark:hover:bg-opacity-20 px-4 py-3 duration-300">
                        <div class="w-8 text-left">
                        <i class="fa-solid fa-envelope fa-shake"></i>
                        </div>
                        <span class="">Act now ❤️‍🩹 : Email Verification</span>
                    </a>';
                        }else{
                            echo '<a href="../public/userAuth/emailVerifyForm.html"
                        class="group w-full flex items-center gap-2 rounded-lg text-green-600 border border-green-400 bg-green-50 dark:bg-green-600 dark:border-green-600 dark:bg-opacity-10 dark:hover:bg-opacity-20 px-4 py-3 duration-300">
                        <div class="w-8 text-left">
                        <i class="fa-solid fa-wand-magic-sparkles fa-bounce"></i>
                        </div>
                        <span class="">Email verified 🤠</span>
                    </a>';
                        }
                        ?>
                </div>
                <form action="#" class="space-y-4">
                    <!-- current email -->
                    <div>
                        <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Current email</label>
                        <input type="email" placeholder="xyz@gmail.com" required name="current_email" value="<?php echo $_SESSION['email']; ?>"
                            class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>
                    <!-- new email -->
                    <div>
                        <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">New email</label>
                        <input type="email" placeholder="abc@gmail.com" required name="new_email"
                            class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>
                    <!-- confirm email -->
                    <div>
                        <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Confirm email</label>
                        <input type="email" placeholder="abc@gmail.com" required name="confirm_email"
                            class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>
                    <!-- submit button -->
                    <div class="mt-4 flex gap-2 items-center justify-between flex-wrap text-gray-600 dark:text-gray-200">
                        <span class="text-sm">Email change prompts logout and reverification.</span>
                        <button type="submit" value="save" name="save"
                            class="w-fit px-5 py-3 text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:bg-blue-700">
                            Save
                        </button>
                    </div>
                </form>
            </div>

            <!--Password information -->
            <div
                class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:lg:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-900">
                <h3 class="mb-4 text-xl font-semibold dark:text-white">
                    Password information
                </h3>
                <form action="#" class="space-y-4">
                    <!-- current password -->
                    <div>
                        <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Current password</label>
                        <input type="password" placeholder="••••••••" required name="current_password"
                            class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>
                    <!-- new password -->
                    <div>
                        <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">New password</label>
                        <input type="password" placeholder="••••••••" required name="new_password"
                            class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>
                    <!-- confirm password -->
                    <div>
                        <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Confirm password</label>
                        <input type="password" placeholder="••••••••" required name="confirm_password"
                            class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>
                    <!-- submit button -->
                    <div class="mt-4 flex gap-2 items-center justify-between flex-wrap text-gray-600 dark:text-gray-200">
                        <span class="text-sm">Changing password requires a new login.</span>
                        <button type="submit" value="save" name="save"
                            class="w-fit px-5 py-3 text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:bg-blue-700">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </section>
    </main>
    <?php
}
?>