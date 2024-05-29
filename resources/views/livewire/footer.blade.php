<?php
    $currentYear = date('Y');
?>

<footer class="bg-white rounded-lg shadow m-4 dark:bg-gray-800 border-solid border-2 border-gray-800 border-opacity-5">
    <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
      <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">Duchev © {{ $currentYear }}</span>
      <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">v{{ config('app.version') }}</span>
</footer>