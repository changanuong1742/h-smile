/**
 * DataTables Basic
 */
 var url = '';
 var iid = 0;
 $(function () {
     $('#category_id').select2({
         placeholder: "Chọn dịch vụ cha",
         allowClear: true,
         dropdownParent: $('#category_id').parent(),
     })
     $('#category_id').val('0').trigger('change');

     $('#ecategory_id').select2({
         placeholder: "Chọn dịch vụ cha",
         allowClear: true,
         dropdownParent: $('#ecategory_id').parent(),
     })
     $('#ecategory_id').val('0').trigger('change');

     'use strict';
     var table_table = $('#tableBasic');
     // $('#nhanvien').select2();
     // $('#tinh_trang').select2({
     //     minimumResultsForSearch: Infinity
     // });
     // DataTable with buttons
     // --------------------------------------------------------------------
     if (table_table.length) {
         var table = table_table.DataTable({
             ajax: '/admin/feedback/json',
             // select: {
             //     style: 'single'
             // },
             columns: [
                 { data: 'id' },
                 { data: 'name' },
                 { data: 'address' },
                 { data: 'message' }
             ],
             columnDefs: [
                 {
                     targets: 4,
                     render: function (data, type, full, meta) {
                         var html = '';
                         html += '<button type="button" class="btn btn-icon btn-outline-primary waves-effect" title="Chỉnh sửa" onclick="loaddata(' + full['id'] + ')">';
                         html += '<i class="fas fa-pencil-alt"></i>';
                         html += '</button> &nbsp;';
                         html += '<button type="button" class="btn btn-icon btn-outline-danger waves-effect" title="Xóa" onclick="del(' + full['id'] + ')">';
                         html += '<i class="fas fa-trash-alt"></i>';
                         html += '</button>';
                         return html;
                     },
                     width: 150
                 }
             ],
             // order: [[0, 'DESC']],
             dom:
                 '<"d-flex justify-content-between align-items-center header-actions mx-1 row mt-75"' +
                 '<"col-lg-12 col-xl-6" l>' +
                 '<"col-lg-12 col-xl-6 pl-xl-75 pl-0"<"dt-action-buttons text-xl-right text-lg-left text-md-right text-left d-flex align-items-center justify-content-lg-end align-items-center flex-sm-nowrap flex-wrap mr-1"<"mr-1"f>B>>' +
                 ">t" +
                 '<"d-flex justify-content-between mx-2 row mb-1"' +
                 '<"col-sm-12 col-md-6"i>' +
                 '<"col-sm-12 col-md-6"p>' +
                 ">",
             displayLength: 10,
             lengthMenu: [10, 20, 30, 50, 70, 100],

             language: {
                 sLengthMenu: "Show _MENU_",
                 search: "Search",
                 searchPlaceholder: "11111111112..",
             },
             // Buttons with Dropdown
             buttons: [
                 {
                     text: "Thêm mới",
                     className: "add-new btn btn-primary mt-50",
                     init: function (api, node, config) {
                         $(node).removeClass("btn-secondary");
                     },
                     action: function (e, dt, node, config) {
                         loadadd();
                     },
                 },
                 'excel',
                 'pdf'
             ],
             language: {
                 paginate: {
                     // remove previous & next text from pagination
                     previous: "&nbsp;",
                     next: "&nbsp;",
                 },
             },
         });
     }

     $('#frm-add').each(function () {
         var $this = $(this);
         $this.validate({
             rules: {
                 name: {
                     required: true
                 },
                 address: {
                     required: true
                 },
                 content: {
                    required: true,
                    maxlength: 256
                 }
             }
         });
     });
 });

 function loadadd() {
     $("#addnew").modal('show');
     $(".modal-title").html('Thêm Feed back');
     $('#name').val('');
     $('#address').val('');
     $('#content').val(null).trigger('change');
     url = '/admin/feedback/add';
     iid = 0;
 }

 function loaddata(id) {
     $("#editinfo").modal('show');
     $(".modal-title").html('Sửa Feed back');
     $.ajax({
         type: "POST",
         dataType: "json",
         data: { id: id },
         url: "/admin/feedback/loaddata",
         success: function (data) {
             $('#ename').val(data.name);
             $('#eaddress').val(data.address);
             $('#econtent').val(data.content);
             $('#iid').val(id);
             url = '/admin/feedback/edit';
             iid = id;
         },
         error: function () {
             notify_error('Lỗi truy xuất database');
         }
     });
 }

 function save() {
     var info = {};
     var isValid = $('#frm-add').valid();

     if (iid != 0) {
         console.log(1);
         var info = new FormData($("#frm-edit")[0]);
         $.ajax({
             type: "POST",
             dataType: "json",
             data: info,
             url: url,
             contentType: false,
             processData: false,
             success: function (data) {
                 if (data.success) {
                     notyfi_success(data.msg);
                     $('#editinfo').modal('hide');
                     $("#tableBasic").DataTable().ajax.reload(null, false);
                 }
                 else
                     notify_error(data.msg);
             },
             error: function () {
                 notify_error('Cập nhật không thành công');
             }
         });
     } else {
         console.log(2);
         if (isValid) {
             var info = new FormData($("#frm-add")[0]);
             $.ajax({
                 type: "POST",
                 dataType: "json",
                 data: info,
                 url: url,
                 contentType: false,
                 processData: false,
                 success: function (data) {
                     if (data.success) {
                         notyfi_success(data.msg);
                         $('#addnew').modal('hide');
                         $("#tableBasic").DataTable().ajax.reload(null, false);
                     }
                     else
                         notify_error(data.msg);
                 },
                 error: function () {
                     notify_error('Cập nhật không thành công');
                 }
             });
         }
     }


 }

 function del(id) {
     Swal.fire({
         title: 'Xóa dữ liệu',
         text: "Bạn có chắc chắn muốn xóa!",
         icon: 'warning',
         showCancelButton: true,
         confirmButtonText: 'Tôi đồng ý',
         customClass: {
             confirmButton: 'btn btn-primary',
             cancelButton: 'btn btn-outline-danger ml-1'
         },
         buttonsStyling: false
     }).then(function (result) {
         if (result.value) {
             $.ajax({
                 url: "/admin/feedback/del",
                 type: 'post',
                 dataType: "json",
                 data: { id: id },
                 success: function (data) {
                     if (data.success) {
                         notyfi_success(data.msg);
                         $("#tableBasic").DataTable().ajax.reload(null, false);
                     }
                     else
                         notify_error(data.msg);
                 },
             });
         }
     });
 }
