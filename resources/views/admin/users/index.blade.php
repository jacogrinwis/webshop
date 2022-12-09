<x-admin-layout>
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-bold dark:text-white">
            Users
        </h2>
        <a href="{{ route('admin.users.create') }}"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            role="button">Create</a>
    </div>

    <div class="overflow-x-auto relative shadow-sm sm:rounded-md mb-6">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        ID
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Email
                    </th>
                    <th scope="col" class="py-3 px-6">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="py-4 px-6">
                            {{ $user->id }}
                        </th>
                        <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $user->name }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $user->email }}
                        </td>
                        <td class="py-4 px-6 text-right whitespace-nowrap">
                            <a href="{{ route('admin.users.edit', $user->id) }}"
                                class="font-medium uppercase text-blue-600 dark:text-blue-500 hover:underline"
                                role="button">Edit</a>
                            <button type="button"
                                class="font-medium uppercase text-red-600 dark:text-red-500 hover:underline"
                                onclick="event.preventDefault(); document.getElementById('delete-user-form-{{ $user->id }}')">
                                Delete
                            </button>
                            <form id="delete-user-form-{{ $user->id }}"
                                action="{{ 'admin.user.destroy', $user->id }}" method="POST" class="hidden">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $users->links('vendor.pagination.tailwind') }}

</x-admin-layout>
