<div class="h-[300px] w-[40%] min-w-[300px] roundend-sm bg-white inset-shadow-stone-500/25 inset-shadow-sm  p-4 
    flex gap-4">
    <div class="w-[200px] bg-blue-300 rounded-sm shadow-black shadow-sm">
        <img src="http://localhost/{{ $book->image }}" alt="{{ $book->image }}" class="h-full w-full rounded-sm">
    </div>  
    <div class="flex flex-col flex-1">
        
        <div class="flex-1">
            <h2 class="font-semibold text-3xl mb-6">{{ $book->title }}</h2>
            <h3 class="text-2xl">{{ $book->name }}</h3>
            <h3 class="text-2xl">{{ $book->year }}</h3>
        </div>

        <div class="flex gap-6">
            <a href="#" class="text-blue-400 text-lg hover:text-blue-500 text-shadow-stone-200 hover:text-shadow-md transition-all duration-100">
                {{$book->readed ?  'Lido' : 'Ler'}}
            </a>
            <a href="#" class="text-blue-400 text-lg hover:text-blue-500 text-shadow-stone-200 hover:text-shadow-md  transition-all duration-100">Editar</a>
        </div>
    </div>
</div>