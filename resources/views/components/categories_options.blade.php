<select name="category" class="cursor-pointer bg-stone-200 pr-6 text-center rounded-sm shadow-black inset-shadow-2xs text-gray-700 font-semibold">
    <option value="0" class="cursor-pointer">ALL CATEGORIES</option>
    @foreach($options as $option)
        <option value="{{ $option->id }}" class="cursor-pointer" >{{ $option->name }}</option>
    @endforeach
</select>