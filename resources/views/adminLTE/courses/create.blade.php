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
                <h3 class="card-title col-md-6">Add Courses</h3>
            </div>

            <!-- /.card-header -->

            <div class="card">

                <!-- card-body -->
                <div class="card-body">
                    <form action="{{ route('storeCourses') }}" method="POST">
                        @csrf
                        {{ csrf_field() }}
                        {{ method_field('post') }}

                        <div class="row">
                            <!--    Course   -->
                            <div class="form-group col-md-6">
                                <label>Course Name:</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Course Name">
                            </div>

                            <div class="form-group col-md-3">
                                <label>Rate:</label>
                                <input type="number" min="0" max="5" step="1" name="rate" id="rate" class="form-control"
                                    placeholder="Rate">
                            </div>

                            <div class="form-group col-md-3">
                                <label>Hours:</label>
                                <input type="number" step="1" min="0" name="hours" id="hours" class="form-control"
                                    placeholder="Hours">
                            </div>

                            <div class="form-group col-md-6">
                                <label>Description:</label>
                                <textarea type="text" name="description" id="description" class="form-control"
                                    placeholder="Description"></textarea>
                            </div>

                            <div class="form-group col-md-3">
                                <label>Levels:</label>
                                <select name="levels" id="levels" class="form-control">
                                    @foreach ($levels as $level)
                                        <option value="{{$level}}">
                                            {{ $level }}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="form-group col-md-3">
                                <label>Categories:</label>
                                <select name="category_id" id="category_id" class="form-control">
                                    @foreach ($categories as $categoryy)
                                        <option value="{{$categoryy->id}}">
                                            {{ $categoryy->category}}</option>
                                    @endforeach

                                </select>
                            </div>

                        </div>
                        <!--   Button Add     -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Add</button>
                            <a class="btn btn-danger" href="{{ route('courses') }}"><i class="fas fa-times"></i>
                                Cancel</a>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->

            </div>

        </div>
    </div>
@endsection
