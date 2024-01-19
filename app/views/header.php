<?php
session_start();
?>

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
          <a href="/" class="text-white hover:text-gray-300 ml-9 font-bold text-lg">Home</a>
        </div>
        <div class="space-x-4">
          <a href="/auth/register" class="text-white hover:bg-rose-300 bg-rose-400 px-4 py-2">Create
            Account</a>
          <a href="/auth/login" class="text-white hover:bg-rose-800 bg-rose-900 px-4 py-2">
            Login</a>
          <a href="/post/newPost" class="text-white hover:bg-teal-500 bg-teal-400 px-4 py-2">
            New Post</a>
        </div>
      </div>
    </nav>