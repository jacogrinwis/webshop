<x-admin-layout>
    @hasanyrole('moderator|publisher|writer|editor|admin|super-admin')
        <p class="w-full h-full bg-green-600 text-white">I am a Moderator, Publisher, Writer, Editor, Admin or Super-Admin!</p>
    @else
        <p class="w-full h-full bg-red-600 text-white">I am not a Moderator, Publisher, Writer, Editor, Admin or Super-Admin!!</p>
    @endhasanyrole
</x-admin-layout>
