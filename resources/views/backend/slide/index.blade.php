@extends('backend.layout.app')

@section('content')

<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Slide</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item">Slide
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Row grouping -->
            <section id="row-grouping-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-datatable">
                                <table class="datatables-basic table" id="tableBasic">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Hình ảnh</th>
                                            <th>Tiêu đề</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>

                            <div class="modal new-user-modal fade" id="addnew">
                                <div class="modal-dialog">
                                    <div class="modal-content pt-0">
                                        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button> -->
                                        <div class="modal-header mb-1">
                                            <h5 class="modal-title">Thêm slide mới</h5>
                                        </div>
                                        <div class="modal-body flex-grow-1">
                                            <form id="frm-add" enctype="multipart/form-data">

                                                <!-- <img id="slide" src="/frontend/images/slides/v1-1.jpg" alt="users avatar" class="user-avatar users-avatar-shadow rounded mr-2 my-25 cursor-pointer"  width="350" /> -->
                                                <div class="form-group">
                                                    <label>Hình ảnh</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="image" name="image">
                                                        <label class="custom-file-label" for="image">Chọn hình ảnh</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="title">Tiêu đề</label>
                                                    <input id="title" type="text" class="form-control" name="title" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="description">Mô tả</label>
                                                    <textarea id="description" name="description" rows="5" class="form-control my-editor" placeholder="Chi tiết dịch vụ"></textarea>
                                                </div>
                                                <button type="button" onclick="save()" class="btn btn-primary mb-1 mb-sm-0 mr-0 mr-sm-1">Cập nhật</button>
                                                <button type="reset" class="btn btn-outline-secondary" data-dismiss="modal">Bỏ qua</button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal new-user-modal fade" id="editinfo">
                                <div class="modal-dialog">
                                    <div class="modal-content pt-0">
                                        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button> -->
                                        <div class="modal-header mb-1">
                                            <h5 class="modal-title">Thêm slide mới</h5>
                                        </div>
                                        <div class="modal-body flex-grow-1">
                                            <form id="frm-edit" enctype="multipart/form-data">
                                                <input type="hidden" name="id" id="iid">
                                                <!-- <img id="slide" src="/frontend/images/slides/v1-1.jpg" alt="users avatar" class="user-avatar users-avatar-shadow rounded mr-2 my-25 cursor-pointer"  width="350" /> -->
                                                <div class="form-group">
                                                    <label>Hình ảnh</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="eimage" name="image">
                                                        <label class="custom-file-label" for="image">Chọn hình ảnh</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="etitle">Tiêu đề</label>
                                                    <input id="etitle" type="text" class="form-control" name="title" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="edescription">Mô tả</label>
                                                    <textarea id="edescription" name="description" rows="5" class="form-control my-editor" placeholder="Chi tiết dịch vụ"></textarea>
                                                </div>
                                                <button type="button" onclick="save()" class="btn btn-primary mb-1 mb-sm-0 mr-0 mr-sm-1">Cập nhật</button>
                                                <button type="reset" class="btn btn-outline-secondary" data-dismiss="modal">Bỏ qua</button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/ Row grouping -->
        </div>
    </div>
</div>
@endsection
@push('js')
<script src="/backend/dist/js/pages/form/tinymce/tinymce.js"></script>
<script src="/backend/assets/js/slide.js"></script>
@endpush
