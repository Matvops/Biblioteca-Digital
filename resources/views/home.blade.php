<x-layouts.main_layout title="home">
<x-slot:content>

<x-header title="Digital Library"/>

<section class="w-[80%] mx-auto mt-12">
    <form action="" method="get">
        @csrf
        <div class="flex text-center">

            <div class="mr-auto">
                <button type="submit" 
                    class="text-white text-3xl font-semibold main-font rounded-sm shadow-md shadow-zinc-400 px-2 py-3
                        bg-blue-600 cursor-pointer hover:shadow-lg hover:shadow-zinc-500 hover:px-2.5 transition-all duration-100"
                >
                SEARCH
                </button>
            </div>

            <div class="">
                <a href="#">
                    <button type="button" 
                        class="text-white text-3xl font-semibold main-font rounded-sm shadow-md shadow-zinc-400 px-2 py-3
                            bg-blue-600 cursor-pointer hover:shadow-lg hover:shadow-zinc-500 hover:px-2.5 transition-all duration-100"
                    >
                        CREATE
                    </button>
                </a>
            </div>
        </div>
       
        <div class="flex justify-between my-[3%] h-14">
            <input type="text" name="book" id="search_book" placeholder="INSERT TITLE" autofocus
                class="shrink-2 bg-stone-200 rounded-sm px-1 shadow-black inset-shadow-2xs text-xl font-semibold w-[70%] 
                py-3 outline-0 px-2 border-stone-300 focus:border-1 focus:px-3.5 transition-all duration-155">
            
            <x-categories_options :options="$categories" />

            <x-years_options :options="$years" />
        </div>
    </form>

    <section class="flex flex-wrap justify-between content-around gap-8">
        @foreach($books as $book)
            <x-card_book :book="$book" />
        @endforeach
    </section>
</section>

@error('year')
    <div id="toast-danger" class="apaga-toast absolute top-5 right-5 flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow-sm dark:text-gray-400 dark:bg-gray-800" role="alert">
        <div class="inline-flex items-center justify-center shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z"/>
            </svg>
            <span class="sr-only">Error</span>
        </div>
        <div class="ms-3 text-sm font-normal">{{ $message }}</div>
    </div>
@enderror

@error('category')
    <div id="toast-danger" class="apaga-toast absolute top-5 right-5 flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow-sm dark:text-gray-400 dark:bg-gray-800" role="alert">
        <div class="inline-flex items-center justify-center shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z"/>
            </svg>
            <span class="sr-only">Error</span>
        </div>
        <div class="ms-3 text-sm font-normal">{{ $message }}</div>
    </div>
@enderror


@if(session('searchFail')) 
    <div id="toast-danger" class="apaga-toast absolute top-5 right-5 flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow-sm dark:text-gray-400 dark:bg-gray-800" role="alert">
        <div class="inline-flex items-center justify-center shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z"/>
            </svg>
            <span class="sr-only">Error</span>
        </div>
        <div class="ms-3 text-sm font-normal">{{ session('searchFail') }}</div>
    </div>
@endif


</x-slot:content>
</x-layouts.main_layout>