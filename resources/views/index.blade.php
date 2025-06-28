@extends('layouts.app')

@section('title')
    Task List App - Main Page
@endsection

@section('content')
    <div class="px-4 flex flex-1 justify-center py-5">
        <div class="layout-content-container flex flex-col max-w-[1280px] flex-1">
            @session('status')
                <div
                    class="max-w-md mx-auto bg-white rounded-lg shadow-lg border-l-4 border-green-500 p-4 mb-4 transform transition-all duration-300 hover:scale-105">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <i class="fas fa-check-circle text-green-500 text-xl"></i>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900">
                                {{ $value }}
                            </p>
                        </div>
                        <div class="ml-auto pl-3">
                            <button class="text-gray-400 hover:text-gray-600 transition-colors duration-200 cursor-pointer"
                                onclick="this.parentElement.parentElement.parentElement.style.display='none'">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </div>
            @endsession

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

                <a href="/tasks/create"
                    class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-8 px-4 bg-[#f1f2f4] text-[#121416] text-sm font-medium leading-normal transition-all duration-200 hover:bg-[#e8eaed] active:scale-95">
                    <span class="truncate">New Task</span>
                </a>
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
                        <table class="block overflow-auto w-full">
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
                                        class="table-9e70333f-58c7-40f3-bda5-8619b6ded0d2-column-240 px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">
                                        Updated At
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
                                            class="table-9e70333f-58c7-40f3-bda5-8619b6ded0d2-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7681] text-sm font-normal leading-normal">
                                            {{ $task->updated_at->format('Y-m-d H:i:s') }}
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
@endsection
