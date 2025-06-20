<html>

<head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link rel="stylesheet" as="style" onload="this.rel='stylesheet'"
        href="https://fonts.googleapis.com/css2?display=swap&amp;family=Inter%3Awght%40400%3B500%3B700%3B900&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900" />

    <title>Stitch Design</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />

    @vite('resources/css/app.css')

</head>

<body>
    <div class="relative flex size-full min-h-screen flex-col bg-white group/design-root overflow-x-hidden"
        style='font-family: Inter, "Noto Sans", sans-serif;'>
        <div class="layout-container flex h-full grow flex-col">
            <header
                class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#f1f2f4] px-10 py-3">
                <div class="flex items-center gap-8">
                    <div class="flex items-center gap-4 text-[#121416]">
                        <div class="size-4">
                            <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 6H42L36 24L42 42H6L12 24L6 6Z" fill="currentColor"></path>
                            </svg>
                        </div>
                        <h2 class="text-[#121416] text-lg font-bold leading-tight tracking-[-0.015em]">TaskMaster</h2>
                    </div>
                    <div class="flex items-center gap-9">
                        <a class="text-[#121416] text-sm font-medium leading-normal" href="#">Home</a>
                        <a class="text-[#121416] text-sm font-medium leading-normal" href="#">Projects</a>
                        <a class="text-[#121416] text-sm font-medium leading-normal" href="#">Calendar</a>
                    </div>
                </div>
                <div class="flex flex-1 justify-end gap-8">
                    <label class="flex flex-col min-w-40 !h-10 max-w-64">
                        <div class="flex w-full flex-1 items-stretch rounded-xl h-full">
                            <div class="text-[#6a7681] flex border-none bg-[#f1f2f4] items-center justify-center pl-4 rounded-l-xl border-r-0"
                                data-icon="MagnifyingGlass" data-size="24px" data-weight="regular">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                    fill="currentColor" viewBox="0 0 256 256">
                                    <path
                                        d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z">
                                    </path>
                                </svg>
                            </div>
                            <input placeholder="Search"
                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border-none bg-[#f1f2f4] focus:border-none h-full placeholder:text-[#6a7681] px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal"
                                value="" />
                        </div>
                    </label>
                    <button
                        class="flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 bg-[#f1f2f4] text-[#121416] gap-2 text-sm font-bold leading-normal tracking-[0.015em] min-w-0 px-2.5">
                        <div class="text-[#121416]" data-icon="Bell" data-size="20px" data-weight="regular">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor"
                                viewBox="0 0 256 256">
                                <path
                                    d="M221.8,175.94C216.25,166.38,208,139.33,208,104a80,80,0,1,0-160,0c0,35.34-8.26,62.38-13.81,71.94A16,16,0,0,0,48,200H88.81a40,40,0,0,0,78.38,0H208a16,16,0,0,0,13.8-24.06ZM128,216a24,24,0,0,1-22.62-16h45.24A24,24,0,0,1,128,216ZM48,184c7.7-13.24,16-43.92,16-80a64,64,0,1,1,128,0c0,36.05,8.28,66.73,16,80Z">
                                </path>
                            </svg>
                        </div>
                    </button>
                    <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBVdftYSYISU9OnpW1bRUggELf_DDxvTriSrC4ICLXlH1YXhRNekJuzvfBjaz4QhBc6oagMyAfnCjzji1dFBd_tG7vTJDQmZxXZWN0JdZoZ2hQWumArqwILOl0F36TyBoJfTkh6EJHbqy0vSud5bnshjU7GBYpKimHmM6DiwZ7W4Wu0LhVwVqbC84MZJ2ljVudLnrx1zuMYpaNaBoCnvTkAUFPmUgyw2i_hCGvhDIWXWVtX6JhmhU8HxqZlHzUg7qEokiWmK1YF_L4");'>
                    </div>
                </div>
            </header>
            <div class="px-40 flex flex-1 justify-center py-5">
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
                        <div class="flex overflow-hidden rounded-xl border border-[#dde1e3] bg-white">
                            <table class="flex-1">
                                <thead>
                                    <tr class="bg-white">
                                        <th
                                            class="table-9e70333f-58c7-40f3-bda5-8619b6ded0d2-column-120 px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">
                                            Task</th>
                                        <th
                                            class="table-9e70333f-58c7-40f3-bda5-8619b6ded0d2-column-240 px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">
                                            Due Date
                                        </th>
                                        <th
                                            class="table-9e70333f-58c7-40f3-bda5-8619b6ded0d2-column-360 px-4 py-3 text-left text-[#121416] w-60 text-sm font-medium leading-normal">
                                            Priority</th>
                                        <th
                                            class="table-9e70333f-58c7-40f3-bda5-8619b6ded0d2-column-480 px-4 py-3 text-left text-[#121416] w-60 text-sm font-medium leading-normal">
                                            Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-t border-t-[#dde1e3]">
                                        <td
                                            class="table-9e70333f-58c7-40f3-bda5-8619b6ded0d2-column-120 h-[72px] px-4 py-2 w-[400px] text-[#121416] text-sm font-normal leading-normal">
                                            Grocery Shopping
                                        </td>
                                        <td
                                            class="table-9e70333f-58c7-40f3-bda5-8619b6ded0d2-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7681] text-sm font-normal leading-normal">
                                            2024-03-15
                                        </td>
                                        <td
                                            class="table-9e70333f-58c7-40f3-bda5-8619b6ded0d2-column-360 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                                            <button
                                                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-8 px-4 bg-[#f1f2f4] text-[#121416] text-sm font-medium leading-normal w-full">
                                                <span class="truncate">High</span>
                                            </button>
                                        </td>
                                        <td
                                            class="table-9e70333f-58c7-40f3-bda5-8619b6ded0d2-column-480 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                                            <button
                                                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-8 px-4 bg-[#f1f2f4] text-[#121416] text-sm font-medium leading-normal w-full">
                                                <span class="truncate">To Do</span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="border-t border-t-[#dde1e3]">
                                        <td
                                            class="table-9e70333f-58c7-40f3-bda5-8619b6ded0d2-column-120 h-[72px] px-4 py-2 w-[400px] text-[#121416] text-sm font-normal leading-normal">
                                            Project Proposal
                                        </td>
                                        <td
                                            class="table-9e70333f-58c7-40f3-bda5-8619b6ded0d2-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7681] text-sm font-normal leading-normal">
                                            2024-03-20
                                        </td>
                                        <td
                                            class="table-9e70333f-58c7-40f3-bda5-8619b6ded0d2-column-360 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                                            <button
                                                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-8 px-4 bg-[#f1f2f4] text-[#121416] text-sm font-medium leading-normal w-full">
                                                <span class="truncate">Medium</span>
                                            </button>
                                        </td>
                                        <td
                                            class="table-9e70333f-58c7-40f3-bda5-8619b6ded0d2-column-480 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                                            <button
                                                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-8 px-4 bg-[#f1f2f4] text-[#121416] text-sm font-medium leading-normal w-full">
                                                <span class="truncate">In Progress</span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="border-t border-t-[#dde1e3]">
                                        <td
                                            class="table-9e70333f-58c7-40f3-bda5-8619b6ded0d2-column-120 h-[72px] px-4 py-2 w-[400px] text-[#121416] text-sm font-normal leading-normal">
                                            Book Appointment
                                        </td>
                                        <td
                                            class="table-9e70333f-58c7-40f3-bda5-8619b6ded0d2-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7681] text-sm font-normal leading-normal">
                                            2024-03-22
                                        </td>
                                        <td
                                            class="table-9e70333f-58c7-40f3-bda5-8619b6ded0d2-column-360 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                                            <button
                                                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-8 px-4 bg-[#f1f2f4] text-[#121416] text-sm font-medium leading-normal w-full">
                                                <span class="truncate">Low</span>
                                            </button>
                                        </td>
                                        <td
                                            class="table-9e70333f-58c7-40f3-bda5-8619b6ded0d2-column-480 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                                            <button
                                                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-8 px-4 bg-[#f1f2f4] text-[#121416] text-sm font-medium leading-normal w-full">
                                                <span class="truncate">To Do</span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="border-t border-t-[#dde1e3]">
                                        <td
                                            class="table-9e70333f-58c7-40f3-bda5-8619b6ded0d2-column-120 h-[72px] px-4 py-2 w-[400px] text-[#121416] text-sm font-normal leading-normal">
                                            Pay Bills
                                        </td>
                                        <td
                                            class="table-9e70333f-58c7-40f3-bda5-8619b6ded0d2-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7681] text-sm font-normal leading-normal">
                                            2024-03-25
                                        </td>
                                        <td
                                            class="table-9e70333f-58c7-40f3-bda5-8619b6ded0d2-column-360 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                                            <button
                                                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-8 px-4 bg-[#f1f2f4] text-[#121416] text-sm font-medium leading-normal w-full">
                                                <span class="truncate">High</span>
                                            </button>
                                        </td>
                                        <td
                                            class="table-9e70333f-58c7-40f3-bda5-8619b6ded0d2-column-480 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                                            <button
                                                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-8 px-4 bg-[#f1f2f4] text-[#121416] text-sm font-medium leading-normal w-full">
                                                <span class="truncate">To Do</span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="border-t border-t-[#dde1e3]">
                                        <td
                                            class="table-9e70333f-58c7-40f3-bda5-8619b6ded0d2-column-120 h-[72px] px-4 py-2 w-[400px] text-[#121416] text-sm font-normal leading-normal">
                                            Gym Workout
                                        </td>
                                        <td
                                            class="table-9e70333f-58c7-40f3-bda5-8619b6ded0d2-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7681] text-sm font-normal leading-normal">
                                            2024-03-28
                                        </td>
                                        <td
                                            class="table-9e70333f-58c7-40f3-bda5-8619b6ded0d2-column-360 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                                            <button
                                                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-8 px-4 bg-[#f1f2f4] text-[#121416] text-sm font-medium leading-normal w-full">
                                                <span class="truncate">Low</span>
                                            </button>
                                        </td>
                                        <td
                                            class="table-9e70333f-58c7-40f3-bda5-8619b6ded0d2-column-480 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                                            <button
                                                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-8 px-4 bg-[#f1f2f4] text-[#121416] text-sm font-medium leading-normal w-full">
                                                <span class="truncate">Completed</span>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
