<?php include __DIR__ . "/../header.php"; ?>

<div class="min-h-screen px-48 py-16">
    <form action="updateUser" method="POST" class="max-w-md mx-auto">
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-600">Name</label>
            <input type="text" id="name" name="name" value="<?php echo $user->getName(); ?>" class="mt-1 p-2 w-full border" required placeholder="Name">
        </div>

        <div class="mb-4">
            <label for="username" class="block text-sm font-medium text-gray-600">Username</label>
            <input type="text" id="username" name="username" value="<?php echo $user->getUsername(); ?>" class="mt-1 p-2 w-full border" required placeholder="username">
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
            <input type="email" id="email" name="email" value="<?php echo $user->getEmail(); ?>" class="mt-1 p-2 w-full border" required placeholder="example@email.com">
        </div>

        <div class="mb-4">
            <label for="role" class="block text-sm font-medium text-gray-600">Role</label>
            <select id="role" name="role" class="mt-1 p-2 w-36 border border-gray-600 bg-white" required>
                <option value="" disabled selected>Select Role</option>
                <option value="admin" <?php echo $user->getRole() ? 'selected' : ''; ?>>Admin</option>
                <option value="user" <?php echo !$user->getRole() ? 'selected' : ''; ?>>User</option>
            </select>
        </div>

        <p class="text-gray-600 text-sm mb-4">All fields are required.</p>

        <div class="flex justify-end">
            <button type="submit" class="bg-teal-600 hover:bg-teal-700 text-white font-bold py-2 px-4">
                Save Changes
            </button>
        </div>
    </form>
</div>





<?php include __DIR__ . "/../footer.php"; ?>