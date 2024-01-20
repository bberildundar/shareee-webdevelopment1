<?php include __DIR__ . "/../header.php"; ?>
<div class="min-h-screen px-48 py-16">

    <div class="grid grid-cols-7 gap-4">
        <div class="col-span-2">
            <div class="bg-white p-6  shadow-lg mb-6 rounded-lg">
                <div class="flex items-center ml-4 mb-3">
                    <svg class="w-24 h-24 text-gray-800 dark:text-white mb-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 20 20">
                        <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                    </svg>
                </div>

                <div class="ml-4">
                    <p class="text-lg font-semibold"><?= $user->getName() ?></p>
                    <p class="text-gray-500">@<?= $user->getUsername() ?></p>
                </div>
            </div>

        </div>

        <div class="col-span-5 pl-24">
            <?php foreach ($myPosts as $post) { ?>
                <div class="bg-white p-6 shadow-lg mb-6 relative rounded-lg">
                    <div class="flex items-center mb-4">
                        <svg class="w-8 h-8 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 20 20">
                            <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                        </svg>
                        <div class="ml-4">
                            <p class="text-lg font-semibold"><?= $post->getName() ?></p>
                            <p class="text-gray-500"><?= '@' . $post->getUsername() ?></p>
                        </div>
                    </div>

                    <p class="text-gray-700"><?= $post->getText() ?></p>
                </div>
            <?php } ?>

        </div>

    </div>
</div>

<?php include __DIR__ . "/../footer.php"; ?>