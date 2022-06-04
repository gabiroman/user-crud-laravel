<x-app-layout>
    <div class="rounded-lg bg-gray-100 mx-2 p-4">
        <div>
            <h1 class="text-2xl font-bold">Edit user</h1>
        </div>
        <div class="mx-auto w-1/2">
            @if ($errors->any())
                <div class="bg-red-400 rounded-lg p-3 mb-2">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('user.update', $user) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3 flex flex-col">
                    <label for="">Name</label>
                    <input
                        class="placeholder:italic placeholder:text-slate-400 bg-white w-full border border-slate-300 rounded-md py-2 pl-3 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm"
                        type="text" name="name" value="{{ $user->name }}">
                </div>
                <div class="mb-3 flex flex-col">
                    <label for="">Email</label>
                    <input
                        class="placeholder:italic placeholder:text-slate-400 bg-white w-full border border-slate-300 rounded-md py-2 pl-3 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm"
                        type="email" name="email" value="{{ $user->email }}">
                </div>
                <button class="bg-gray-700 text-gray-200 hover:bg-gray-800 px-3 py-2 rounded-lg mx-1"
                    type="submit">Submit
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
