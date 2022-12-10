@csrf
<div class="mb-6">
    <label for="name" class="form-label">
        Username</label>
    <input type="text" name="name" id="name" class="form-input @error('name') form-input-error @enderror"
        value="{{ old('name') }} @isset($user) {{ $user->name }} @endisset"
        placeholder="Username">
    @error('name')
        <span role="alert">
            {{ $message }}
        </span>
    @enderror
</div>
<div class="mb-6">
    <label for="email" class="form-label">
        Email</label>
    <input type="email" name="email" id="email" class="form-input @error('email') form-input-error @enderror"
        value="{{ old('email') }} @isset($user) {{ $user->email }} @endisset"
        placeholder="Email">
    @error('email')
        <span role="alert">
            {{ $message }}
        </span>
    @enderror
</div>
@isset($create)
    <div class="mb-6">
        <label for="password" class="form-label">
            Password</label>
        <input type="password" name="password" id="password"
            class="form-input @error('password') form-input-error @enderror" value="{{ old('password') }}">
        @error('name')
            <span role="alert">
                {{ $message }}
            </span>
        @enderror
    </div>
@endisset

<div class="mb-6">
    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an role</label>
    <select id="countries" name="roles"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        @foreach ($roles as $role)
            <option value="{{ $role->id }}" @isset($user) @if(in_array($role->id, $user->roles->pluck('id')->toArray())) selected @endif @endisset>{{ $role->name }}</option>
        @endforeach
    </select>
</div>

{{-- <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mb-6">
    @foreach ($roles as $role)
        <div class="grow">
            @isset($user)
                <x-admin.toggle-switch name="roles" :user="$user" :role="$role" />
            @else
                <x-admin.toggle-switch name="roles" :role="$role" />
            @endisset
        </div>
    @endforeach
</div> --}}
<div class="my-6 mt-12 flex flex-col sm:flex-row gap-4 sm:justify-end">
    <button type="submit" class="btn btn-primary w-full sm:w-auto">
        Submit
    </button>
    <a href="{{ route('admin.users.index') }}" class="btn btn-secondary w-full sm:w-auto">
        Cancel
    </a>
</div>
