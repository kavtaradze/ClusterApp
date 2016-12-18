@extends("layout")

@section('content')
    <a href="/" class="btn btn-primary">Main Page</a>

    <h1>არქივის სია</h1>
    @foreach($notes as $note)
        <div class="note bg-{{$note->color}}">
            {{$note->description}}
        </div>
    @endforeach
@endsection
