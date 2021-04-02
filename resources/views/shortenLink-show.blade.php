<h1>Show Short URL</h1>
<table class="table table-striped">
    <thead>
    <tr>
        <th>Short URL</th>
        <th>Long URL</th>
        <th>Time created</th>
    </tr>
    </thead>
    <tbody>
    @if(!$short_links->isEmpty())
        @foreach($short_links as $index=>$short_link)
            <tr>
{{--                <td>{{$index+1}}</td>--}}
                <td>{{$short_link->shortURL}}</td>
                <td>{{$short_link->longURL}}</td>
                <td>{{$short_link->create_at}}</td>
                <td>{{$short_link->update_at}}</td>
                <td>
                </td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>
<p>
    <a href="/new"><button>Create Short URL</button></a>
</p>




