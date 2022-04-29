<html>
<head>
    <title>File Upload</title>
</head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
    h1 {
        text-align: center
    }

    p {
        text-align: center;
        margin-top: 20px
    }
</style>
<body>

<div class="page-header">
    <h1> Upload Control </h1>
</div>
<div class="container">
    <div class="col-md-4"></div>
    @if(session('error'))
        <div id="pop-up-div" class="alert alert-card alert-danger" role="alert">
            <strong class="text-capitalize">Error!</strong>
            <br>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{session('error')}}
        </div>
    @endif
    <div class="col-md-4">
        <form action="{{ route('uploader') }}" method="post" enctype="multipart/form-data" >
            @csrf
            <input type="file" id="files" name="csv_file" multiple="multiple" />
            <p> <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div> </p>
        </form>
    </div>
    <div class="col-md-4"></div>
</div>


</body>
</html>

