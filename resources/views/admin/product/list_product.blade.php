@extends('admin.main')
@section('content')

<div class="col-lg-12" >
	<div class="card">
		<div class="card-header">
			<div class="col-md-8">
				<button type="button" class="btn btn-primary dspro">
					<svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" fill="currentColor" class="bi bi-list-task" viewBox="0 0 16 16">
						<path fill-rule="evenodd" d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5H2zM3 3H2v1h1V3z"/>
						<path d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9z"/>
						<path fill-rule="evenodd" d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5H2zm1 .5H2v1h1v-1z"/>
					</svg>
				</button>  
				<button type="button" id="trashpro" class="btn btn-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
					<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
					<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
				</svg>
			</button>
			<button type="button" class="btn btn-primary add" data-toggle="modal"data-target="#myModal">@lang('lang.add')</button>  
			<button type="button" class="btn btn-danger delete_all" >@lang('lang.deleteall')</button> 
		</div>
		<div class="col-md-4">
			<input type="search" id="key" class="form-control txtSearch" name="key" value="" placeholder=" @lang('lang.searchkey') ... " />
		</div>
	</div>

	<div class="card-body" id="list_product">
		<table class="table">
			<thead>
				<tr>
					<th width="120px"><input type="checkbox" id = "isCheckAll" value="List"> @lang('lang.all')</th>
					
					<th>@lang('lang.category')</th>
					<th>@lang('lang.namepro')</th>
					<th>@lang('lang.image')</th>
					<th>@lang('lang.sale')</th>
					<th>@lang('lang.amount')</th>
					<th>@lang('lang.price')</th>
					<th>@lang('lang.status')</th>
					<th style="padding-left: 30px;">@lang('lang.action')</th>

				</tr>
			</thead>
			<tbody class="tbl_product">
				<tr>
					<td></td>
				</tr>
			</tbody>
		</table>
		<nav>
			<ul class="pagination pagination_pro">

			</ul>
		</nav>
	</div>	
	<div class="card-body" id="add_product">
		<!-- The Modal -->
		{{-- <div class="container text-center">
			<h2 style="margin: 10px;"> Form add product</h2>
		</div> --}}
		<div class="row">
			<div class="modal-body">
				<form class="productForm" novalidate action="{{route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="form-row">
						<div class="form-group col-md-6 mb-3">
							<label for="txtNamePro"><b>Name</b></label>
							<input type="text" name="name:vi" class="form-control" id="txtNamePro" placeholder="Enter name ..." value="" required>
							<div class="valid-feedback">
								Looks good!
							</div>
							<div class="invalid-feedback">
								Please choose a name.
							</div>
						</div>
						<div class="form-group col-md-6 mb-3 ">
							<label for="txtNamePro_en"><b>Name-en</b></label>
							<input type="text" class="form-control" id="txtNamePro_en" name="name_en:en" placeholder="Enter name-en ..." value="" required>
							<div class="valid-feedback">
								Looks good!
							</div>
							<div class="invalid-feedback">
								Please choose a name-en.
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6 mb-3">
							<label for="txtTitlePro"><b>Title</b></label>
							<input type="text" name="title:vi" class="form-control" id="txtTitlePro" placeholder="Enter title ..." value="" required>
							<div class="valid-feedback">
								Looks good!
							</div>
							<div class="invalid-feedback">
								Please choose a title.
							</div>
						</div>
						<div class="form-group col-md-6 mb-3 ">
							<label for="txtTitlePro_en"><b>Title-en</b></label>
							<input type="text" class="form-control" id="txtTitlePro_en" name="title_en:en" placeholder="Enter title-en ..." value="" required>
							<div class="valid-feedback">
								Looks good!
							</div>
							<div class="invalid-feedback">
								Please choose a title-en.
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-6 mb-3">
							<label for="txtDesPro"><b>Description</b></label>
							<textarea class="form-control" name="description:vi" class="form-control" id="txtDesPro" rows="3" required></textarea>
							<div class="valid-feedback">
								Looks good!
							</div>
							<div class="invalid-feedback">
								Please provide a valid description.
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<label for="txtDesPro_en"><b>Description-en</b></label>
							<textarea class="form-control" name="description_en:en" id="txtDesPro_en" rows="3" required></textarea>
							<div class="valid-feedback">
								Looks good!
							</div>
							<div class="invalid-feedback">
								Please provide a valid description-en.
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-4 mb-4">
							<label for="txtAmount"><b>Amount</b></label>
							<input type="number" class="form-control" name="amount" id="txtAmount" placeholder="Enter amount" required>
							<div class="valid-feedback">
								Looks good!
							</div>
							<div class="invalid-feedback">
								Please provide a valid amount.
							</div>
						</div>
						<div class="col-md-4 mb-4">
							<label for="txtPrice"><b>Price</b></label>
							<input type="number" class="form-control" name="price" id="txtPrice" placeholder="Enter price" required>
							<div class="valid-feedback">
								Looks good!
							</div>
							<div class="invalid-feedback">
								Please provide a valid price.
							</div>
						</div>
						<div class="col-md-4 mb-4">
							<label for="txtSale"><b>Sale</b></label>
							<input type="number" class="form-control" name="sale" id="txtSale" placeholder="Enter sale" required>
							<div class="valid-feedback">
								Looks good!
							</div>
							<div class="invalid-feedback">
								Please provide a valid sale.
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-4 mb-3">
							<div class="col-md-6 mb-4" style="padding-left: 0px;">
								<label for="exampleFormControlFile1" ><b>Image Product</b></label>
								<div class="form-group container">

									<label for="img_product" >Choose image</label>
									<!-- Button trigger modal -->
									<button type="button" class="btn btn-primary" style="margin-left: 7px;" data-toggle="modal" data-target="#exampleModalLong">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-image" viewBox="0 0 16 16">
											<path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
											<path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z"/>
										</svg>
									</button>
									<input type="hidden" class="form-control" name="img_product" class="form-control-file" id="img_product" required onchange ="changeHandler(event)">
									<div class="valid-feedback">
										Looks good!
									</div>
									<div class="invalid-feedback">
										Please provide a valid image.
									</div>
									<!-- Modal -->
									<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
										<div class="modal-dialog" role="document" style="max-width: 80%;">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<iframe src="{{url('filemanager')}}/dialog.php?field_id=img_product" style="width: 100%;height: 500px;"></iframe>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
													<button type="button" class="btn btn-primary">Save changes</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group container" style="padding-right: 0;">
									<label for="exampleFormControlFile1">Related images</label>

									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-images" viewBox="0 0 16 16">
											<path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
											<path d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z"/>
										</svg>
									</button>
									<input type="hidden" class="form-control" name="img_productList" class="form-control-file" id="img_productList" required onchange ="changeHandlerList(event)">
									<div class="valid-feedback">
										Looks good!
									</div>
									<div class="invalid-feedback">
										Please provide a valid imageList.
									</div>
									<!-- Modal -->
									<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
										<div class="modal-dialog" role="document" style="max-width: 80%;">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<iframe src="{{url('filemanager')}}/dialog.php?field_id=img_productList" style="width: 100%;height: 500px;"></iframe>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
													<button type="button" class="btn btn-primary">Save changes</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 mb-4" style="padding:0 ">

								<img src="" alt="..." class="img-thumbnail" id="ImagePro">									
							</div>
						</div>
						<div class="col-md-3 mb-3">
							<label for="txtCategory_id"><b>Select Category</b></label>
							<select class="custom-select list_category" name="id_category" id="txtCategory_id" size="4">
								
							</select>
						</div>
						<div class="col-md-3 mb-3" style="padding-left: 25px;">
							<label for="txtAttr"><b>Choose Size</b></label>
							<div class="form-check list_size" style="padding-left: 0">
								
							</div>		
						</div>

						<div class="col-md-2 mb-3">
							<div class="form-group">
								<label for="exampleFormControlFile1"><b>Status</b></label>
								<div class="form-check" style="padding-left: 0">

									<div class="form-check form-check-inline" >
										<input class="form-check-input" type="radio" id="txtStatus" name="status" value=1 checked="checked">
										<label class="form-check-label" for="inlineRadio1" >Show</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio"id="txtStatus" name="status" value=0 >
										<label class="form-check-label"  for="inlineRadio2">Hiden</label>
									</div>

								</div>
							</div>
						</div>

					</div>
					<div class="form-row" id="show_list_image">
					</div>
					<div class="modal-footer">
						<button class="btn btn-primary" type="submit">Submit</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</form>
			</div>
		</div>
	</div>	
