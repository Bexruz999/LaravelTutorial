<x-layout>
    <x-slot:title>
        {{ 'location' }}
    </x-slot>
        <p>Country: {{ $country ?? 'Russia'}}</p>
        <p>city: {{ $city ?? 'Moskva'}}</p>
        <p>Year: {{ $year ?? date('Y')}}</p>
        <p>Month: {{ $month ?? date('M')}}</p>
        <p>Day: {{ $day ?? date('d')}}</p>
</x-layout>
