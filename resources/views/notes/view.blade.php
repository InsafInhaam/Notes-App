<x-guest-layout>
    <div class="flex justify-between">
        <h2 class="text-xl font-semibold text-gray-500 leading-right">
            {{ $note->title }}
        </div>
    </div>
    <p class="mt-4 mb-12">{{ $note->body }}</p>
    <div class="flex items-center justify-end mt-12 mb-2 space-x-2 ">
        <h3 class="mr-2 text-sm">Sent from {{ $user->name }}</h3>
        <livewire:heartreact :note="$note" />
    </div>
</x-guest-layout>