</div>
</div>


<script>	
// Example starter JavaScript for disabling form submissions if there are invalid fields
	(function() {
		'use strict';
		window.addEventListener('load', function() {
	// Fetch all the forms we want to apply custom Bootstrap validation styles to
			var forms = document.getElementsByClassName('productForm');
			// Loop over them and prevent submission
			var validation = Array.prototype.filter.call(forms, function(form) {
				form.addEventListener('submit', function(event) {
					if (form.checkValidity() === false) {
						event.preventDefault();
						event.stopPropagation();
					}
					form.classList.add('was-validated');
				}, false);
			});
		}, false);
	})();
</script>
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

function changeHandler(evt)  {
	var img_product = $('#img_product').val();
	$('#ImagePro').attr('src',img_product);
}
function changeHandlerList(evt)  {     
	var img_productList = $('#img_productList').val();
	var imgList = $.parseJSON(img_productList);
	var _html = '';

	for(var i=0; i<imgList.length; i++){
		_html += '<div class = "col-md-1 thumbnail">';
		_html += '<img src="'+imgList[i]+'" class="img-responsive"  style="height:80px;width:100px;";>';
		_html += '</div>';
	}

  //console.log(_html);

  $('#show_list_image').html(_html);
}

function list_category() {
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
            $(".list_category").html(rows);

            $(".list_category").prop("selectedIndex", 0);
        }
    });
}
function list_size() {
	$.ajax({
        type: "GET",
        url: "/banh-kem/admin/size/show",
        data: {},
        
        success: function (res) {
            //console.log(res.data.data);
            let rows = "";
            for (let item of res.data.data) {
                rows += `
               		<input type="checkbox" value="${ item.id }" name="id_attr[]">
               		&ensp;${ item.size }&emsp;&ensp;               
                           
                `
            }
            $(".list_size").html(rows); 
        }
    });
}
function load_Product(page=1,key=null) {
    $.ajax({
        type: "GET",
        url: "/banh-kem/admin/product/show",
        data: {page:page,key:key},
        success: function (res) {
        	console.log(res);
        	let rows = "";
        	var name_vi = "";
            var name_en = "";
            var status_vi = "";
            var status_en = "";

        	for (let item of res.data.data) {
        		if ('{{ Session::get('locale') }}'=='vi') {
                    name_vi=`<td>${item.translation.cate_name.name}</td>`;
                    status_vi=`<td>${(item.translation.status)?"Hiện":"Ẩn"}</td>`;                   
                }else {
                    name_en=`<td>${item.translation.cate_name.name_en}</td>`;
                    status_en=`<td>${(item.translation.status)?"Show":"Hiden"}</td>`;    
                }
                rows += `
                <tr id="sid${ item.id_product }">
                <td>
                <input type="checkbox" data-id="${item.id_product}"  name="ids" class="checkBoxClass" value="${item.id_product}" />
                </td>
                `+name_vi+name_en+`
                <td>${item.name}</td>                
                <td><img src="{{ asset('uploads')}}/${item.translation.img_product}" alt="" style="width: 45px;height: 45px;"></td>
                <td>${item.translation.sale}</td>
                <td>${item.translation.amount}</td>
                <td>${item.translation.price}</td>
                `+status_vi+status_en+`
                <td>
	                <button data-id="${item.id_product}" type="button" id="edit" class="btn btn-info ">@lang('lang.update')</button>
	                <button data-id="${item.id_product}" id="delete" type="button" class="btn btn-danger">@lang('lang.delete')</button>
                </td>
                </tr>
                `
            }
            $(".tbl_product").html(rows);
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
                $(".pagination_pro").html(after+pages+previous);
        }
    });
}
// function put_Data(){

