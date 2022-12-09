<x-admin-layout>
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-bold dark:text-white">
            Users
        </h2>
        <a href="{{ route('admin.users.create') }}" class="btn btn-primary" role="button">Create</a>
    </div>
    @if (session()->has('message'))
        <div class="alert alert-success text-center font-bold" x-data="{ show: true }" x-show="show"
            x-init="setTimeout(() => show = false, 3000)" role="alert">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="table-wrapper custom-scrollbar-rounded-thin mb-4">
        <table>
            <thead class="table-head">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
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
                        <td>
                            <div class="flex justify-end gap-4">
                                <a href="{{ route('admin.users.edit', $user->id) }}" class="text-link-primary uppercase"
                                    role="button">
                                    Edit
                                </a>
                                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST"
                                    class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-link-red uppercase"> Delete
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
