<!DOCTYPE html>
<html>
<head>
    <title>How to create url shortener using Laravel? - ItSolutionStuff.com</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" />
</head>
<body>

<div class="container">
    <br>
    <h1 class="text-center">Create Short URL Page </h1>
    <br>
    <div class="card">

        <div class="card-header">
            <form method="post" action="/">
                @csrf
                <p>Past Long URL</p>
                <div class="input-group mb-3">
                    <input type="text" name="longURL" id="longURL" class="form-control" placeholder="Enter URL">
                    <div class="input-group-append">
                        <a href="/"><button class="btn btn-success">Create Short URL</button></a>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

</body>
</html>

{{--<h1>Create Short URL Page</h1>--}}

{{--<form action="/" method="post">--}}
{{--    @csrf--}}
{{--    <p>--}}
{{--        <label >Past Long URL</label>--}}
{{--        <input type ="text" name="longURL" id="longURL">--}}
{{--    </p>--}}
{{--    <p>--}}
{{--        <a href="/"><button>Create Short URL</button></a>--}}
{{--    </p>--}}
{{--</form>--}}
