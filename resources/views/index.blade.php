@extends("layout")

@section('content')
    hello world!
    <button class="btn btn-primary">I'm Button</button>
    <!--aa me vaketeb? es boots ragacaa? bootstrap daikide manmetn rato daikido barem iswavli  -->
    <form  method="post" action="/create">
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

    <h2>ჩანაწერები</h2>
    @foreach($notes as $note)
        <div class="alert alert-{{$note->color}}">
            {{$note->description}}
        </div>
    @endforeach

@endsection

<!-- gverdi arqivistvis -->
<!-- mtavar gverdze dasrulebulebi da mimdinareebi gamoiyos -->
<!-- linkebi titoeuli chanaweristvis: arqivi, dasruleba, washla -->
<!-- linkebi: mtavarze arqivshi gadasasvleli da piriqit -->
