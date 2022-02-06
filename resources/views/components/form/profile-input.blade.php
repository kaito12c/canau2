@props(['name'])

<x-form.field>
    <div class="mb-2">
        <x-form.label name="{{ $name }}" for="__('$name')"/>

        <input   
        name="{{ $name }}"
        id="{{ $name }}"
        class="rounded-md shadow-sm border border-gray-300 
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 
            focus:ring-opacity-50 w-full p-1"
        {{ $attributes(['value' => old($name)]) }}
        required
        >
        <x-form.error name="{{ $name }}" />
    </div>
</x-form.field>