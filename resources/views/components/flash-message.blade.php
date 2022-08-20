@if (\Session::has('success'))
    {{-- <div class="text-green-600 pt-5 pl-5">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div> --}}
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show"  class="bg-green-100 border-t-4 border-green-500 rounded-b text-green-900 px-4 py-3 shadow-md" role="alert">
        <div class="flex">
            <div class="py-1"><svg class="fill-current h-6 w-6 text-green-500 mr-4" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20">
                    <path
                        d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                </svg></div>
            <div>
                <p class="font-bold">Success!</p>
                <p class="text-sm">{!! \Session::get('success') !!}</p>
            </div>
        </div>
    </div>
@endif

@if (\Session::has('error'))
    {{-- <div class="text-green-600 pt-5 pl-5">
        <ul>
            <li>{!! \Session::get('error') !!}</li>
        </ul>
    </div> --}}
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show" class="bg-red-100 border-t-4 border-red-500 rounded-b text-red-900 px-4 py-3 shadow-md" role="alert">
        <div class="flex">
            <div class="py-1"><svg class="fill-current h-6 w-6 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20">
                    <path
                        d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                </svg></div>
            <div>
                <p class="font-bold">Error!</p>
                <p class="text-sm">{!! \Session::get('error') !!}</p>
            </div>
        </div>
    </div>
@endif

@if ($errors->any())
    {{-- <div class="text-red-600  pt-5 pl-5">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div> --}}
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 5000)" x-show="show" class="bg-red-100 border-t-4 border-red-500 rounded-b text-red-900 px-4 py-3 shadow-md" role="alert">
        <div class="flex">
            <div class="py-1"><svg class="fill-current h-6 w-6 text-red-500 mr-4"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path
                        d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                </svg></div>
            <div>
                <p class="font-bold">Error!</p>
                @foreach ($errors->all() as $error)
                    <p class="text-sm">{{ $error }}</p>
                @endforeach
            </div>
        </div>
    </div>
@endif
