@php($customize = tallstackui_personalization('wrapper.input', $customization()))

<div @if ($alpine) x-data="{!! $alpine !!}" @endif>
    @if ($label)
        <x-label :$label :$error/>
    @endif
    <div @class($customize['base']) @if ($password) x-data="{ show : false }" @endif>
        {!! $slot !!}
    </div>
    @if ($hint && !$error)
        <x-hint :$hint/>
    @endif
    @if ($validate)
        <x-error :$computed :$error/>
    @endif
</div>