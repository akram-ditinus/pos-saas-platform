@props(['as' => 'span', 'content' => null])

@if (substr($as, 0, 2) == 'x-')
    <x-dynamic-component
        title="{{ $content }}"
        {{ $attributes->class(merge(['tooltip cursor-pointer', $attributes->whereStartsWith('class')->first()]))->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
        :component="substr($as, 2)"
    >{{ $slot }}</x-dynamic-component>
@else
    <{{ $as }}
        title="{{ $content }}"
        {{ $attributes->class(merge(['tooltip cursor-pointer', $attributes->whereStartsWith('class')->first()]))->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
    >{{ $slot }}</{{ $as }}>
@endif

@pushOnce('styles')
    @vite('resources/css/vendors/tippy.css')
@endPushOnce

@pushOnce('vendors')
    @vite('resources/js/vendors/tippy.js')
@endPushOnce

@pushOnce('scripts')
    @vite('resources/js/components/base/tippy.js')
@endPushOnce
