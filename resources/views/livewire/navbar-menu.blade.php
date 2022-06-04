<div>
    <nav class="bg-gray-50 border-b border-gray-100 mx-auto px-2 sm:px-2 lg:px-2 max-w-full">
        <div class="flex justify-between text-gray-600">
            <ul class="list-none flex">
                @livewire('li-menu', ['title' => 'Dashboard', 'url' => route('dashboard')])
                @livewire('li-menu', ['title' => 'Users', 'url' => route('user.index')])
            </ul>
            <ul class="list-none flex">
                @livewire('li-option-nav-menu', ['title' => 'fa-solid fa-user', 'description' => Auth::user()->name])
                @livewire('li-option-nav-menu', ['title' => 'fa-solid fa-gear', 'description' => ''])
                @livewire('li-option-nav-menu', ['title' => 'fa-solid fa-bell', 'description' => ''])
                <li class="li-option-nav-menu">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <a class="nav-link mx-1 p-2 rounded-lg hover:bg-red-300" href="{{ route('logout') }}"
                            role="button" onclick="event.preventDefault();
                    this.closest('form').submit();"><i class="fa-solid fa-right-from-bracket"></i>
                        </a>
                    </form>
                </li>
            </ul>
        </div>


    </nav>
</div>
