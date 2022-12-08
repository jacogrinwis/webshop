<x-admin-layout>
    @hasanyrole('moderator|publisher|writer|editor|admin|super-admin')
        <p class="w-full h-full p-4 rounded-md bg-green-200 text-green-900">I am a Moderator, Publisher, Writer, Editor, Admin or Super-Admin!</p>
    @else
        <p class="w-full h-full p-4 rounded-md bg-red-300 text-red-900">I am not a Moderator, Publisher, Writer, Editor, Admin or Super-Admin!!</p>
    @endhasanyrole
</x-admin-layout>
