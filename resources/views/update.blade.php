<x-layouts.main_layout title="UPDATE">
    <x-slot:content>

        <x-header title="UPDATE" />

        <main>
            <form enctype="multipart/form-data" action="{{ route('createSubmit') }}" method="post" class="flex bg-white w-[50vw] min-w-[500px] m-auto my-[3%] px-4 py-6 rounded-sm shadow-stone-300 shadow-xs">
                @csrf
                <div>
                    <div class=my-12>
                        <label for="title" class="block uppercase font-bold text-5xl main-font">Title</label>
                        <div class="flex gap-2 mt-5">
                            <div class="w-172 h-12">
                                <input type="text" name="title" id="title" placeholder="INSERT TITLE" value="{{ $book->title }}" required 
                                    class="bg-stone-200 rounded-sm px-1 shadow-black inset-shadow-2xs text-xl font-semibold 
                                    py-2 outline-0 px-2 border-stone-300 focus:border-1 focus:px-3.5 transition-all duration-155 w-full">
                            </div>
                            <x-categories_options :options="$categories" placeholder="SELECT"/>
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-between">
                            <label for="author" class="uppercase font-bold text-5xl main-font">Author</label>
                            <label for="year" class="uppercase font-bold text-5xl main-font">Year</label>
                        </div>
                        <div class="flex gap-2 mt-5">
                            <div class="grow-1 w-172 h-12">
                                <input type="text" name="author" id="author" placeholder="NAME" value="{{ $book->name }}" required
                                    class="bg-stone-200 rounded-sm px-1 shadow-black inset-shadow-2xs text-xl font-semibold 
                                    py-2 outline-0 px-2 border-stone-300 focus:border-1 focus:px-3.5 transition-all duration-150 w-full">
                            </div>

                            <div class="h-12 w-32">
                                <input type="text" name="year" id="year" placeholder="INSERT YEAR" value="{{ $book->year }}" required value="{{ date('Y') }}"
                                    class="bg-stone-200 rounded-sm px-1 shadow-black inset-shadow-2xs text-xl font-semibold 
                                    py-2 outline-0 px-2 border-stone-300 focus:border-1 transition-all duration-200 w-full" />
                            </div>
                        </div>
                    </div>

                    <div class="my-12 w-full h-12">
                        <label for="author" class="uppercase font-bold text-5xl main-font">LINK</label>
                        <input type="text" name="url" id="url" placeholder="INSERT A URL" value="{{ $book->url }}" required
                            class="bg-stone-200 mt-5 rounded-sm px-1 shadow-black inset-shadow-2xs text-xl font-semibold 
                            py-2 outline-0 px-2 border-stone-300 focus:border-1 focus:px-3.5 transition-all duration-150 w-full" />
                    </div>

                    
                   
                    <button type="button" 
                        class="mt-12 text-white text-3xl font-semibold main-font rounded-sm shadow-md shadow-zinc-400 px-2 py-3
                            bg-stone-400 cursor-pointer hover:shadow-lg hover:shadow-zinc-500 hover:px-2.5 transition-all duration-100"
                    >
                        <label class="cursor-pointer">
                            <input type="file" name="image" id="image" hidden> Image
                        </label>
                    </button>
                   
                    
                    <div class="h-12 my-12 flex justify-between">
                        <div class="mr-auto">
                            <a href="{{ route('home') }}">
                                <button type="button" 
                                    class="text-white text-3xl font-semibold main-font rounded-sm shadow-md shadow-zinc-400 px-2 py-3
                                        bg-red-600 cursor-pointer hover:shadow-lg hover:shadow-zinc-500 hover:px-2.5 transition-all duration-100"
                                >
                                CANCEL
                                </button>
                            </a>
                        </div>

                        <div>
                            <button type="submit" 
                                class="text-white text-3xl font-semibold main-font rounded-sm shadow-md shadow-zinc-400 px-2 py-3
                                    bg-green-600 cursor-pointer hover:shadow-lg hover:shadow-zinc-500 hover:px-2.5 transition-all duration-100"
                            >
                            CONFIRM
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </main>

        @error('year')
            <x-toast :message="$message" />
        @enderror

        @error('category')
            <x-toast :message="$message" />
        @enderror

        @error('title')
            <x-toast :message="$message" />
        @enderror

        @error('author')
            <x-toast :message="$message" />
        @enderror

        @error('image')
            <x-toast :message="$message" />
        @enderror
    </x-slot:content>
</x-layouts.main_layout>