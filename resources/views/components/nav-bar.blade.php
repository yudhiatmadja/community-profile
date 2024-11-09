<nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
  <div class="flex lg:flex-1">
    <a href="/" class="-m-1.5 p-1.5">
      <img class="h-8 w-auto" src="{{ asset('images/nav-logo.png') }}" alt="">
    </a>
  </div>
  <div class="flex lg:hidden">
    <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
      <span class="sr-only">Open main menu</span>
      <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
      </svg>
    </button>
  </div>
  <div class="hidden lg:flex lg:gap-x-12">
    <a href="#about" class="text-sm/6 font-semibold text-gray-900">About</a>
    <a href="#goals" class="text-sm/6 font-semibold text-gray-900">Goals</a>
    <a href="#struktur" class="text-sm/6 font-semibold text-gray-900">Struktur</a>
    <!-- Dropdown with Alpine.js -->
    <div x-data="{ open: false }" class="relative">
      <button @click="open = !open" class="py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 text-sm/6 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 inline-flex justify-center font-semibold items-center">
          More
          <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.5 7l4.5 4 4.5-4" />
          </svg>
      </button>
      <!-- Dropdown Menu -->
      <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-44 bg-white rounded-lg shadow dark:bg-gray-700" x-cloak>
          <a href="/visimisi" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600">Visi & Misi</a>
          <a href="/koordinatorumum" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600">Koordinator Umum</a>
          <a href="/program-kerja" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600">Program Kerja</a>
          <a href="/jobdesc" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600">Job Description</a>
          <a href="/lokasi" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600">Lokasi</a>
      </div>
  </div>
  </div>
  <div class="hidden lg:flex lg:flex-1 lg:justify-end">
    @auth
      <!-- If the user is authenticated, show Logout button -->
      <form action="{{ route('logout') }}" method="POST" class="inline">
        @csrf
        <button type="submit" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600">Logout</button>
      </form>
    @else
      <!-- If the user is not authenticated, show Login button -->
      <a href="/login" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600">Login</a>
    @endauth
  </div>
</nav>
<!-- Mobile menu, show/hide based on menu open state. -->
<div class="lg:hidden" role="dialog" aria-modal="true">
  <!-- Background backdrop, show/hide based on slide-over state. -->
  <div class="fixed inset-0 z-50"></div>
  <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
    <div class="flex items-center justify-between">
      <a href="#" class="-m-1.5 p-1.5">
        <span class="sr-only">Your Company</span>
        <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="">
      </a>
      <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
        <span class="sr-only">Close menu</span>
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
        </svg>
      </button>
    </div>
    <div class="mt-6 flow-root">
      <div class="-my-6 divide-y divide-gray-500/10">
        <div class="space-y-2 py-6">
          <a href="#about" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">About</a>
          <a href="#goals" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Goals</a>
          <a href="#struktur" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Struktur</a>
        </div>
      </div>
    </div>
  </div>
</div>
</header>
