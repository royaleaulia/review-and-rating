<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        a {
            color: #BE206B !important;
        }

        a.btn.btn-lg.btn-block,
        .btn-info {
            color: white !important;
        }

        .btn-secondary {
            background-color: #448BC6 !important;
            color: #fff !important;
        }

        button.btn.btn.btn-secondary {
            width: 100%;
        }

        h3 {
            text-align: center;
            line-height: 200%;
        }

        .collpa .pt-0,
        .py-0 {
            padding-top: 0 !important;
        }

        .rate {
            float: left;
            height: 46px;
            padding: 0 10px;
        }

        .rate:not(:checked)>input {
            position: absolute;
            display: none;
        }

        .rate:not(:checked)>label {
            float: right;
            width: 1em;
            overflow: hidden;
            white-space: nowrap;
            cursor: pointer;
            font-size: 30px;
            color: #ccc;
        }

        .rate:not(:checked)>label:before {
            content: '★ ';
        }

        .rate>input:checked~label {
            color: #ffc700;
        }

        .rate:not(:checked)>label:hover,
        .rate:not(:checked)>label:hover~label {
            color: #deb217;
        }

        .rate>input:checked+label:hover,
        .rate>input:checked+label:hover~label,
        .rate>input:checked~label:hover,
        .rate>input:checked~label:hover~label,
        .rate>label:hover~input:checked~label {
            color: #c59b08;
        }

        .rating-container .form-control:hover,
        .rating-container .form-control:focus {
            background: #fff;
            border: 1px solid #ced4da;
        }

        .rating-container textarea:focus,
        .rating-container input:focus {
            color: #000;
        }

        /* new page css */
    </style>
</head>
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="main">
                    <h3><a>Laravel 8 Review Rating System.</a></h3>
                    <form role="form" action="{{route('post.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="title">Post Title<span class="text-danger">*</span></label>
                            <input type="text" name="title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="author">Post Author<span class="text-danger">*</span></label>
                            <input type="text" name="author" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Post Description<span class="text-danger">*</span></label>
                            <input type="text" name="description" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn btn-secondary">save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
</body>

</html>