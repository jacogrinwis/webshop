<x-admin-layout>
    <div class="flex justify-between items-center mb-10">
        <h2 class="text-2xl font-bold dark:text-white">
            Edit user
        </h2>
    </div>
    <form method="POST" action="{{ route('admin.users.update', $user->id) }}">
        @method('PATCH')
        <x-admin.users.form :user="$user" :roles="$roles" />
    </form>
</x-admin-layout>
