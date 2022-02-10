@extends ('adminLTE.dashboard')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Courses</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active">Courses</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div>

        <div class="card card-secondary m-3">
            <div class="card-header row">
                <h3 class="card-title col-md-6">Courses</h3>

                <div class="col-md-6  text-right">
                    <a href="{{ route('AddCourses') }}" class="btn btn-sm btn-primary">
                        <i class="fa fa-plus mr-1"></i>Add</a>
                </div>
            </div>

            <!-- /.card-header -->
            <!-- Table start -->
            @if ($courses->count() > 0)
                <div class="card">

                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Courses</th>
                                    <th>Rate</th>
                                    <th>Description</th>
                                    <th>Hours</th>
                                    <th>Levels</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($courses as $index => $course)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $course->name }}</td>
                                        <td>{{ $course->rate }}</td>
                                        <td>{{ $course->description }}</td>
                                        <td>{{ $course->hours }}</td>
                                        <td>{{ $course->levels }}</td>
                                        <td>{{ $course->category->category }}</td>

                                        <td>
                                            <a class="btn btn-info btn-sm" href=""><i class="fa fa-edit mr-1"></i>Edit</a>

                                            <form action="" method="POST" style="display:inline-block;">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                                <button type="submit" class="btn btn-danger btn-sm delete"
                                                    onclick="return confirm('Are you sure you want to delete this category?!')"><i
                                                        class="fa fa-trash mr-1"></i>Delete</button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->

                </div>
            @else
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title m-1">Courses<small class="ml-2">{{ $courses->count() }}</small>
                        </h3>
                        <!-- Form search  -->
                        <form action="{{ route('courses') }}" method="GET">
                            <div class="row">
                                <div class="col-md-4 m-1">

                                    <a href="{{ route('AddCourses') }}" class="btn btn-sm btn-primary">
                                        <i class="fa fa-plus mr-1"></i>Add</a>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <h2 class="m-auto">Data not found </h2>
            @endif

        </div>
    </div>
@endsection
