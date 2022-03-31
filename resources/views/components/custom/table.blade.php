<table class="table">
    <thead>
        <tr>
            @foreach ($header as $a)
                <th>{{ $a }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        {{ $slot }}
    </tbody>
</table>
