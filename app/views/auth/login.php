<?php include __DIR__ . "/../header.php"; ?>
<div class="min-h-screen px-48 py-16">
    <div class="grid grid-cols-7 gap-4">
        <div class="col-span-2">
            <div class="bg-white p-6  shadow-lg h-fit text-center rounded-lg">
                <p class="text-2xl font-semibold">
                    Share your <span class="text-rose-400">voice</span>, connect with others, and inspire. Join a
                    vibrant community where your <span class="text-blue-700">voice</span> matter. Let's create, connect,
                    and make every moment count
                    <span class="text-rose-900">together</span>!
                </p>

            </div>
        </div>
        <div class="col-span-5 pl-24">
            <div class="bg-white p-6  shadow-lg rounded-lg">
                <p class="text-3xl font-semibold mb-6">Welcome back to SHAREEE!</p>
                <form>
                    <div class="mb-4">
                        <label for="username" class="pl-4 mb-1 block text-gray-800 font-semibold">Username</label>
                        <input type="text" id="username" name="username" placeholder="username"
                            class="w-full p-2 px-4 border border-gray-300 rounded-full">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="pl-4 mb-1 block text-gray-800 font-semibold">Password</label>
                        <input type="password" id="password" name="password" placeholder="*************"
                            class="w-full p-2 px-4 border border-gray-300 rounded-full">
                    </div>
                    <button type="submit"
                        class="ml-4 bg-indigo-900 text-white hover:bg-indigo-950 px-6 py-2 ">Login</button>
                </form>
                <p class="mt-4 text-gray-800">
                    New here? <a href="/auth/register" class="text-indigo-900 underline">Create an account</a>
                </p>
            </div>
        </div>
    </div>
</div>
<?php include __DIR__ . "/../footer.php"; ?>