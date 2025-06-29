@extends('layouts.app')

@section('title')
    {{ $task->title }} Detail's
@endsection

@section('content')
    <div class="px-8 flex flex-1 justify-center py-5">
        <div class="layout-content-container flex flex-col w-[512px] max-w-[512px] py-5 max-w-[960px] flex-1">
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

            <div class="flex flex-wrap gap-2 p-4">
                <a href="{{ route('tasks.index') }}"
                    class="text-[#60758a] text-base font-medium leading-normal hover:underline">
                    Tasks
                </a>
                <span class="text-[#60758a] text-base font-medium leading-normal">/</span>
                <span class="text-[#111418] text-base font-medium leading-normal">{{ $task->title }}</span>
            </div>
            <h2 class="text-[#111418] tracking-light text-[28px] font-bold leading-tight px-4 text-left pb-3 pt-5">
                {{ $task->title }}
            </h2>
            <p class="px-4 mb-4">{{ $task->description }}</p>
            <div class="flex max-w-full flex-wrap items-end gap-4 px-4 py-3">
                <label class="flex flex-col min-w-40 flex-1">
                    <p class="text-[#111418] text-base font-medium leading-normal pb-2">Description</p>
                    <textarea disabled
                        class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111418] focus:outline-0 focus:ring-0 border border-[#dbe0e6] bg-white focus:border-[#dbe0e6] field-sizing-content placeholder:text-[#60758a] p-[15px] text-base font-normal leading-normal">{{ $task->long_description }}</textarea>
                </label>
            </div>
            <h3 class="text-[#111418] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">
                Details
            </h3>
            <div class="p-4 grid grid-cols-[20%_1fr] gap-x-6">
                <div class="col-span-2 grid grid-cols-subgrid border-t border-t-[#dbe0e6] py-5">
                    <p class="text-[#60758a] text-sm font-normal leading-normal">Created At</p>
                    <p class="text-[#111418] text-sm font-normal leading-normal">
                        {{ $task->created_at->format('Y-m-d H:i:s') }}
                    </p>
                </div>
                <div class="col-span-2 grid grid-cols-subgrid border-t border-t-[#dbe0e6] py-5">
                    <p class="text-[#60758a] text-sm font-normal leading-normal">Updated At</p>
                    <p class="text-[#111418] text-sm font-normal leading-normal">
                        {{ $task->updated_at->format('Y-m-d H:i:s') }}
                    </p>
                </div>
                <div class="col-span-2 grid grid-cols-subgrid border-t border-t-[#dbe0e6] py-5">
                    <p class="text-[#60758a] text-sm font-normal leading-normal">Priority</p>
                    <p class="text-[#111418] text-sm font-normal leading-normal">{{ $task->priority }}</p>
                </div>
                <div class="col-span-2 grid grid-cols-subgrid border-t border-t-[#dbe0e6] py-5">
                    <p class="text-[#60758a] text-sm font-normal leading-normal">Status</p>
                    <p class="text-[#111418] text-sm font-normal leading-normal">{{ $task->status }}</p>
                </div>
                <div class="col-span-2 grid grid-cols-subgrid border-t border-t-[#dbe0e6] py-5">
                    <p class="text-[#60758a] text-sm font-normal leading-normal">Completed</p>
                    <p class="text-[#111418] text-sm font-normal leading-normal">
                        {{ $task->completed ? 'TRUE' : 'FALSE' }}
                    </p>
                </div>
            </div>

            <div class="flex gap-3 justify-end">
                <a href="{{ route('tasks.delete-page', ['task' => $task->id]) }}"
                    class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-red-500 text-white text-sm font-bold leading-normal tracking-[0.015em]">
                    <span class="truncate">Delete task</span>
                </a>
                <a href="{{ route('tasks.edit', ['task' => $task->id]) }}"
                    class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#0c7ff2] text-white text-sm font-bold leading-normal tracking-[0.015em]">
                    <span class="truncate">Edit task</span>
                </a>
            </div>
        </div>
    </div>
@endsection
