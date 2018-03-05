<!DOCTYPE html>
<html>
<head>
    <title>The Articles </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css">
</head>

<body>

<br>
<br>



<div class="container">
    <a href="{{url('/')}}" class="btn btn-success">Back to home</a>
    <br>
    <br>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>The Articles</h2>
            </div>
            <div class="pull-right">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create-article">
                    Create Article
                </button>
            </div>
        </div>
    </div>


    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th width="200px">Action</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>


    <ul id="pagination" class="pagination-sm"></ul>


    <!-- Create article Modal -->
    <div class="modal fade" id="create-article" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Article</h4>
                </div>
                <div class="modal-body">


                    <form data-toggle="validator" action="{{ route('article-ajax.store') }}" method="POST">
                        <div class="form-group">
                            <label class="control-label" for="title">Title:</label>
                            <input type="text" name="title" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Description:</label>
                            <textarea name="description" class="form-control" data-error="Please enter description." required></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn crud-submit btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Edit article Modal -->
    <div class="modal fade" id="edit-article" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Article</h4>
                </div>
                <div class="modal-body">


                    <form data-toggle="validator" action="/article-ajax/14" method="put">
                        <div class="form-group">
                            <label class="control-label" for="title">Title:</label>
                            <input type="text" name="title" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Description:</label>
                            <textarea name="description" class="form-control" data-error="Please enter description." required></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success crud-submit-edit">Submit</button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>


</div>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.3.1/jquery.twbsPagination.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>


<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">


<script type="text/javascript">
    var url = "<?php echo route('article-ajax.index')?>";
</script>
<script src="{{url('/dashboard/js/article-ajax.js')}}"></script>


</body>
</html>