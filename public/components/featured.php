<!-- content -->
<section class="py-4 bg-white dark:bg-gray-950 md:bg-gray-100 md:dark:bg-gray-800 lg:rounded-xl w-full">
    <!-- featured -->
    <div class="featured">
        <div class="featured-header flex justify-between items-center px-4 md:px-6 pb-2">
            <h1 class="text-2xl font-semibold">Featured </h1>
    </div>

        <style>
            /* Hide scroll bar for carousel-container */
            .carousel-container::-webkit-scrollbar {
                display: none;
            }

            .carousel-container {
                -ms-overflow-style: none;
                /* IE and Edge */
                scrollbar-width: none;
                /* Firefox */
            }
        </style>

        <div class="ml-2 md:ml-5 relative rounded-l-xl overflow-auto h-auto"><!-- Snap Point -->
            <!-- Contents -->
            <div class="carousel-container pb-3 pt-1 pl-1 relative w-full flex snap-x snap-mandatory overflow-x-auto">
                <?php for ($i = 1; $i <= 4; $i++) {
                    echo "<div id='item$i' class='snap-always snap-start shrink-0 w-[95%] mr-2 rounded-xl'>";
                    include './components/product_featured.php';
                    echo '</div>';
                } ?>
            </div>
        </div>
        <!-- featured ends here -->