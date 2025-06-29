@extends('layouts.app')

@section('title')
    Edit {{ $task->title }}
@endsection

@section('content')
    <div class="w-full flex justify-center">
        <form method="POST" action="{{ route('tasks.update', ['task' => $task->id]) }}" class="w-full max-w-[960px]">
            @csrf
            @method('put')

            <div class="flex flex-wrap justify-between gap-3 p-4">
                <p class="text-[#111418] tracking-light text-[32px] font-bold leading-tight w-full">
                    Edit {{ $task->title }}
                </p>
            </div>
            <div class="flex flex-col w-full max-w-[480px] items-end gap-4 px-4 py-3">
                <label for="title" class="flex flex-col w-full flex-1">
                    <p class="text-[#111418] text-base font-medium leading-normal pb-2">Title</p>

                    <input id="title" name="title" placeholder="e.g., Write a blog post"
                        class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111418] focus:outline-0 focus:ring-0 border bg-white focus:border-[#dbe0e6] h-14 placeholder:text-[#60758a] p-[15px] text-base font-normal leading-normal @error('title') border-red-400 @else border-[#dbe0e6] @enderror"
                        value="{{ old('title', $task->title) }}" />

                    @error('title')
                        <p class="text-red-400 text-base font-medium leading-normal pt-2">
                            {{ $message }}
                        </p>
                    @enderror
                </label>
            </div>
            <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                <label for="description" class="flex flex-col w-full flex-1">
                    <p class="text-[#111418] text-base font-medium leading-normal pb-2">Description</p>

                    <input id="description" name="description" placeholder="e.g., Writing a blog post"
                        class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111418] focus:outline-0 focus:ring-0 border bg-white focus:border-[#dbe0e6] h-14 placeholder:text-[#60758a] p-[15px] text-base font-normal leading-normal @error('description') border-red-400 @else border-[#dbe0e6] @enderror"
                        value="{{ old('description', $task->description) }}" />

                    @error('description')
                        <p class="text-red-400 text-base font-medium leading-normal pt-2">
                            {{ $message }}
                        </p>
                    @enderror
            </div>
            <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                <label for="longDescription" class="flex flex-col w-full flex-1">
                    <p class="text-[#111418] text-base font-medium leading-normal pb-2">Long Description</p>

                    <textarea id="longDescription" name="longDescription" placeholder="Add a long description"
                        class="form-input flex w-full min-w-0 flex-1 resize rounded-lg text-[#111418] focus:outline-0 focus:ring-0 border border-[#dbe0e6] bg-white focus:border-[#dbe0e6] min-h-36 placeholder:text-[#60758a] p-[15px] text-base font-normal leading-normal @error('longDescription') border-red-400 @else border-[#dbe0e6] @enderror">{{ old('longDescription', $task->long_description) }}</textarea>

                    @error('longDescription')
                        <p class="text-red-400 text-base font-medium leading-normal pt-2">
                            {{ $message }}
                        </p>
                    @enderror
                </label>
            </div>
            <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                <label for="status" class="flex flex-col w-full flex-1">
                    <p class="text-[#111418] text-base font-medium leading-normal pb-2">Status</p>
                    <select id="status" name="status"
                        class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111418] focus:outline-0 focus:ring-0 border bg-white focus:border-[#dbe0e6] h-14 bg-[image:--select-button-svg] placeholder:text-[#60758a] p-[15px] text-base font-normal leading-normal @error('status') border-red-400 @else border-[#dbe0e6] @enderror">
                        <option value="To Do" @selected(old('status', $task->status) === 'To Do')>To Do</option>
                        <option value="In Progress" @selected(old('status', $task->status) === 'In Progress')>In Progress</option>
                        <option value="Completed" @selected(old('status', $task->status) === 'Completed')>Completed</option>
                    </select>

                    @error('status')
                        <p class="text-red-400 text-base font-medium leading-normal pt-2">
                            {{ $message }}
                        </p>
                    @enderror
                </label>
            </div>
            <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                <label for="priority" class="flex flex-col w-full flex-1">
                    <p class="text-[#111418] text-base font-medium leading-normal pb-2">Priority</p>
                    <select id="priority" name="priority"
                        class="flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111418] focus:outline-0 focus:ring-0 border bg-white focus:border-[#dbe0e6] h-14 placeholder:text-[#60758a] p-[15px] text-base font-normal leading-normal @error('priority') border-red-400 @else border-[#dbe0e6] @enderror">
                        <option value="Low" @selected(old('priority', $task->priority) === 'Low')>Low</option>
                        <option value="Medium" @selected(old('priority', $task->priority) === 'Medium')>Medium</option>
                        <option value="High" @selected(old('priority', $task->priority) === 'High')>High</option>
                    </select>
                </label>
            </div>
            <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                <label for="completed" class="flex flex-col w-full flex-1">
                    <p class="text-custom-gray text-base font-medium leading-normal pb-2">Completed</p>
                    <input id="completed" name="completed" type="checkbox" id="newsletter" name="newsletter"
                        class="w-[18px] h-[18px] accent-custom-gray cursor-pointer @error('completed') outline-red-400 @else outline-[#dbe0e6] @enderror"
                        @checked(old('completed', $task->completed))>

                    @error('completed')
                        <p class="text-red-400 text-base font-medium leading-normal pt-2">
                            {{ $message }}
                        </p>
                    @enderror
                </label>
            </div>
            <div>
                <div class="flex flex-1 gap-3 flex-wrap px-4 py-3 justify-end">
                    <a href="{{ route('tasks.show', ['id' => $task->id]) }}"
                        class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#f0f2f5] text-[#111418] text-sm font-bold leading-normal tracking-[0.015em]">
                        <span class="truncate">Cancel</span>
                    </a>
                    <button type="submit"
                        class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#0c7ff2] text-white text-sm font-bold leading-normal tracking-[0.015em]">
                        <span class="truncate">Update task</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
