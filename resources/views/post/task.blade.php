<x-layout>
    <x-slot:title>
        page title
    </x-slot>

    {{-- коментария: blrjeutnrwgwgnegg --}}

    @if($age >= 18)
        <p>{!! $str !!}</p>
    @else
        <p>ctgwrhihek</p>
    @endif

    @unless($age > 100)
        <p> birnarsalar </p>
    @endunless

    <ul>
        @foreach($arr as $item)
            <li>{{$item}}</li>
        @endforeach
    </ul>

    @foreach($arr2 as $key => $item)
        <p>{{ ++$key }} => {{ pow($item, 1/2) }}</p>
    @endforeach

    <ul>
        @foreach ($users as $user)
            <li>{{ $user['name'] }} {{ $user['age'] }}</li>
        @endforeach
    </ul>

    @forelse($user2 as $user1)
        <p>{{ $user1 }}</p>
    @empty
        <p>пустой массив</p>
    @endforelse

    <ul>
        @foreach($links as $link)
            <li>
                <a href="http://{{ $link['href'] }}">{{ $link['text'] }}</a>
            </li>
        @endforeach
    </ul>

        <table>
            <tr>
                <th>№</th>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>Зарплата</th>
            </tr>
            @foreach($employes2 as $employe2)
                @if($employe2['salary'] >= 2000)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        @foreach($employe2 as $value)
                            <td>{{ $value }}</td>
                        @endforeach
                    </tr>
                @endif
            @endforeach
        </table>


</x-layout>
