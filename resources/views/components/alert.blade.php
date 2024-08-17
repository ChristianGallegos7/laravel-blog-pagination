@props(['type' => 'info', 'title' => ''])

@php
    $alertStyles = match ($type) {
        'success' => 'p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400',
        'error' => 'p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400',
        'warning' => 'p-4 mb-4 text-sm text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-400',
        default => 'p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400',
    };
@endphp

<div class="{{ $alertStyles }}" role="alert">
    <span class="font-medium">{{ $title ?: ucfirst($type) . ' Alert' }}</span> {{ $slot }}
</div>
