<div class="editor">
    {{ $slot }}
</div>

@pushOnce('styles')
    @vite('resources/css/vendors/ckeditor.css')
@endPushOnce

@pushOnce('vendors')
    @vite('resources/js/vendors/ckeditor/balloon.js')
@endPushOnce

@pushOnce('scripts')
    @vite('resources/js/components/balloon-editor.js')
@endPushOnce
