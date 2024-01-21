<!DOCTYPE html>
<html lang="en">

<head>
  <title>SHAREEE!</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-200">
  <main>
    <nav class="bg-black p-6">
      <div class="container mx-auto flex justify-between items-center">
        <div class="flex items-center">
          <a href="/" class="text-white text-4xl font-semibold mr-4">SHAREEE!</a>
          <a href="/" class="text-white hover:text-gray-300 ml-9 font-bold text-lg">Homepage</a>
          <?php
          if (isset($_SESSION['user_id']) && $_SESSION['user_id'] !== null) {
            echo '<a href="/profile" class="text-white hover:text-gray-300 ml-9 font-bold text-lg">My Profile</a>';
          }
          if (isset($_SESSION['user_id']) && $_SESSION['user_id'] !== null && $_SESSION['user_role'] === true) {
            echo '<a href="/admin/users" class="text-white hover:text-gray-300 ml-9 font-bold text-lg">Edit Users</a>';
          }
          ?>
        </div>
        <div class="space-x-4">
          <?php
          if (!isset($_SESSION['user_id']) || $_SESSION['user_id'] === null) {
            echo '<a href="/auth/register" class="text-white hover:bg-rose-300 bg-rose-400 px-4 py-2 rounded-lg">Create Account</a>';
            echo '<a href="/auth/login" class="text-white hover:bg-rose-800 bg-rose-900 px-4 py-2 rounded-lg">Login</a>';
          } else {
            echo '<a href="/post/newPost" class="text-white hover:bg-teal-500 bg-teal-400 px-4 py-2 rounded-lg">New Post</a>';
            echo '<a href="/auth/logout" class="text-white hover:bg-red-600 bg-red-500 px-4 py-2 rounded-lg">Logout</a>';
          }
          ?>
        </div>
      </div>
    </nav>