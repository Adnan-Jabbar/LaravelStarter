<x-app-layout>
    <div>
        <main cla`s="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-8">

                {{-- @role('admin')
                    <h3 class="text-gray-700 text-3xl font-medium">Admin Dashboard</h3>
                @endrole

                @role('writer')
                    <h3 class="text-gray-700 text-3xl font-medium">Writer Dashboard</h3>
                @endrole --}}

                <h3 class="text-gray-700 text-3xl font-medium">Welcome : {{ auth()->user()->name }}</h3>

                <p>Role :
                    <b>
                        @foreach (auth()->user()->roles as $role)
                            {{ $role->name }}
                        @endforeach
                    </b>
                </p>

            </div>
        </main>
    </div>
    </div>
</x-app-layout>
