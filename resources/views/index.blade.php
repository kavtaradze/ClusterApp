@extends("layout")

@section('content')
    <a href="archives" class="btn btn-primary">Archives</a>
    <!--aa me vaketeb? es boots ragacaa? bootstrap daikide manmetn rato daikido barem iswavli  -->
    <form  method="post" action="create">
        {{csrf_field()}}
        <label for="description">აღწერა</label>
        <textarea class="form-control" rows="3" name="description" id="description"></textarea>

        <label for="color">ფერი</label>
        <select class="form-control" id="color" name="color">
            <option value="default">თეთრი</option>
            <option value="primary">ლურჯი</option>
            <option value="success">მწვანე</option>
            <option value="info">ცისფერი</option>
            <option value="warning">ყვითელი</option>
            <option value="danger">წითელი</option>
        </select>
        <button type="submit" class="btn btn-default">შენახვა</button>
    </form>

    <h2>მიმდინარე</h2>
    @forelse($current as $note)
        <div class="note bg-{{$note->color}}">
            {{$note->description}}
            <br>
            <br>
            <a href="/complete/{{$note->id}}" class="btn btn-default btn-sm">დასრულება</a>
            <a href="/archive/{{$note->id}}" class="btn btn-default btn-sm">არქივი</a>
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
            <a href="/archive/{{$note->id}}" class="btn btn-default btn-sm">არქივი</a>
            <a href="/delete/{{$note->id}}" class="btn btn-default btn-sm">წაშლა</a>
        </div>
    @empty
        <div class="alert alert-danger">
            ჩანაწერები ვერ მოიძებნა
        </div>
    @endforelse

@endsection

<!-- gverdi arqivistvis -->
<!-- mtavar gverdze dasrulebulebi da mimdinareebi gamoiyos -->
<!-- linkebi titoeuli chanaweristvis: arqivi, dasruleba, washla -->
<!-- linkebi: mtavarze arqivshi gadasasvleli da piriqit -->
