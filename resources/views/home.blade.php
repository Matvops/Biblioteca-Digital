<x-layouts.main_layout title="home">
<x-slot:content>


<x-header title="Digital Library"/>

<section class="w-[80%] mx-auto mt-12">
    <form action="{{ route('filter') }}" method="get">
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

            <div>
                <a href="{{ route('create') }}">
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
            
            
            <x-categories_options :options="$categories" placeholder="ALL CATEGORIES"/>
                 
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
    <x-toast :message="$message" />
@enderror

@error('category')
    <x-toast :message="$message" />
@enderror

@if(session('searchFail')) 
    <x-toast :message="session('searchFail')" />
@endif

@if(session('updateFail')) 
    <x-toast :message="session('updateFail')" />
@endif


</x-slot:content>
</x-layouts.main_layout>