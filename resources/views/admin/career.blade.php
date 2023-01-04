@extends('admin.index')
@section('admin')
    <div id="myModal" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header flex-column">
                    <div class="icon-box">
                        <i class="material-icons fa fa-times"></i>
                    </div>
                    <h4 class="modal-title w-100">Silinsin?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Bu məlumatları silmək istədiyinizə əminsiniz?</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Xeyr</button>&nbsp;
                    <button type="button" class="btn btn-danger delete_career">Bəli</button>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">
                        <h4 class="card-title"> Vakansiyalar</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table tablesorter " id="">
                                <thead class=" text-primary">
                                <tr>
                                    <th>#</th>
                                    <th>Başlıq</th>
                                    <th>Şəhər</th>
                                    <th>Son tarix</th>
                                    <th class="text-center">Düzəliş et/ Sil</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($career as $key=>$career)
                                    <tr id="{{$career->id}}">
                                        <td>{{$key + 1}}</td>
                                        <td>@if(strlen($career->header) > 100){{substr($career->header, 0, 80)}}... @else {{$career->header}} @endif</td>
                                        <td>{{$career->city}}</td>
                                        <td>{{$career->deadline}}</td>
                                        <td class="text-center"><a href="edit_career/{{$career->id}}"><button class="btn btn-info"><i class="fa fa-pencil-alt"></i></button></a> <button class="btn btn-danger delete_careers" name="{{$career->id}}" href="#myModal" class="trigger-btn" data-toggle="modal"><i class="fa fa-trash"></i></button></td>
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
