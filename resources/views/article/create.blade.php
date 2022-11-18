<h1>create new article</h1>

<form action="{{route('Articles.store')}}" method="POST">
    @csrf        

    <input type="text" name="title" placeholder="enter the title">
    <input type="textarea" name="texte" placeholder="enter the description">
    <input type="text" name="link" placeholder="enter the link">
    <button type="submit">Add</button>

</form>