@props(['name' =>'$supporters->name', 'label' => 'あ'])

<x-form.field>
    <div class="mb-3">
        <x-form.label name="{{ $label }}" for="__('$name')"/>

        <input   
        name="{{ $name }}"
        id="{{ $name }}"
        class="rounded-md shadow-sm border border-gray-300 
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 
            focus:ring-opacity-50 w-full p-1"
        {{ $attributes(['value' => old($name)]) }}
        >
        <x-form.error name="{{ $name }}" />
    </div>
</x-form.field>