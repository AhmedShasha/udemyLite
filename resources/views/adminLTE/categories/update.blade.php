@extends ('adminLTE.dashboard')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Categories</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active">Categories</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div>

        <div class="card card-secondary m-3">
            <div class="card-header row">
                <h3 class="card-title col-md-6">Update Categories</h3>
            </div>

            <!-- /.card-header -->

            <div class="card">

                <!-- card-body -->
                <div class="card-body">
                    <form action="{{ url('updateCategories/'. $categories->id) }}" method="POST">
                        @csrf
                        {{ csrf_field() }}
                        {{ method_field('post') }}

                        <div class="row">
                            <!--    Category   -->
                            <div class="form-group col-md-6">
                                <label>Category Name:</label>
                                <input type="text" name="category" id="category" class="form-control" 
                                value="{{$categories->category}}" placeholder="Category Name">
                            </div>
                        </div>
                        <!--   Button update     -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Update</button>
                            <a class="btn btn-danger" href="{{ route('categories') }}"><i class="fas fa-times"></i> Cancel</a>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->

            </div>

        </div>
    </div>
@endsection
