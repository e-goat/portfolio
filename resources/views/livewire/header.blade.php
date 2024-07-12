<header class="sticky top-0 mb-4">
    <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <div class="left-side-nav-wrapper flex gap-2">
              <button data-collapse-toggle="navbar-hamburger" type="button" class="inline-flex items-center justify-center p-2 w-10 h-10 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-hamburger" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
              </button>
              <a href="{{route('home')}}" class="flex items-center gap-2" wire:navigate>
                <svg fill="#000000" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                width="20px" height="20px" viewBox="0 0 209.322 209.322"
                xml:space="preserve">
                <g>
                  <path d="M105.572,101.811c9.889-6.368,27.417-16.464,28.106-42.166c0.536-20.278-9.971-49.506-49.155-50.878
                    C53.041,7.659,39.9,28.251,36.071,46.739l-0.928-0.126c-1.932,0-3.438,1.28-5.34,2.889c-2.084,1.784-4.683,3.979-7.792,4.308
                    c-3.573,0.361-8.111-1.206-11.698-2.449c-4.193-1.431-6.624-2.047-8.265-0.759c-1.503,1.163-2.178,3.262-2.028,6.226
                    c0.331,6.326,4.971,18.917,16.016,25.778c7.67,4.765,16.248,5.482,20.681,5.482c0.006,0,0.006,0,0.006,0
                    c2.37,0,4.945-0.239,7.388-0.726c2.741,4.218,5.228,7.476,6.037,9.752c2.054,5.851-27.848,25.087-27.848,55.01
                    c0,29.916,22.013,48.475,56.727,48.475h55.004c30.593,0,70.814-29.908,75.291-92.48C180.781,132.191,167.028,98.15,105.572,101.811
                    z M18.941,77.945C8.775,71.617,4.992,58.922,5.294,55.525c0.897,0.24,2.194,0.689,3.228,1.042
                    c4.105,1.415,9.416,3.228,14.068,2.707c4.799-0.499,8.253-3.437,10.778-5.574c0.607-0.509,1.393-1.176,1.872-1.491
                    c0.87,0.315,0.962,0.693,1.176,3.14c0.196,2.26,0.473,5.37,2.362,9.006c1.437,2.761,3.581,5.705,5.646,8.542
                    c1.701,2.336,4.278,5.871,4.535,6.404c-0.445,1.184-4.907,3.282-12.229,3.282C30.177,82.591,23.69,80.904,18.941,77.945z
                      M56.86,49.368c0-4.938,4.001-8.943,8.931-8.943c4.941,0,8.942,4.005,8.942,8.943c0,4.931-4.001,8.942-8.942,8.942
                    C60.854,58.311,56.86,54.299,56.86,49.368z M149.159,155.398l-20.63,11.169l13.408,9.293c0,0-49.854,15.813-72.198-6.885
                    c-11.006-11.16-13.06-28.533,4.124-38.84c17.184-10.312,84.609,3.943,84.609,3.943L134.295,147.8L149.159,155.398z"/>
                </g>
                </svg>
                <span class="self-center text-xl font-semibold whitespace-nowrap">Blog</span>
              </a>
            </div>
            <div class="right-side-nav-wrapper flex items-center lg:order-2">
                <label class="hidden lg:inline-flex lg:items-center cursor-pointer w-full">
                    <input  id="theme-toggle" type="checkbox" value="" class="sr-only peer">
                    <span class="theme-toggler text-sm font-medium text-gray-900 cursor-pointer">
                      <span class="toggler-svg svg-dark hidden">
                        <svg viewBox="0 0 24 24" fill="none" class="w-6 h-6"><path fill-rule="evenodd" clip-rule="evenodd" d="M17.715 15.15A6.5 6.5 0 0 1 9 6.035C6.106 6.922 4 9.645 4 12.867c0 3.94 3.153 7.136 7.042 7.136 3.101 0 5.734-2.032 6.673-4.853Z" class="fill-neutral-400/20"></path><path d="m17.715 15.15.95.316a1 1 0 0 0-1.445-1.185l.495.869ZM9 6.035l.846.534a1 1 0 0 0-1.14-1.49L9 6.035Zm8.221 8.246a5.47 5.47 0 0 1-2.72.718v2a7.47 7.47 0 0 0 3.71-.98l-.99-1.738Zm-2.72.718A5.5 5.5 0 0 1 9 9.5H7a7.5 7.5 0 0 0 7.5 7.5v-2ZM9 9.5c0-1.079.31-2.082.845-2.93L8.153 5.5A7.47 7.47 0 0 0 7 9.5h2Zm-4 3.368C5 10.089 6.815 7.75 9.292 6.99L8.706 5.08C5.397 6.094 3 9.201 3 12.867h2Zm6.042 6.136C7.718 19.003 5 16.268 5 12.867H3c0 4.48 3.588 8.136 8.042 8.136v-2Zm5.725-4.17c-.81 2.433-3.074 4.17-5.725 4.17v2c3.552 0 6.553-2.327 7.622-5.537l-1.897-.632Z" class="fill-neutral-500"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M17 3a1 1 0 0 1 1 1 2 2 0 0 0 2 2 1 1 0 1 1 0 2 2 2 0 0 0-2 2 1 1 0 1 1-2 0 2 2 0 0 0-2-2 1 1 0 1 1 0-2 2 2 0 0 0 2-2 1 1 0 0 1 1-1Z" class="fill-neutral-500"></path></svg>
                      </span>
                      <span class="toggler-svg svg-light hidden">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><path d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" class="fill-sky-400/20 stroke-amber-300"></path><path d="M12 4v1M17.66 6.344l-.828.828M20.005 12.004h-1M17.66 17.664l-.828-.828M12 20.01V19M6.34 17.664l.835-.836M3.995 12.004h1.01M6 6l.835.836" class="stroke-amber-300"></path></svg>
                      </span>
                    </span>
                </label>
            </div>
        </div>
    </nav>
    <div class="hidden w-full" id="navbar-hamburger">
      <ul class="flex flex-col font-medium bg-gray-50 container mx-auto max-w-screen-xl px-4 lg:px-6 py-2.5">
        <li>
          <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 text-center">Services</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 text-center md:dark:hover:text-white">Pricing</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 text-center">Contact</a>
        </li>
      </ul>
    </div>
</header>
