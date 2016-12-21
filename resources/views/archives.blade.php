@extends("layout")

@section('content')
    <a href="/" class="btn btn-primary">Main Page</a>

    <h1>არქივის სია</h1>
    <h2>მიმდინარე</h2>
    @forelse($current as $note)
        <div class="note bg-{{$note->color}}">
            {{$note->description}}
            <br>
            <br>
            <a href="/complete/{{$note->id}}" class="btn btn-default btn-sm">დასრულება</a>
            <a href="/present/{{$note->id}}" class="btn btn-default btn-sm">არქივის საწინააღმდეგო :D</a>
            <a href="/delete/{{$note->id}}" class="btn btn-default btn-sm">წაშლა</a>
        </div>
    @empty
        <div class="alert alert-danger">
            ჩანაწერები ვერ მოიძებნა
        </div>
    @endforelse

    <h2>დასრულებულები</h2>

    @forelse($completed as $note)
        <div class="note bg-{{$note->color}}">
            {{$note->description}}
            <br>
            <br>
            <a href="/current/{{$note->id}}" class="btn btn-default btn-sm">მიმდინარე</a>
            <a href="/present/{{$note->id}}" class="btn btn-default btn-sm">არქივის საწინააღმდეგო :D</a>
            <a href="/delete/{{$note->id}}" class="btn btn-default btn-sm">წაშლა</a>
        </div>
    @empty
        <div class="alert alert-danger">
            ჩანაწერები ვერ მოიძებნა
        </div>
    @endforelse
@endsection
