
<style>
    * {
        font-family: sans-serif;
    }
</style>

@foreach($data as $field => $value)
    @if(is_array($value))
        <p>
            <b>{{ ucfirst($field) }}</b><br>

            @foreach($value as $subValue)
                    {{ nl2br($subValue) }}
            @endforeach
        </p>
    @else
        <p>
            <b>{{ ucfirst($field) }}</b><br>
            {!! nl2br($value) !!}
        </p>
    @endif
@endforeach
