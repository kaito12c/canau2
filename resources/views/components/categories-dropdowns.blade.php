<div>
    
    <!-- Life is available only in the present moment. - Thich Nhat Hanh -->
    <x-category-dropdown>
        <x-slot name="trigger">
            <button 
            class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex"
            >
            {{ isset($currentCategory) ? ucwords($currentCategory->job_name) : '職業' }}
            <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px;"/>
            </button>
    </x-slot>
        <x-category-dropdown-item href="/sessions/?{{ http_build_query(request()->except('category', 'page')) }}">
            全て
        </x-category-dropdown-item>
        @foreach ($categories as $category )
        <x-category-dropdown-item 
            href="/sessions/?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}"
            :active="request()->is('categories/' . $category->slug)"
            >
            {{ ucwords($category->job_name) }}
        </x-category-dropdown-item>
        @endforeach
   </x-category-dropdown>
</div>