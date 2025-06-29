@extends('layouts.app')

@section('title')
    Delete {{ $task->title }}
@endsection

@section('content')
    <div class="relative flex size-full min-h-screen flex-col bg-white group/design-root overflow-x-hidden"
        style='font-family: Inter, "Noto Sans", sans-serif;'>
        <div class="layout-container flex h-full grow flex-col">
            <div class="px-40 flex flex-1 justify-center py-5">
                <div class="layout-content-container flex flex-col w-[512px] max-w-[512px] py-5 max-w-[960px] flex-1">
                    <h1
                        class="text-[#111418] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 text-center pb-3 pt-5">
                        Delete Task
                    </h1>
                    <p class="text-[#111418] text-base font-normal leading-normal pb-3 pt-1 px-4 text-center">
                        Are you sure you want to delete "{{ $task->title }}"? This action cannot be undone.
                    </p>
                    <form method="POST" action="{{ route('tasks.destroy', ['task' => $task->id]) }}"
                        class="flex justify-center">
                        @csrf
                        @method('DELETE')

                        <div class="flex flex-1 gap-3 flex-wrap px-4 py-3 max-w-[480px] justify-center">
                            <a href="{{ route('tasks.show', ['id' => $task->id]) }}"
                                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#f0f2f5] text-[#111418] text-sm font-bold leading-normal tracking-[0.015em] grow">
                                <span class="truncate">Cancel</span>
                            </a>
                            <button type="submit"
                                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#0c7ff2] text-white text-sm font-bold leading-normal tracking-[0.015em] grow">
                                <span class="truncate">Delete</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
