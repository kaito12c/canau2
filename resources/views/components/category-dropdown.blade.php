@props(['trigger'])
    <div x-data="{show: false}" @click.away="show = false">
        {{-- トリガー --}}
        <div @click="show = ! show">
            {{ $trigger }}
        </div>
        {{-- 次のページへ飛ぶリンク --}}
        <div x-show="show" class="py-2 absolute bg-gray0100 w-full mt-2 rounded-xl z-50 overflow-auto  max-h-52" style="display: none">
            {{ $slot }}
        </div>
    </div>
</div> 