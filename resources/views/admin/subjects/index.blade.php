@extends('admin.layouts.main')
@section('title', 'List Course')
@section('content')
<!-- content -->
<div id="content-wrapper">

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Tables</li>
        </ol>
        <!-- DataTables Example -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-user"></i>
                <span>List User</span>
                <div class="card-body">
                    <div>
                        <!--/.row-->
                        <div class="row">
                            <div class="col-xs-12 col-md-12 col-lg-12">

                                <div class="panel panel-primary">

                                    <div class="panel-body">
                                        <div class="bootstrap-table">
                                            <div class="table-responsive">
                                                <a href="{{ route('admin.subjects.create') }}" class="btn btn-primary">Thêm sản phẩm</a>
                                                <table class="table table-bordered" style="margin-top:20px;">
                                                    <thead>
                                                        <tr class="bg-primary">
                                                            <th>ID</th>
                                                            <th>Name</th>
                                                            <th>
                                                                <select id="courses_option" class="form-control">
                                                                    <option>Courses</option>
                                                                    @foreach ($courses as $course)
                                                                    <option value="{{ $course->id }}">
                                                                        {{ $course->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </th>
                                                            <th>Description</th>
                                                            <th>Status</th>
                                                            <th width='15%'>Tùy chọn</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @forelse ($subjects as $subject)
                                                        <tr>
                                                            <td>{{ $subject->id }}</td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <p>Course Name : {{ $subject->name }}</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                @foreach ($subject->courses as $course)
                                                                {{ $course->name }}
                                                                @endforeach
                                                            </td>
                                                            <td>
                                                                <a href="#" class="btn @if ($course->status == 0)
                                                                            btn-success
                                                                        @else
                                                                            btn-warning
                                                                        @endif "><i class="fa fa-pencil"
                                                                        aria-hidden="true"></i>
                                                                    @if ($course->status == 0)
                                                                    {{ trans('setting.open') }}
                                                                    @else
                                                                    {{ trans('setting.waiting') }}
                                                                    @endif
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <p>{{ $subject->description }}</p>
                                                            </td>
                                                            <td>
                                                                <a href="#" class="btn btn-warning"><i
                                                                        class="fas fa-edit" aria-hidden="true"></i></a>
                                                                <a href="#" class="btn btn-danger"><i
                                                                        class="fa fa-trash" aria-hidden="true"></i></a>
                                                            </td>
                                                        </tr>
                                                        @empty

                                                        @endforelse
                                                    </tbody>
                                                </table>
                                                <div align='right'>
                                                    <ul class="pagination">
                                                        <li class="page-item"><a class="page-link" href="#">Trở lại</a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">tiếp
                                                                theo</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                                <!--/.row-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
        <!-- Sticky Footer -->
        <footer class="sticky-footer">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright © Your Website 2019</span>
                </div>
            </div>
        </footer>
    </div>
    <!-- end content -->
    <!-- /.content-wrapper -->
</div>
@endsection
