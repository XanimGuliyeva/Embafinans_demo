@extends('admin.index')
@section('admin')
    <div id="delete_finances" class="modal fade">
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
                    <button type="button" class="btn btn-danger delete_finance">Bəli</button>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">
                        <h4 class="card-title"> Maliyyə</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table tablesorter " id="">
                                <thead class=" text-primary">
                                <tr>
                                    <th>#</th>
                                    <th>Başlıq</th>
                                    <th>Yaranma tarixi</th>
                                    <th class="text-center">Düzəliş et/ Sil</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($finances as $key=>$finance)
                                    <tr id="{{$finance->id}}">
                                        <td>{{$key + 1}}</td>
                                        <td>@if(strlen($finance->header) > 100){{substr($finance->header, 0, 80)}}... @else {{$finance->header}} @endif</td>
                                        <td>{{date("d.m.Y h:i", strtotime($finance->created_at))}}</td>
                                        <td class="text-center"><a href="edit_finance/{{$finance->id}}"><button class="btn btn-info"><i class="fa fa-pencil-alt"></i></button></a> <button class="btn btn-danger delete_finances" href="#delete_finances" class="trigger-btn" data-toggle="modal" id="{{$finance->id}}"><i class="fa fa-trash"></i></button></td>
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
