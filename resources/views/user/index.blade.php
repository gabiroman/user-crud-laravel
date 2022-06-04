<x-app-layout>
    <div class="rounded-lg bg-gray-100 mx-2 p-4">
        <div>
            <h1 class="text-2xl font-bold">Users</h1>
        </div>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="p-4 flex justify-between">
                <div class="relative mt-1">
                    <input type="text" id="table-search"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-2.5"
                        placeholder="Search for items">
                </div>
                <a href="{{ route('user.create') }}"
                    class="bg-gray-700 text-gray-200 hover:bg-gray-800 rounded-lg text-sm px-2 flex items-center">
                    <i class="fa-solid fa-user-plus m-auto mr-2"></i>
                    Add user
                </a>
            </div>
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="p-4">
                            <div class="flex items-center">
                                <input id="checkbox-all-search" type="checkbox"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                                <label for="checkbox-all-search" class="sr-only">checkbox</label>
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            #
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Roles
                        </th>
                        <th scope="col" class="px-6 py-3">
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <td class="w-4 p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-table-search-1" type="checkbox"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">
                                {{ $user->id }}
                            </th>
                            <td class="px-6 py-2">
                                {{ $user->name }}
                            </td>
                            <td class="px-6 py-2">
                                {{ $user->email }}
                            </td>
                            <td class="px-6 py-2">
                                $2999
                            </td>
                            <td class="px-6 py-2 text-right flex justify-end">
                                <form action="{{ route('user.destroy', $user) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="hover:text-gray-700 hover:bg-red-300 px-3 py-2 rounded-lg mx-1"
                                        type="submit">
                                        <i class="fa-solid fa-user-slash"></i>
                                    </button>
                                </form>

                                <a href="{{ route('user.edit', $user) }}"
                                    class="hover:text-gray-700 hover:bg-blue-300 px-3 py-2 rounded-lg mx-1">
                                    <i class="fa-solid fa-user-pen"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
