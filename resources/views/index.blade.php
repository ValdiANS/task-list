<html>

<head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link rel="stylesheet" as="style" onload="this.rel='stylesheet'"
        href="https://fonts.googleapis.com/css2?display=swap&amp;family=Inter%3Awght%40400%3B500%3B700%3B900&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900" />

    <title>Stitch Design</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />

    @vite('resources/css/app.css')

    <style>
        @container(max-width:120px)

            {
            .table-9e70333f-58c7-40f3-bda5-8619b6ded0d2-column-120 {
                display: none;
            }
        }

        @container(max-width:240px)

            {
            .table-9e70333f-58c7-40f3-bda5-8619b6ded0d2-column-240 {
                display: none;
            }
        }

        @container(max-width:360px)

            {
            .table-9e70333f-58c7-40f3-bda5-8619b6ded0d2-column-360 {
                display: none;
            }
        }

        @container(max-width:480px)

            {
            .table-9e70333f-58c7-40f3-bda5-8619b6ded0d2-column-480 {
                display: none;
            }
        }
    </style>

    <script defer>
        document.addEventListener("DOMContentLoaded", (event) => {

            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            const hamburgerIcon = document.getElementById('hamburger-icon');
            const closeIcon = document.getElementById('close-icon');

            mobileMenuBtn.addEventListener('click', () => {
                // Toggle mobile menu visibility
                mobileMenu.classList.toggle('hidden');

                // Toggle icons
                hamburgerIcon.classList.toggle('hidden');
                closeIcon.classList.toggle('hidden');
            });

            // Close mobile menu when clicking on links
            const mobileLinks = mobileMenu.querySelectorAll('a');
            mobileLinks.forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                    hamburgerIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                });
            });

            // Close mobile menu when clicking outside
            document.addEventListener('click', (e) => {
                if (!mobileMenuBtn.contains(e.target) && !mobileMenu.contains(e.target)) {
                    mobileMenu.classList.add('hidden');
                    hamburgerIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                }
            });

            // Close mobile menu on window resize to desktop
            window.addEventListener('resize', () => {
                if (window.innerWidth >= 1024) {
                    mobileMenu.classList.add('hidden');
                    hamburgerIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                }
            });
        });
    </script>
</head>

