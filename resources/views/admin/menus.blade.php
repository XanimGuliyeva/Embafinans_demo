@extends('admin.index')
@section('admin')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">
                        <h4 class="card-title"> Haqqımızda</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table tablesorter " id="">
                                <thead class=" text-primary">
                                <tr>
                                    <th>
                                        Menyu
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($menus as $menu)
                                <tr>
                                    <td>
                                        {{$menu->name}}
                                    </td>
                                    <td>
                                        <div id="status">
                                            @if($menu->status == 0)
                                                <button name="{{$menu->id}}" class="btn btn-success active_menu"><i class="fa fa-check"></i></button>
                                            @else
                                                <button name="{{$menu->id}}" class="btn btn-warning deactive_menu"><i class="fa fa-ban"></i></button>
                                            @endif
                                        </div>

                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
