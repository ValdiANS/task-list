@extends('layouts.app')

@section('title')
    Task List App - Main Page
@endsection

@section('content')
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
@endsection
