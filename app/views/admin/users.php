<?php include __DIR__ . "/../header.php"; ?>
<div class="min-h-screen px-48 py-16">
    <table class="min-w-full bg-white border border-gray-300 divide-y divide-gray-200">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User ID</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Username</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Role</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Edit</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Delete</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            <?php foreach ($users as $user) : ?>
            <tr>
                <td class="px-6 py-4 whitespace-nowrap"><?php echo $user->getId() ?></td>
                <td class="px-6 py-4 whitespace-nowrap"><?php echo $user->getName() ?></td>
                <td class="px-6 py-4 whitespace-nowrap"><?php echo $user->getUsername() ?></td>
                <td class="px-6 py-4 whitespace-nowrap"><?php echo $user->getEmail() ?></td>
                <td class="px-6 py-4 whitespace-nowrap"><?php echo $user->getRole() ? 'Admin' : 'User'; ?></td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4"
                        onclick="location.href='/admin/updateUser?id=<?= $user->getId() ?>'">
                        Edit
                    </button>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <button onclick="location.href='/admin/deleteUser?id=<?= $user->getId() ?>'"
                        class="bg-red-500 hover:bg-red-700 text-white font-semibold py-2 px-4">
                        Delete
                    </button>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>


<?php include __DIR__ . "/../footer.php"; ?>