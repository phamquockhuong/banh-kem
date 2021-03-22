@extends('admin.main')
@section('content')

<div class="col-lg-11">
    <div class="card">
        <div class="card-header">
            <strong class="card-title" style="font-size: 22px;color: #C7254E">List of categories</strong>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th style="padding-left: 30px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tbody>
                      <?php foreach ($category as $key => $value): ?>
                          <tr>
                                <td>{{ $key+1}}</td>
                                <td>{{ $value->name }}</td>
                                <?php if ( $value->parent_id ==0 ): ?>
                                    <td>{{ $value->name }} </td>
                                <?php else: ?>
                                    <td> {{ $value->name_parent->name }} </td>
                                <?php endif ?>
                                <td>
                                    {!!($value->status ==1)?'<span class="badge badge-success">&nbsp;Show&nbsp;</span>':'<span class="badge badge-danger">&nbsp;Hide&nbsp;</span>'!!}
                                </td>
                                <!-- <td>{{ $value->created_at}}</td> -->
                                <td>
                                    <form action="{{route('admin.category.destroy',$value->id_category)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger btn-sm" style="border-radius: 10px; ">Delete</button>

                                        <a href="{{route('admin.category.edit',['category'=> $value->id_category])}}" class="btn btn-primary btn-sm" style="border-radius: 10px;">Edit</a>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop()

