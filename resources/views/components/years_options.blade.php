<select name="year" class="cursor-pointer bg-stone-200 w-[10%] rounded-sm shadow-black inset-shadow-2xs pl-2 text-gray-700 font-semibold">
    <option value="0" class="cursor-pointer">ALL YEARS</option>
    @foreach($options as $option)
        <option value="{{ $option->year }}" class="cursor-pointer" >{{ $option->year }}</option>
    @endforeach
</select>