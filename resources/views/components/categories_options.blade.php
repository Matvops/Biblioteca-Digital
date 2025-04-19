<select name="category" required class="box-border cursor-pointer bg-stone-200 pr-6 text-center rounded-sm shadow-black inset-shadow-2xs text-gray-700 font-semibold">
    <option value="0" class="cursor-pointer">{{ $placeholder }}</option>
    @foreach($options as $option)
        <option value="{{ $option->id }}" class="cursor-pointer" >{{ $option->name }}</option>
    @endforeach
</select>