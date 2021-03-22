@extends('admin.main')
@section('content')
<!-- Header-->

<div class="col-lg-10" ng-app="parent" ng-controller="parentController">
<div class="card">
    <div class="card-header">
        <strong style="font-size: 22px;color: #C7254E">Add New Category</strong> 
    </div>
    <div class="card-body card-block">
        <form action="{{route('admin.category.store') }}" method="POST" class="form-horizontal">
            @csrf
            <div class="row form-group">
                <div class="col col-md-3"><label for="hf-email" class=" form-control-label"><b>Name Category</b></label></div>
                <div class="col-12 col-md-9"><input type="text" id="name" name="name" placeholder="Enter Name..." class="form-control"><span class="help-block" style="color: red;">Please enter your name</span></div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="hf-password" class=" form-control-label"> <b>Parent Category</b></label></div>
                <div class="col-12 col-md-9">
                    <select name="parent_id" multiple="" class="form-control">
                        <?php foreach ($category as $key => $value): ?>
                            <option value="{{ $value->id_category }}">{{ $value->name }}</option>
                        <?php endforeach ?>    
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="hf-email" class=" form-control-label"><b>Status </b></label></div>
                <div class="col-12 col-md-9">


                  <div class="col-md-6">

                    <input type="radio" name="status" id="status" value="0" checked="checked">
                    Hide category

                  </div>
                  <div class="col-md-6">
                    
                    <input type="radio" name="status" id="status" value="1" checked="checked">
                    Show category

                  </div>

                </div>
            </div>
            <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Add
        </button>
        <button type="reset" class="btn btn-danger btn-sm">
            <i class="fa fa-ban"></i> Reset
        </button>
    </div>
        </form>
    </div>
    
</div>

</div>


@stop()   

<!-- @section('js')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.8.2/angular.min.js"></script>
<script type="text/javascript">
    var app = angular.module('parent', []);
    app.controller('parentController',function(){
        var parent = '<?php echo json_encode($category) ;?>';
        console.log(angular.fromJson(parent));
    })
</script>
@stop() -->