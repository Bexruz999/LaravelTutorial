<x-layout>
    <x-slot:title>
        {{ $title }}
        </x-slot>

        {{ date('Y M d') }}
        <p>первый бла-бла-бла: {{ $text1 }} <p>
            <input type="text" placeholder="{{ $text2 }}">
</x-layout>
