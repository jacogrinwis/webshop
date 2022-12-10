<x-admin-layout>
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-bold dark:text-white">
            Users
        </h2>
        <a href="{{ route('admin.users.create') }}" class="btn btn-primary" role="button">Create</a>
    </div>
    @if (session()->has('message'))
        {{-- <div class="fixed bottom-6 right-6 left-4 z-30 alert alert-success text-center font-bold" x-data="{ show: true }"
            x-show="show" x-init="setTimeout(() => show = false, 3000)" role="alert">
            {{ session()->get('message') }}
        </div> --}}
        <div id="toast-danger" x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)"
            class="fixed top-4 right-4 flex items-center p-4 mb-4 w-full max-w-xs text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800"
            role="alert">
            <div
                class="inline-flex flex-shrink-0 justify-center items-center w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Error icon</span>
            </div>
            <div class="ml-3 text-sm font-normal">Item has been deleted.</div>
            <button type="button"
                class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                data-dismiss-target="#toast-danger" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    @endif

    <div class="table-wrapper custom-scrollbar-rounded-thin mb-4">
        <table>
            <thead class="table-head">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->roles->pluck('name')->first() }}</td>
                        <td>
                            <div class="flex justify-end gap-2">
                                <a href="{{ route('admin.users.show', $user->id) }}" target="_blank"
                                    class="btn btn-xs btn-green bg-green-400 dark:bg-green-900 dark:text-white">Show</a>
                                <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-xs btn-primary bg-blue-400 dark:bg-blue-900 dark:text-white"
                                    role="button">
                                    Edit
                                </a>
                                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST"
                                    class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="confirm('Are you sure you want to delete this user?')"
                                        type="submit" class="btn btn-xs btn-red bg-red-400 dark:bg-red-900 dark:text-white"> Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $users->links('vendor.pagination.my-tailwind') }}

</x-admin-layout>