<body>
    <div class="relative flex size-full min-h-screen flex-col bg-white group/design-root overflow-x-hidden"
        style='font-family: Inter, "Noto Sans", sans-serif;'>
        <div class="layout-container flex h-full grow flex-col">
            <header
                class="flex items-center justify-between gap-4 whitespace-nowrap border-b border-solid border-b-[#f1f2f4] px-4 sm:px-6 lg:px-10 py-3">
                <!-- Logo and Brand -->
                <div class="flex items-center gap-4 text-[#121416]">
                    <div class="size-4">
                        <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 6H42L36 24L42 42H6L12 24L6 6Z" fill="currentColor"></path>
                        </svg>
                    </div>
                    <h2 class="text-[#121416] text-lg font-bold leading-tight tracking-[-0.015em]">TaskMaster</h2>
                </div>

                <!-- Desktop Navigation Links (hidden on mobile) -->
                <div class="hidden lg:flex items-center gap-9">
                    <a class="text-[#121416] text-sm font-medium leading-normal hover:text-gray-600 transition-colors"
                        href="#">Home</a>
                    <a class="text-[#121416] text-sm font-medium leading-normal hover:text-gray-600 transition-colors"
                        href="#">Projects</a>
                    <a class="text-[#121416] text-sm font-medium leading-normal hover:text-gray-600 transition-colors"
                        href="#">Calendar</a>
                </div>

                <!-- Right Section -->
                <div class="flex flex-1 justify-end gap-2 sm:gap-4 lg:gap-8">
                    <!-- Search Bar (hidden on small screens) -->
                    <label class="hidden md:flex flex-col min-w-40 !h-10 max-w-64">
                        <div class="flex w-full flex-1 items-stretch rounded-xl h-full">
                            <div
                                class="text-[#6a7681] flex border-none bg-[#f1f2f4] items-center justify-center pl-4 rounded-l-xl border-r-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                    fill="currentColor" viewBox="0 0 256 256">
                                    <path
                                        d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z">
                                    </path>
                                </svg>
                            </div>
                            <input placeholder="Search"
                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border-none bg-[#f1f2f4] focus:border-none h-full placeholder:text-[#6a7681] px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal"
                                value="">
                        </div>
                    </label>

                    <!-- Search Icon (visible on small screens only) -->
                    <button
                        class="md:hidden flex items-center justify-center w-10 h-10 rounded-xl bg-[#f1f2f4] text-[#6a7681] hover:bg-[#e8eaed] transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor"
                            viewBox="0 0 256 256">
                            <path
                                d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z">
                            </path>
                        </svg>
                    </button>

                    <!-- Notification Button -->
                    <button
                        class="flex items-center justify-center overflow-hidden rounded-xl h-10 w-10 lg:max-w-[480px] lg:w-auto lg:px-2.5 lg:gap-2 bg-[#f1f2f4] text-[#121416] hover:bg-[#e8eaed] transition-colors">
                        <div class="text-[#121416]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor"
                                viewBox="0 0 256 256">
                                <path
                                    d="M221.8,175.94C216.25,166.38,208,139.33,208,104a80,80,0,1,0-160,0c0,35.34-8.26,62.38-13.81,71.94A16,16,0,0,0,48,200H88.81a40,40,0,0,0,78.38,0H208a16,16,0,0,0,13.8-24.06ZM128,216a24,24,0,0,1-22.62-16h45.24A24,24,0,0,1,128,216ZM48,184c7.7-13.24,16-43.92,16-80a64,64,0,1,1,128,0c0,36.05,8.28,66.73,16,80Z">
                                </path>
                            </svg>
                        </div>
                    </button>

                    <!-- Profile Avatar -->
                    <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10"
                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBVdftYSYISU9OnpW1bRUggELf_DDxvTriSrC4ICLXlH1YXhRNekJuzvfBjaz4QhBc6oagMyAfnCjzji1dFBd_tG7vTJDQmZxXZWN0JdZoZ2hQWumArqwILOl0F36TyBoJfTkh6EJHbqy0vSud5bnshjU7GBYpKimHmM6DiwZ7W4Wu0LhVwVqbC84MZJ2ljVudLnrx1zuMYpaNaBoCnvTkAUFPmUgyw2i_hCGvhDIWXWVtX6JhmhU8HxqZlHzUg7qEokiWmK1YF_L4');">
                    </div>

                    <!-- Mobile Menu Button (visible on large screens and below) -->
                    <button id="mobile-menu-btn"
                        class="lg:hidden flex items-center justify-center w-10 h-10 rounded-xl bg-[#f1f2f4] text-[#121416] hover:bg-[#e8eaed] transition-colors group">
                        <svg id="hamburger-icon" class="group-hover:scale-110 transition-transform"
                            xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor"
                            viewBox="0 0 256 256">
                            <path
                                d="M224,128a8,8,0,0,1-8,8H40a8,8,0,0,1,0-16H216A8,8,0,0,1,224,128ZM40,72H216a8,8,0,0,0,0-16H40a8,8,0,0,0,0,16ZM216,184H40a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Z">
                            </path>
                        </svg>
                        <svg id="close-icon" class="hidden group-hover:scale-110 transition-transform"
                            xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor"
                            viewBox="0 0 256 256">
                            <path
                                d="M205.66,194.34a8,8,0,0,1-11.32,11.32L128,139.31,61.66,205.66a8,8,0,0,1-11.32-11.32L116.69,128,50.34,61.66A8,8,0,0,1,61.66,50.34L128,116.69l66.34-66.35a8,8,0,0,1,11.32,11.32L139.31,128Z">
                            </path>
                        </svg>
                    </button>
                </div>
            </header>

            <!-- Mobile Menu (You can add toggle functionality with JS) -->
            <div class="lg:hidden border-b border-[#f1f2f4] bg-white hidden transition-all duration-300 ease-in-out"
                id="mobile-menu">
                <div class="px-4 py-4 space-y-4">
                    <!-- Mobile Search Bar -->
                    <div class="md:hidden w-full">
                        <div class="flex w-full items-stretch rounded-xl h-10">
                            <div
                                class="text-[#6a7681] flex border-none bg-[#f1f2f4] items-center justify-center pl-4 rounded-l-xl border-r-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                                    fill="currentColor" viewBox="0 0 256 256">
                                    <path
                                        d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z">
                                    </path>
                                </svg>
                            </div>
                            <input placeholder="Search"
                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border-none bg-[#f1f2f4] focus:border-none h-full placeholder:text-[#6a7681] px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal">
                        </div>
                    </div>

                    <!-- Mobile Navigation Links -->
                    <nav class="space-y-1">
                        <a class="block text-[#121416] text-base font-medium leading-normal py-3 px-2 rounded-lg hover:bg-[#f1f2f4] transition-colors"
                            href="#">Home</a>
                        <a class="block text-[#121416] text-base font-medium leading-normal py-3 px-2 rounded-lg hover:bg-[#f1f2f4] transition-colors"
                            href="#">Projects</a>
                        <a class="block text-[#121416] text-base font-medium leading-normal py-3 px-2 rounded-lg hover:bg-[#f1f2f4] transition-colors"
                            href="#">Calendar</a>
                    </nav>
                </div>
            </div>

            <div class="px-4 flex flex-1 justify-center py-5">
                <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                    <div class="flex flex-wrap justify-between items-end gap-3 p-4">
                        <div class="flex flex-col">
                            @isset($name)
                                <p class="text-[#121416] tracking-light text-[20px] font-bold leading-tight min-w-72">
                                    Hello {{ $name }}
                                </p>
                            @endisset
                            <p class="text-[#121416] tracking-light text-[32px] font-bold leading-tight min-w-72">
                                My Tasks
                            </p>
                        </div>

                        <button
                            class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-8 px-4 bg-[#f1f2f4] text-[#121416] text-sm font-medium leading-normal transition-all duration-200 hover:bg-[#e8eaed] active:scale-95">
                            <span class="truncate">New Task</span>
                        </button>
                    </div>
                    <div class="px-4 py-3 @container">
                        @if (count($tasks) === 0)
                            <div class="w-full p-4">
                                <p class="text-lg text-[#5c6063] text-center">
                                    There are no tasks!
                                </p>
                            </div>
                        @else
                            <div class="flex overflow-hidden rounded-xl border border-[#dde1e3] bg-white">
                                <table class="flex-1">
                                    <thead>
                                        <tr class="bg-white">
                                            <th
                                                class="table-9e70333f-58c7-40f3-bda5-8619b6ded0d2-column-120 px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">
                                                Task
                                            </th>
                                            <th
                                                class="table-9e70333f-58c7-40f3-bda5-8619b6ded0d2-column-240 px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">
                                                Created At
                                            </th>
                                            <th
                                                class="table-9e70333f-58c7-40f3-bda5-8619b6ded0d2-column-360 px-4 py-3 text-left text-[#121416] w-60 text-sm font-medium leading-normal">
                                                Priority
                                            </th>
                                            <th
                                                class="table-9e70333f-58c7-40f3-bda5-8619b6ded0d2-column-480 px-4 py-3 text-left text-[#121416] w-60 text-sm font-medium leading-normal">
                                                Status
                                            </th>
                                            <th
                                                class="table-9e70333f-58c7-40f3-bda5-8619b6ded0d2-column-480 px-4 py-3 text-left text-[#121416] w-60 text-sm font-medium leading-normal">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tasks as $task)
                                            <tr class="border-t border-t-[#dde1e3]">
                                                <td
                                                    class="table-9e70333f-58c7-40f3-bda5-8619b6ded0d2-column-120 h-[72px] px-4 py-2 w-[400px] text-[#121416] text-sm font-normal leading-normal">
                                                    {{ $task->title }}
                                                </td>
                                                <td
                                                    class="table-9e70333f-58c7-40f3-bda5-8619b6ded0d2-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7681] text-sm font-normal leading-normal">
                                                    {{ $task->created_at->format('Y-m-d H:i:s') }}
                                                </td>
                                                <td
                                                    class="table-9e70333f-58c7-40f3-bda5-8619b6ded0d2-column-360 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                                                    <button
                                                        class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-8 px-4 bg-[#f1f2f4] text-[#121416] text-sm font-medium leading-normal w-full">
                                                        <span class="truncate">{{ $task->priority }}</span>
                                                    </button>
                                                </td>
                                                <td
                                                    class="table-9e70333f-58c7-40f3-bda5-8619b6ded0d2-column-480 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                                                    <button
                                                        class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-8 px-4 bg-[#f1f2f4] text-[#121416] text-sm font-medium leading-normal w-full">
                                                        <span class="truncate">{{ $task->status }}</span>
                                                    </button>
                                                </td>
                                                <td
                                                    class="table-9e70333f-58c7-40f3-bda5-8619b6ded0d2-column-480 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                                                    <a href="{{ route('tasks.show', ['id' => $task->id]) }}"
                                                        class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-8 px-4 bg-[#f1f2f4] text-[#121416] text-sm font-medium leading-normal transition-all duration-200 hover:bg-[#e8eaed] active:scale-95">
                                                        <span class="truncate">Detail</span>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
