<div x-cloak :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed inset-0 z-20 transition-opacity bg-black opacity-50 lg:hidden"></div>

<div x-cloak :class="sidebarOpen ? 'translate-x-0 ease-in' : '-translate-x-full ease-out'" class="fixed inset-y-0 left-0 z-30 w-64 px-4 overflow-y-auto transition duration-200 transform bg-white border-r border-gray-100 lg:translate-x-0 lg:relative lg:inset-0 ">
    <div class="flex items-center mt-8">
        <img class="w-auto h-8" src="{{ asset('images/full-logo.svg') }}" alt="">
    </div>

    <hr class="my-6 border-gray-100">

    <nav class="space-y-8">
        <div class="space-y-4">
            <h3 class="px-4 text-sm tracking-wider text-gray-400 uppercase">PAGES</h3>
    
            {{-- <a class="flex items-center px-4 py-2 {{ $page->selected('') ? 'text-gray-600 bg-gray-200' : 'text-gray-500 hover:text-gray-600 hover:bg-gray-100' }} transition-colors duration-200 transform rounded-lg bg-opacity-40" href="/">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
    
                <span class="mx-3 font-medium capitalize">Dashboard</span>
            </a>

            <a class="flex items-center px-4 py-2 {{ $page->selected('forms') ? 'text-gray-600 bg-gray-200' : 'text-gray-500 hover:text-gray-600 hover:bg-gray-100' }} transition-colors duration-300 transform rounded-lg bg-opacity-40" href="/forms">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" />
                </svg>
    
                <span class="mx-3 font-medium capitalize">forms</span>
            </a>

            <a class="flex items-center px-4 py-2 {{ $page->selected('charts') ? 'text-gray-600 bg-gray-200' : 'text-gray-500 hover:text-gray-600 hover:bg-gray-100' }} transition-colors duration-300 transform rounded-lg bg-opacity-40" href="/charts">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                </svg>
    
                <span class="mx-3 font-medium capitalize">Charts</span>
            </a>
    
            <a class="flex items-center px-4 py-2 {{ $page->selected('modals') ? 'text-gray-600 bg-gray-200' : 'text-gray-500 hover:text-gray-600 hover:bg-gray-100' }} transition-colors duration-300 transform rounded-lg bg-opacity-40" href="/modals">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                </svg>
    
                <span class="mx-3 font-medium capitalize">modals</span>
            </a>
    
            <a class="flex items-center px-4 py-2 {{ $page->selected('tables') ? 'text-gray-600 bg-gray-200' : 'text-gray-500 hover:text-gray-600 hover:bg-gray-100' }} transition-colors duration-300 transform rounded-lg bg-opacity-40" href="/tables">
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13 10V14H19V10H13ZM11 10H5V14H11V10ZM13 19H19V16H13V19ZM11 19V16H5V19H11ZM13 5V8H19V5H13ZM11 5H5V8H11V5ZM19 3C20.1046 3 21 3.89543 21 5V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V5C3 3.89543 3.89543 3 5 3H19Z" fill="currentColor"></path>
                </svg>
    
                <span class="mx-3 font-medium capitalize">Tables</span>
            </a>

            <a class="flex items-center px-4 py-2 {{ $page->selected('tasks') ? 'text-gray-600 bg-gray-200' : 'text-gray-500 hover:text-gray-600 hover:bg-gray-100' }} transition-colors duration-300 transform rounded-lg bg-opacity-40" href="/tasks">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                </svg>
    
                <span class="mx-3 font-medium capitalize">tasks</span>
            </a> --}}

            <div x-data="{ open: false }">
                <button @click="open = !open" class="flex items-center justify-between w-full px-4 py-2 text-gray-500 transition-colors duration-300 transform rounded-lg hover:text-gray-600 hover:bg-gray-100 bg-opacity-40">
                    <span class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                        </svg>
    
                        <span class="mx-3 font-medium capitalize">Example</span>
                    </span>
    
                    <span class="rtl:rotate-180">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path x-show="! open" d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path x-show="open" d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                </button>
    
                <div 
                    x-show="open" 
                    x-transition:enter="transition ease-out duration-200 transform"
                    x-transition:enter-start="opacity-0 -translate-y-5"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-200 transform"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 -translate-y-5"
                    class="mt-2"
                >
                    <a class="block py-2 text-sm text-gray-500 transition-colors duration-300 transform rounded-lg pl-14 rtl:pr-14 hover:text-gray-600 hover:bg-gray-100 bg-opacity-40" href="/blank">Blank</a>
                    <a class="block py-2 text-sm text-gray-500 transition-colors duration-300 transform rounded-lg pl-14 rtl:pr-14 hover:text-gray-600 hover:bg-gray-100 bg-opacity-40" href="/404">404</a>
                </div>
            </div>
        </div>

        <div class="space-y-4">
            <h3 class="px-4 text-sm tracking-wider text-gray-400 uppercase">ACCOUNT PAGES</h3>
    
            {{-- <a class="flex items-center px-4 py-2 {{ $page->selected('profile') ? 'text-gray-600 bg-gray-200' : 'text-gray-500 hover:text-gray-600 hover:bg-gray-100' }} transition-colors duration-300 transform rounded-lg bg-opacity-40" href="/profile">
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 8C7 5.23858 9.23858 3 12 3C14.7614 3 17 5.23858 17 8C17 10.7614 14.7614 13 12 13C9.23858 13 7 10.7614 7 8ZM12 11C13.6569 11 15 9.65685 15 8C15 6.34315 13.6569 5 12 5C10.3431 5 9 6.34315 9 8C9 9.65685 10.3431 11 12 11Z" fill="currentColor"></path>
                    <path d="M6.34315 16.3431C4.84285 17.8434 4 19.8783 4 22H6C6 20.4087 6.63214 18.8826 7.75736 17.7574C8.88258 16.6321 10.4087 16 12 16C13.5913 16 15.1174 16.6321 16.2426 17.7574C17.3679 18.8826 18 20.4087 18 22H20C20 19.8783 19.1571 17.8434 17.6569 16.3431C16.1566 14.8429 14.1217 14 12 14C9.87827 14 7.84344 14.8429 6.34315 16.3431Z" fill="currentColor"></path>
                </svg>
    
    
                <span class="mx-3 font-medium capitalize">Profile</span>
            </a>
    
            <a class="flex items-center px-4 py-2 {{ $page->selected('sign-in') ? 'text-gray-600 bg-gray-200' : 'text-gray-500 hover:text-gray-600 hover:bg-gray-100' }} transition-colors duration-300 transform rounded-lg bg-opacity-40" href="/sign-in">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                </svg>
    
                <span class="mx-3 font-medium capitalize">Sign In</span>
            </a>
    
            <a class="flex items-center px-4 py-2 {{ $page->selected('sign-up') ? 'text-gray-600 bg-gray-200' : 'text-gray-500 hover:text-gray-600 hover:bg-gray-100' }} transition-colors duration-300 transform rounded-lg bg-opacity-40" href="/sign-up">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
                </svg>
    
                <span class="mx-3 font-medium capitalize">Sign Up</span>
            </a> --}}
        </div>
    </nav>
</div>