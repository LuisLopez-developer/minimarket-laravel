@props(['id' => null, 'maxWidth' => null])

<x-modal-flow :maxWidth="$maxWidth">
    <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
        {{ $header }}
    </div>

    {{ $slot }}
</x-modal-flow>