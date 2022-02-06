
<x-app-layout>
    <x-slot class="container">
        <div class="row justify-content-center">

            <!-- left -->
            {{-- @include('admin.menu') --}}

            <div class="col-md-10">
                <div class="card">
                    <div class="card-header"><i class="fas fa-id-card"></i> カレンダー共有</div>
                    <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                        </div>
                    @endif

                        <div id='external-events'>
                            <p><strong>先生</strong></p>

                                @foreach ( $sessions as $session )
                    　　　　        <div class="fc-event">{{ $session->supporter->name }}<span style="opacity:0;">:{{ $d->id }}</span></div>
                                @endforeach

                            <p style="display:none;">
                    　　　　    <input type='checkbox' id='drop-remove' />
                            <label for='drop-remove'>remove after drop</label>
                            </p>
                        </div>

                        <div id='calendar-container'>
                        <div id='calendar'></div>
                    </div>
                </div><!-- end card-body -->
            </div><!-- end card -->
            </div>
        </div>
    </x-slot>
</x-app-layout>