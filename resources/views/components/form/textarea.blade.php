@props(['name', 'jp' => 'あ'])
<x-form.field>
    <div class="mb-6">
        <x-form.label name="{{ $jp }}" />

        <textarea 
        name="{{ $name }}" 
        id="{{ $name }}" 
        class="rounded-md shadow-sm border-gray-300 
                focus:border-indigo-300 focus:ring 
                focus:ring-indigo-200 focus:ring-opacity-50 w-full p-2"
        cols="2"
        required
        {{ $attributes }}
        >{{ old($name) }}</textarea>
        <x-form.error name="{{ $name }}" />
    </div>
</x-form.field>