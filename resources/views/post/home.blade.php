<x-layout>
     <x-slot:title>
         vyvibnbn
     </x-slot>
    <p>имя: {{ $user['name'] }}</p>
    <p>возрасть: {{ $user['age'] }}</p>
    <p>зарплата в месяц {{ $user['salary'] }}$</p>
</x-layout>

