@extends('admin.main')
@section('content')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <div class="col-md-8">
                <strong class="card-title" style="font-size: 22px;color: #C7254E">
                @lang('lang.listcategory')</strong>
            </div>
            <div class="col-md-4">
                <input type="search" id="key" class="form-control txtSearch" name="key" value="" placeholder=" @lang('lang.searchkey') ... " />
            </div>
        </div>
        <div class="container-fluid list" >
            <p></p>
                <button type="button" id="trash" class="btn btn-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                      <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                      <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                    </svg>
                </button>
            <button type="button" class="btn btn-primary add" data-toggle="modal" data-target="#exampleModal">@lang('lang.add')</button>
            <button type="button" class="btn btn-danger delete_all" >@lang('lang.deleteall')</button>
        </div>
        <div class="container-fluid list_trash">
            <p></p>
            <button type="button" class="btn btn-primary danhsach">
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" fill="currentColor" class="bi bi-list-task" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5H2zM3 3H2v1h1V3z"/>
                  <path d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9z"/>
                  <path fill-rule="evenodd" d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5H2zm1 .5H2v1h1v-1z"/>
                </svg>
            </button>
            <button type="button" class="btn btn-danger remove_all" >@lang('lang.removeall')</button>
            <button type="button" class="btn btn-info untrash_all" >@lang('lang.restoreall')</button>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th width="120px"><input type="checkbox" id = "isCheckAll" value="List"> @lang('lang.all')</th>
                        <th>#</th>
                        <th>@lang('lang.name')</th>
                        <th>@lang('lang.type')</th>
                        <th>@lang('lang.status')</th>
                        <th style="padding-left: 30px;">@lang('lang.action')</th>

                    </tr>
                </thead>
                <tbody class="tbl_category">
                    <tr>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        <nav>
            <ul class="pagination">

            </ul>
        </nav>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">@lang('lang.category_management')</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class=" alert alert-danger print-error-msg" style="display:none;margin: 0">
                    <ul style="padding:0px "></ul>
            </div>
            <form id="updateForm">
                {{csrf_field()}}
                <div class="modal-body">
                    <input type="hidden" id="txtType" name="" value="EDIT">
                    <input type="hidden" name="id_category" id="txtId_category">
                    <div class="form-group">
                       <label for="">@lang('lang.name') <b style="color: red;" id="vali_star"> *</b></label>
                       <input name="name" id="txtName" type="text" value="" class="form-control">
                       {{-- <span class="text-danger p-1">{{ $errors->first('name') }}</span> --}}
                    </div>
                    <div class="form-group">
                       <label for="">@lang('lang.name_en')<b style="color: red;" id="vali_star_en"> *</b></label>
                       <input name="name_en" id="txtName_en" type="text" value="" class="form-control">

                    </div>
                    {{-- <span class="text-danger p-1">{{ $errors->first('name_en') }}</span> --}}
                    <div class="form-group">
                        <label for="">@lang('lang.selectparent')</label>
                        <select name="parent_id" id="txtParent_id" multiple class="form-control parent">

                        </select>
                    </div>
                    <div class=" form-group">
                        <label for="" class=" form-control-label">@lang('lang.status')</label><br>
                            <div class="col-md-3">
                                <input type="radio" name="status" id="txtStatus" value="1" checked="checked">@lang('lang.show')

                            </div>
                            <div class="col-md-3">
                                 <input type="radio" checked="checked" name="status" id="txtStatus" value="0" >@lang('lang.hiden')
                            </div>
                    </div>
                </div>
                <div class="modal-footer">

                    <button type="button" id="close" class="btn btn-secondary" data-dismiss="modal">@lang('lang.close')</button>
                    <button type="button"  id="save" class="btn btn-primary">@lang('lang.savechanges')</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    // ham kiem tra va loai ptu giong nhau trong mang

    // function unique(arr) {
    //   var newArr = []
    //   for (var i = 0; i < arr.length; i++) {
    //     if (newArr.indexOf(arr[i]) === -1) {
    //       newArr.push(arr[i])
    //     }
    //   }
    //   return newArr
    // }



    function load_parent() {
        $.ajax({
            type: "GET",
            url: "/banh-kem/admin/category/show",
            data: {},

            success: function (res) {
                //console.log(res);
                 let rows = "";
                 var name_vi = "";
                var name_en = "";
                for (let item of res.panert_data) {

                    if ('{{ Session::get('locale') }}'=='vi') {
                        name_vi=`${ item.name }`;
                    }else {
                        name_en=`${item.name_en}`;
                    }

                    rows += `

                        <option value="${ item.id_category }">`+name_vi+name_en+`</option>

                    `
                }
                $(".parent").html(rows);


            }
        });
    }
    function loadData(page=1,key=null) {
        $.ajax({
            type: "GET",
            url: "/banh-kem/admin/category/show",
            data: {page:page,key:key},
            success: function (res) {
                let rows = "";
                var name_vi = "";
                var name_en = "";
                for (let item of res.data.data) {
                    //// hasOne relationship laravel <td>${item.name_parent.name}</td>
                    // if (item.parent_id==null) {
                    //     item.name_parent=item;
                    //    //console.log(item);
                    // }
                    if ('{{ Session::get('locale') }}'=='vi') {
                        name_vi=`<td>${item.name}</td>`;
                    }else {
                        name_en=`<td>${item.name_en}</td>`;
                    }
                    rows += `
                    <tr id="sid${ item.id_category }">
                    <td>
                    <input type="checkbox" data-id="${item.id_category}"  name="ids" class="checkBoxClass" value="${item.id_category}" />
                    </td>
                    <td>${item.id_category}</td>
                    `
                    +name_vi+name_en+`
                    <td>${item.parent_id}</td>
                    <td>${(item.status)?'Hien':'An'}</td>
                    <td>
                    <button data-id="${item.id_category}" type="button" id="edit" class="btn btn-info " data-toggle="modal" data-target="#exampleModal">@lang('lang.update')</button>
                    <button data-id="${item.id_category}" id="delete" type="button" class="btn btn-danger">@lang('lang.delete')</button>
                    </td>
                    </tr>
                    `
                }
                $(".tbl_category").html(rows);

                let previous = '';
                let after = '';
                let pages = '';
                totalPage = res.data.last_page;
                for (var i = 1; i <= totalPage; i++) {
                    if (i == res.data.current_page) {
                        previous += `<li class="page-item">
                        <a class="page-link" id="previous" href="javascript:void(0)"><span class="sr-only">${i}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="20" fill="currentColor" class="bi bi-chevron-compact-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671z"/>
                        </svg>
                        </a>
                        </li>`
                        after+=`<li class="page-item">
                        <a class="page-link" id="after" href="javascript:void(0)"><span class="sr-only">${i}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="20" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/>
                        </svg>
                        </a>
                        </li>`
                        pages += `<li class="page-item active">
                        <a class="page-link" id="page-link" href="javascript:void(0)" >${i}<span class="sr-only">(current)</span></a>
                        </li>`
                    } else {
                        pages += `
                        <li class="page-item"><a class="page-link" id="page-link" href="javascript:void(0)">${i}</a></li>
                        `
                    }

                }
                $(".pagination").html(after+pages+previous);
            }
        });
    }
    function load_Trash(page=1,key=null) {
        $.ajax({
            type: "GET",
            url: "{{route('admin.category_trash')}}",
            data: {page:page,key:key},

            success: function (res) {

                let rows = "";
                for (let item of res.data.data) {


                    rows += `
                    <tr id="sid${ item.id_category }">
                    <td>
                    <input type="checkbox" data-id="${item.id_category}"  name="ids" class="checkBox" value="${item.id_category}" />
                    </td>
                    <td>${item.id_category}</td>
                    <td>${item.name}</td>
                    <td>${item.parent_id}</td>
                    <td>${(item.status)?'Hien':'An'}</td>
                    <td>
                    <button data-id="${item.id_category}" type="button" id="untrash" class="btn btn-info ">@lang('lang.restore')</button>
                    <button data-id="${item.id_category}" id="destroy" type="button" class="btn btn-danger">@lang('lang.remove')</button>
                    </td>
                    </tr>
                    `
                }
                $(".tbl_category").html(rows);

                let previous = '';
                let after = '';
                let pages = '';
                totalPage = res.data.last_page;
                for (var i = 1; i <= totalPage; i++) {
                    if (i == res.data.current_page) {
                        previous += `<li class="page-item">
                        <a class="page-link" id="previous" href="javascript:void(0)"><span class="sr-only">${i}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="20" fill="currentColor" class="bi bi-chevron-compact-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671z"/>
                        </svg>
                        </a>
                        </li>`
                        after+=`<li class="page-item">
                        <a class="page-link" id="after" href="javascript:void(0)"><span class="sr-only">${i}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="20" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/>
                        </svg>
                        </a>
                        </li>`
                        pages += `<li class="page-item active">
                        <a class="page-link" id="page-link" href="javascript:void(0)" >${i}<span class="sr-only">(current)</span></a>
                        </li>`
                    } else {
                        pages += `
                        <li class="page-item"><a class="page-link" id="page-link" href="javascript:void(0)">${i}</a></li>
                        `
                    }

                }
                $(".pagination").html(after+pages+previous);
            }
        });
    }
    function check_All(url,method,action){
        var allids = [];
        $("input:checkbox[name=ids]:checked").each(function(){
            allids.push($(this).val());
        });
        if (allids.length>0) {
         if(confirm('Are you sure you want '+action+' ?')){
             $.ajax({
                url: url,
                type: method,
                dataType: 'json',
                data: {
                    ids:allids,
                    "_token": "{{ csrf_token() }}",
                },
                success: function(res) {
                            //console.log(res);
                            $.each(allids,function(key,val){
                                $('#sid'+val).remove();
                            });
                            if (res.code==200) {
                                if (method=='delete') {
                                    loadData();
                                }else {
                                    load_Trash();
                                }

                                alert(res.message);
                            }else {
                                alert(res.message);
                            }
                        }
                    });
         }
     }else {
         alert('chua chon doi tuong '+action+' !');
     }
    }p
    function find_Data(url,id){
        $.ajax({
            url: url,
            type: "post",
            dataType: 'json',
            data: {
                "_token": "{{ csrf_token() }}",
                "id_category": id
            },
            success: function(res) {
               // console.log(res);
                if (res.code==200) {
                    if($("#isCheckAll").val()=="List") {
                        loadData();
                    }else {
                        load_Trash();
                    }
                    alert(res.message);
                }else {
                    alert(res.message);
                }

            }
        });
    }
    function get_Data(id){
        $.ajax({
            url: "{{ url('admin/category_edit') }}",
            type: "post",
            dataType: 'json',
            data: {
                "_token": "{{ csrf_token() }}",
                "id_category": id
            },
            success: function(res) {

                $("#txtId_category").val(res.data.id_category);
                $("#txtName").val(res.data.name);
                $("#txtName_en").val(res.data.name_en);
                $('select[name="parent_id"]').val(res.data.parent_id);
                $("#txtStatus").prop("checked", res.data.status);
                if (($("#txtName").val()).trim()=="") {
                    $("#vali_star").show();
                }else {
                    $("#vali_star").hide();
                }
                if (($("#txtName_en").val()).trim()=="") {
                    $("#vali_star_en").show();
                }else {
                    $("#vali_star_en").hide();
                }
            }
        });
    }
    function put_Data(){

           if ($('select[name="parent_id"]').val()<$("#txtId_category").val()) {
           $.ajax({
                url: '{{ url('admin/category_update') }}',
                type: 'post',
                dataType: 'json',
                data: $('#updateForm').serialize(),
                success: function(res) {

                    if($.isEmptyObject(res.error)){
                        $('#updateForm')[0].reset();
                        loadData();
                        $(".print-error-msg").css('display','none');
                        alert(res.message);
                        $('#close').trigger('click');
                    }else{
                        printErrorMsg(res.error);
                    }
                }
            });
        }else {
            alert('Do not select itself as the parent category !')
        }



    }
    function post_Data(){
        $.ajax({
            url: "{{ url('admin/category') }}",
            type: "post",
            dataType: "json",
            data: $('#updateForm').serialize(),
            success: function(response) {
                //console.log(response);
                if($.isEmptyObject(response.error)){
                    if (response.code==200) {
                        loadData();
                        $(".print-error-msg").css('display','none');
                        if ((confirm(response.message + '.Tiếp tục thêm mới?')) == false) {
                            $('#updateForm')[0].reset();
                            $('#close').trigger('click');
                        }else {
                             $('#updateForm')[0].reset();
                             load_parent();
                        }
                    }else {
                        alert(response.message);
                    }
                }else{
                    printErrorMsg(response.error);
                }

            }
        });
    }
    function printErrorMsg (msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display','block');
            $.each( msg, function( key, value ) {
                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
            });
    }
    $(function() {
        load_parent();
        loadData();
        $('.txtSearch').on('keyup',function(){
           if($("#isCheckAll").val()=="List") {
            loadData(1,$(this).val());
            }else {
                load_Trash(1,$(this).val());
            }
        });
        $('.add').on('click',function(){
            $('#updateForm')[0].reset();
            $("#txtType").val("ADD");
            load_parent();
        });
        $(".list_trash").hide();
        $('#trash').on('click',function(){
            $("#isCheckAll").val("Trash");
            $(".list_trash").show();
            $(".list").hide();
            load_Trash();
        });
        $('.danhsach').on('click',function(){
            $("#isCheckAll").val("List");
            $(".list_trash").hide();
            $(".list").show();
            loadData();
        });
        $('.delete_all').on('click',function(){
             check_All("{{route('admin.category_deleteAll')}}",'delete','delete');
        });
        $('#isCheckAll').on('click',function(){
            if ($("#isCheckAll").val()=="List") {
                $(".checkBoxClass").prop('checked',$(this).prop('checked'));
            }else {
                $(".checkBox").prop('checked',$(this).prop('checked'));
            }
        });
        $(document).on("click", "#page-link",function(){
            if($("#isCheckAll").val()=="List") {
                loadData($(this).text(), $(".txtSearch").val());
            }else {
                load_Trash($(this).text(), $(".txtSearch").val());
            }
        });
        $(document).on("click", "#previous",function(){
            var page_ative = (Number($(this).text()))+1;
                //alert(k);
                if($("#isCheckAll").val()=="List") {
                    if (page_ative<=totalPage) {
                        loadData(page_ative, $(".txtSearch").val());
                    }else {
                     loadData(totalPage, $(".txtSearch").val());
                 }
             }else {
                if (page_ative<=totalPage) {
                    load_Trash(page_ative, $(".txtSearch").val());
                }else {
                    load_Trash(totalPage, $(".txtSearch").val());
                }
            }
        });
        $(document).on("click", "#after",function(){
            var page_ative = (Number($(this).text()))-1;
                //alert(k);
                if($("#isCheckAll").val()=="List") {
                    if (page_ative>0) {
                       loadData(page_ative, $(".txtSearch").val());
                   }else {
                    loadData(1, $(".txtSearch").val());
                }
            }else {
                if (page_ative>0) {
                    load_Trash(page_ative, $(".txtSearch").val());
                }else {
                    load_Trash(1, $(".txtSearch").val());
                }
            }
        });
        $(document).on('click', '#untrash', function() {
            if(confirm('Are you sure you want untrash ?')){
                find_Data("{{ url('admin/category_untrash') }}",$(this).data('id'));
            }
        });
        $(document).on('click', '#delete', function() {
            if(confirm('Are you sure you want delete??')){
                find_Data("{{ url('admin/category_delete') }}",$(this).data('id'));
                }
            });
        $(document).on('click', '#destroy', function() {
            if(confirm('Are you sure you want remove??')){
                find_Data("{{ url('admin/category_destroy') }}",$(this).data('id'));
                }
            });
        $('.remove_all').on('click',function(){
            check_All("{{route('admin.category_removeAll')}}",'post','remove');
            load_Trash();
        });
        $('.untrash_all').on('click',function(){
            check_All("{{route('admin.category_untrashAll')}}",'post','untrash');
        });

        $("#txtName").change(function(){
            if (($("#txtName").val()).trim()=="") {
                $("#vali_star").show();
            }else {
                $("#vali_star").hide();
            }

        });
        $("#txtName_en").change(function(){
            if (($("#txtName_en").val()).trim()=="") {
                $("#vali_star_en").show();
            }else {
                $("#vali_star_en").hide();
            }

        });
        $(document).on('click', '#save', function() {
            if ($("#txtType").val()=="EDIT") {
                 if(confirm('Are you sure you want to update??')) {
                    put_Data();
                }
            }else {
                post_Data();
            }
            load_parent();
        });
        $(document).on("click", "#edit", function () {
            $('#updateForm')[0].reset();
            $("#txtType").val("EDIT");
            get_Data($(this).data('id'));
        });
    });
</script>
@stop()
