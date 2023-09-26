@extends('backend/master/master')
@section('title', 'Chỉnh sửa user')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sửa Thành viên</h1>
        </div>
    </div>
    <!--/.row-->
<div class="row">
    <div class="col-xs-12 col-md-12 col-lg-12">
        <form method="post" enctype="multipart/form-data" action="{{ route('useradminsite.postedit',['id' => $user->id]) }}">

            <div class="panel panel-primary">
                <div class="panel-heading"><i class="fas fa-user"></i> Sửa thành viên - {{$user->email}}</div>
                <div class="panel-body">
                    <div class="row" style="margin-bottom: 40px">
                        <div class="col-lg-8 col-md-8">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" value="{{$user->email}}">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" value="{{$user->password}}">
                            </div>
                            <div class="form-group">
                                <label>Tên</label>
                                <input type="text" name="name" class="form-control" value="{{$user->name}}">
                            </div>
                            <div class="form-group">
                                <label>Level</label>
                                <select name="level" class="form-control" value="">
                                    <option {{$user->level == 1 ? 'selected' : ''}} value="1">Level 1</option>
                                    <option {{$user->level == 2 ? 'selected' : ''}} value="2">Level 2</option>
                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-success" type="submit">Thêm thông báo</button>
                            <button class="btn btn-danger" type="reset">Huỷ bỏ</button>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            @csrf
        </form>

    </div>
</div>

    <!--/.row-->
</div>

<!--end main-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/chart.min.js"></script>
<script src="js/chart-data.js"></script>




</body>

</html>
@endsection