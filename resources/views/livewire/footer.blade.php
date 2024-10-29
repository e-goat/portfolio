@php $currentYear = date('Y') @endphp
<footer class="bg-slate-200">
    <div class="container mx-auto">
      <div class="max-w-7xl mx-auto">
        <div class="w-full max-w-screen-xl p-4 flex items-center justify-between">
          <span class="text-sm text-gray-500 sm:text-center"><a target="_blank" href="{{config('app.url')}}">{{config('app.name')}}</a> © {{ $currentYear }}</span>
          <span class="text-sm text-gray-500 sm:text-center">v{{ config('app.version') }}</span>
        </div>
      </div>
    </div>
</footer>