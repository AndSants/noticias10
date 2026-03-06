@props([
    'type' => 'success',
    'message' => '',
])

@php
$colors = [
    'success' => 'bg-green-100 border-green-400 text-green-700',
    'error' => 'bg-red-100 border-red-400 text-red-700',
];
@endphp

<div
    x-data="{ show: true }"
    x-init="setTimeout(() => show = false, 4000)"
    x-show="show"
    x-transition:enter-start="opacity-0 transform translate-y-4"
    x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100 transform translate-y-0"
    x-transition:leave-end="opacity-0 transform translate-y-4"
    class="border px-4 py-3 rounded relative mb-4 {{ $colors[$type] }}"
>

    <span class="block sm:inline">
        {{ $message }}
    </span>

    <button
        type="button"
        @click="show = false"
        class="absolute top-0 right-0 px-4 py-3"
    >
        ✕
    </button>

</div>