<?php include __DIR__ . "/../header.php"; ?>
<div class="min-h-screen px-48 py-16">
    <div class="grid grid-cols-7 gap-4">
        <div class="col-span-2">
            <div class="bg-white p-6 shadow-lg h-fit text-center rounded-lg">
                <p class="text-3xl font-semibold mb-6">Join SHAREEE! and create your own posts!</p>
                <div class="flex flex-col items-center">
                    <a href="/auth/register" class="text-white hover:bg-rose-300 bg-rose-400 px-4 py-2">Create
                        Account</a>
                    <p class="text-xl font-semibold my-2">or</p>
                    <a href="/auth/login" class="text-white hover:bg-rose-800 bg-rose-900 px-4 py-2">
                        Login</a>
                </div>
            </div>
        </div>
        <div class="col-span-5 pl-24">
            <?php foreach ($posts as $post) { ?>
            <div class="bg-white p-6 shadow-lg mb-6 relative rounded-lg">
                <button class="absolute top-0 right-0 p-6" title="Delete this post"
                    onclick="location.href='/admin/deletePost?id=<?= $post->getId() ?>'">
                    <svg class="w-5 h-5 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 18 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h16M7 8v8m4-8v8M7 1h4a1 1 0 0 1 1 1v3H6V2a1 1 0 0 1 1-1ZM3 5h12v13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V5Z" />
                    </svg>
                </button>

                <div class="flex items-center mb-4">
                    <svg class="w-8 h-8 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 20 20">
                        <path
                            d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
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