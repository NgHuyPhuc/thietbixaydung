@extends('backend/master/master')
@section('title', 'Thêm mới sản phẩm')
@section('main')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thêm sản phẩm</h1>
            </div>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-xs-6 col-md-12 col-lg-12">
                <form method="post" enctype="multipart/form-data" action="{{ route('product.postcreate') }}">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Thêm sản phẩm</div>
                        <div class="panel-body">
                            <div class="row" style="margin-bottom:40px">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Danh mục</label>
                                        <select name="category" class="form-control">
                                            @foreach ($categories as $item)
                                                <option value='{{ $item->id }}'>{{ $item->ten }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Tên sản phẩm</label>
                                        <input type="text" name="ten" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Giá</label>
                                        <input type="text" name="gia" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Mô tả</label>
                                        <textarea type="text" name="description" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Ảnh Thông tin giới thiệu</label>
                                        <input id="img" type="file" name="image" class="form-control hidden"
                                            onchange="changeImg(this)">
                                        <img id="avatar" class="thumbnail" width="100%" height="350px"
                                            src="img/import-img.png">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Mô tả chi tiết</label>
                                        <textarea id="content" type="text" name="more_description" class="form-control"></textarea>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-success" type="submit">Thêm sản phẩm</button>
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
    <script src="ckeditor/ckeditor.js"></script>



    <script>
        function changeImg(input) {
            //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                //Sự kiện file đã được load vào website
                reader.onload = function(e) {
                    //Thay đổi đường dẫn ảnh
                    $('#avatar').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $(document).ready(function() {
            $('#avatar').click(function() {
                $('#img').click();
            });
        });
        CKEDITOR.replace('content',{
            filebrowserImageUploadUrl : "{{ url('/admin/new/uploads-ckeditor?_token='.csrf_token()) }}",
            filebrowserBrowseUrl : "{{ url('/admin/new/file-browser?_token='.csrf_token()) }}",
            filebrowserUploadMethod: 'form',
        });
    </script>
    </body>

    </html>
@endsection
