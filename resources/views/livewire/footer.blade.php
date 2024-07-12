@php $currentYear = date('Y') @endphp
<footer class="">
    <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
      <span class="text-sm text-gray-500 sm:text-center"><a target="_blank" href="https://rubberduck.xyz/">RubberDuck</a> © {{ $currentYear }}</span>
      <span class="text-sm text-gray-500 sm:text-center">v{{ config('app.version') }}</span>
</footer>