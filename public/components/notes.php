<!-- notes -->
<div class="note">
    <div class="note-header flex justify-between items-center px-4 md:px-6 pt-1 pb-2">
        <h1 class="text-2xl font-semibold">Notes</h1>
        <a href="#" class="text-blue-600 hover:text-blue-600 font-semibold duration-300">View All</a>
    </div>
    <div class="note-content px-2 md:px-4 py-2">
        <div class="note-card grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2 md:gap-4">
            <!-- acpect square crad with title of max 2 line -->

            <?php
            for ($i=0; $i < 12; $i++) {
            include './components/product-notes.php';
            } ?>

        </div>
    </div>
</div>
<?php include './components/pagination.php'; ?>
</section>
</main>
</body>