//            if ($('select[name="parent_id"]').val()<$("#txtId_category").val()) {
//            $.ajax({
//                 url: '{{ url('admin/category_update') }}',
//                 type: 'post',
//                 dataType: 'json',
//                 data: $('#updateForm').serialize(),
//                 success: function(res) {

//                     if($.isEmptyObject(res.error)){     
//                         $('#updateForm')[0].reset();
//                         loadData();
//                         $(".print-error-msg").css('display','none');
//                         alert(res.message);
//                         $('#close').trigger('click');
//                     }else{
//                         printErrorMsg(res.error);
//                     }
//                 }
//             });
//         }else {
//             alert('Do not select itself as the parent category !')
//         }



//     }
//     function post_Data(){
//         $.ajax({
//             url: "{{ url('admin/pro') }}",
//             type: "post",
//             dataType: "json",
//             data: $('#updateForm').serialize(),
//             success: function(response) {
//                 //console.log(response);
//                 if($.isEmptyObject(response.error)){
//                     if (response.code==200) {
//                         loadData();
//                         $(".print-error-msg").css('display','none');
//                         if ((confirm(response.message + '.Tiếp tục thêm mới?')) == false) {
//                             $('#updateForm')[0].reset();
//                             $('#close').trigger('click');
//                         }else {
//                              $('#updateForm')[0].reset();
//                              load_parent();
//                         }
//                     }else {
//                         alert(response.message);
//                     }  
//                 }else{
//                     printErrorMsg(response.error);
//                 }

//             }
//         });
//     }
$(function() {
	list_category();
	list_size()
	load_Product();
	$('.txtSearch').on('keyup',function(){
           
                load_Product(1,$(this).val()); 
             
        });
	$("#add_product").hide();
	$(".dspro").hide();

	$('.add').on('click',function(){ 
		$("#add_product").show();  
		$("#list_product").hide();
		$(".dspro").show();
		$("#trashpro").hide();
	});
	
	$(".dspro").click(function(){
		$("#add_product").hide();  
		$("#list_product").show();
		$(".dspro").hide();
		$("#trashpro").show();
	});
	$(document).on("click", "#page-link",function(){ 
            
                load_Product($(this).text(), $(".txtSearch").val());
              
        });
	// 	$('#exampleModalLong').on('hide.bs.modal',function(){
	// 		alert('img_product');

 //   $('#img').attr('src',img_product);
 // });
	// $("#img_product").change(function(){
	// 	alert('dddd');
	//    var img_product = $('#img_product').val();

	//    alert(img_product);
	//    //$('#img_product').attr('src',img_product);
	// });
	
});
</script>
@stop()