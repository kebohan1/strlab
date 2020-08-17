@extends('admin.layouts.app')
@section('admin.active.teacher','active')
@section('title-name','老師介紹')
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>老師介紹</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">首頁</a></li>
                    <li class="breadcrumb-item active">老師介紹</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="callout callout-warning">
                <h5>注意!!</h5>

                <p>若要修改老師照片及老師基本資訊須至原始碼當中修改，請詳閱使用說明書後方能修改，本處僅修改具有表格之內容!!!</p>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle" src="{{ asset('assets/img/teacher.jpg') }}"
                            alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center">楊文祿</h3>

                    <p class="text-muted text-center">Wen-Luh Yang</p>

                    <a href="#" class="btn btn-primary btn-block"><b>照片上傳</b></a>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
        <div class="col-md-9">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">基本資訊</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <strong><i class="fas fa-phone mr-1"></i> 校內分機</strong>
                    
                    <br>
                    <div class="row" style="margin-top: 0.5em;">
                        <div class="col-md-9">
                            <div class="input-group">
                                
                                <div class="input-group-prepend">
                                    <span class="input-group-text">#</span>
                                </div>
                                <input class="form-control" type="text" placeholder="" id="teacher_phone" value="{{ $basicinfo->where('type','=','phone')->first()->value }}">
                            </div>
                            
                        </div>
                        <div class="col-md-3">
                            <button class="btn btn-outline-primary " id="teacher_phone_btn">更新</button>
                        </div>
                    </div>
                    <hr>

                    <strong><i class="fas fa-map-marker-alt mr-1"></i> 辦公室</strong>

                    <div class="row" style="margin-top: 0.5em;">
                        <div class="col-md-9">
                            <div class="input-group">

                                <input class="form-control" type="text" placeholder="" >
                            </div>
                            
                        </div>
                        <div class="col-md-3">
                            <button class="btn btn-outline-primary ">更新</button>
                        </div>
                    </div>

                    <hr>

                    <strong><i class="fas fa-envelope mr-1"></i> Email</strong>

                    <div class="row" style="margin-top: 0.5em;">
                        <div class="col-md-9">
                            <div class="input-group">

                                <input class="form-control" type="text" placeholder="" >
                            </div>
                            
                        </div>
                        <div class="col-md-3">
                            <button class="btn btn-outline-primary ">更新</button>
                        </div>
                    </div>

                    <hr>
                    
                    <strong><i class="fas fa-pencil-alt mr-1"></i> 專長</strong> &nbsp;&nbsp;
                    <button class="btn btn-outline-primary btn-sm">新增專長</button>
                    <button class="btn btn-outline-success btn-sm">更新</button>

                    <div class="row"  style="margin-top: 0.5em;">
                        <div class="col-md-8">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>專長內容</th>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    

                    <hr>
                    <strong><i class="fas fa-book mr-1"></i> 學歷</strong> &nbsp;&nbsp;
                    <button class="btn btn-outline-primary btn-sm">新增學歷</button>
                    <button class="btn btn-outline-success btn-sm">更新</button>

                    <div class="row"  style="margin-top: 0.5em;">
                        <div class="col-md-8">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>專長內容</th>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">計數器</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                            <i class="fas fa-plus"></i>

                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#modal-counter">新增計數器</button><br>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>名稱</th>
                                <th>數量</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

    <!-- 經歷 -->
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">經歷</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                            <i class="fas fa-plus"></i>

                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#modal-experience-create">新增經歷</button><br>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>服務系所 Department</th>
                                <th>職稱 Job</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

    <!-- 期刊論文 -->
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">期刊論文</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                            <i class="fas fa-plus"></i>

                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#modal-experience-create">新增期刊論文</button><br>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>作者 Authors</th>
                                <th>標題 Title</th>
                                <th>出處 Journal</th>
                                <th>發表時間 Time</th>
                                <th>索引 Citation Index</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

    <!-- 科技部計畫 -->
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">科技部計畫</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#modal-experience-create">新增科技部計畫</button><br>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>計畫名稱 Name</th>
                                <th>計畫日期(起) Start Date</th>
                                <th>計畫日期(迄) End Date</th>
                                <th>計畫編號 Project Number</th>
                                <th>擔任工作 Job</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>


    <!-- 會議論文 -->
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">會議論文</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                            <i class="fas fa-plus"></i>

                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#modal-experience-create">新增期刊論文</button><br>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>作者 Authors</th>
                                <th>標題 Title</th>
                                <th>出處 Journal</th>
                                <th>發表時間 Time</th>
                                <th>索引 Citation Index</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

    <!-- 核准專利 -->
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">核准專利</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                            <i class="fas fa-plus"></i>

                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#modal-experience-create">新增期刊論文</button><br>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>作者 Authors</th>
                                <th>標題 Title</th>
                                <th>出處 Journal</th>
                                <th>發表時間 Time</th>
                                <th>索引 Citation Index</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>


    <div class="modal fade" id="modal-counter">
        <div class="modal-dialog">
            <form action="">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">新增計數器</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="mobile" placeholder="計數名稱">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="mobile" placeholder="計數數量">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                        <button type="submit" class="btn btn-primary">保存</button>
                    </div>
                </div>
            </form>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <div class="modal fade" id="modal-experience-create">
        <div class="modal-dialog">
            <form action="">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">新增經驗</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="mobile" placeholder="服務系所">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="mobile" placeholder="職稱">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                        <button type="submit" class="btn btn-primary">保存</button>
                    </div>
                </div>
            </form>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <div class="modal fade" id="modal-experience-modify">
        <div class="modal-dialog">
            <form action="">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">修改經驗</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="mobile" placeholder="服務系所">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="mobile" placeholder="職稱">
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="id" value="">
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                        <button type="submit" class="btn btn-primary">保存</button>
                    </div>
                </div>
            </form>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</section>
<!-- /.content -->
@endsection

@section('custom_js')
<script src="{{ asset('dist/js/admin/teacher.js') }}"></script>
@endsection