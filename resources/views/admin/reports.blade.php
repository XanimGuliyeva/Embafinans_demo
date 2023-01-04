@extends('admin.index')
@section('admin')
    <div id="report" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hesabat əlavə et</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="add_report">
                        @csrf
                        <input style="color: #525f7f" type="text" name="name" class="form-control" placeholder="Hesabat adı"><br>
                        <select style="color: #525f7f" name="year" class="form-control">
                            <option hidden selected value="hdn">Hesabat ili</option>
                            <option value="2030-cu il">2030-cu il</option>
                            <option value="2029-cu il">2029-cu il</option>
                            <option value="2028-ci il">2028-ci il</option>
                            <option value="2027-ci il">2027-ci il</option>
                            <option value="2026-cı il">2026-cı il</option>
                            <option value="2025-ci il">2025-ci il</option>
                            <option value="2024-cü il">2024-cü il</option>
                            <option value="2023-cü il">2023-cü il</option>
                            <option value="2022-ci il">2022-ci il</option>
                            <option value="2021-ci il">2021-ci il</option>
                            <option value="2020-ci il">2020-ci il</option>
                            <option value="2019-cu il">2019-cu il</option>
                            <option value="2018-ci il">2018-ci il</option>
                            <option value="2017-ci il">2017-ci il</option>
                            <option value="2016-cı il">2016-cı il</option>
                            <option value="2015-ci il">2015-ci il</option>
                            <option value="2014-cü il">2014-cü il</option>
                            <option value="2013-cü il">2013-cü il</option>
                            <option value="2012-ci il">2012-ci il</option>
                        </select><br>
                        <input type="file" name="report" class="form-control"><br>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary add_report">Əlavə et</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Bağla</button>
                </div>
            </div>
        </div>
    </div>

    <div id="edit_reports" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hesabat düzəliş et</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="edit_report">
                        @csrf
                        <input style="color: #525f7f" type="text" name="new_name" class="form-control" placeholder="Hesabat adı"><br>
                        <select style="color: #525f7f" name="new_year" class="form-control">
                            <option hidden selected value="hdn">Hesabat ili</option>
                            <option value="2030-cu il">2030-cu il</option>
                            <option value="2029-cu il">2029-cu il</option>
                            <option value="2028-ci il">2028-ci il</option>
                            <option value="2027-ci il">2027-ci il</option>
                            <option value="2026-cı il">2026-cı il</option>
                            <option value="2025-ci il">2025-ci il</option>
                            <option value="2024-cü il">2024-cü il</option>
                            <option value="2023-cü il">2023-cü il</option>
                            <option value="2022-ci il">2022-ci il</option>
                            <option value="2021-ci il">2021-ci il</option>
                            <option value="2020-ci il">2020-ci il</option>
                            <option value="2019-cu il">2019-cu il</option>
                            <option value="2018-ci il">2018-ci il</option>
                            <option value="2017-ci il">2017-ci il</option>
                            <option value="2016-cı il">2016-cı il</option>
                            <option value="2015-ci il">2015-ci il</option>
                            <option value="2014-cü il">2014-cü il</option>
                            <option value="2013-cü il">2013-cü il</option>
                            <option value="2012-ci il">2012-ci il</option>
                        </select><br>
                        <input type="file" name="new_report" class="form-control"><br>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary edit_reports">Düzəliş et</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Bağla</button>
                </div>
            </div>
        </div>
    </div>

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
                    <button type="button" class="btn btn-danger delete_report">Bəli</button>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">
                        <h4 class="card-title"> Hesabatlar</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-center">
                            <button class="btn btn-lg" data-toggle="modal" data-target="#report">Əlavə et</button>
                        </div>
                        <br>
                        <div class="table-responsive">
                            <table class="table tablesorter " id="">
                                <thead class=" text-primary">
                                <tr>
                                    <th>
                                        #
                                    </th>
                                    <th>
                                        Ad
                                    </th>
                                    <th>
                                        İl
                                    </th>
                                    <th>
                                        Hesabat
                                    </th>
                                    <th>
                                        Düzəlt / Sil
                                    </th>
                                </tr>
                                </thead>
                                <tbody  class="table_body">
                                @foreach($reports as $key=>$report)
                                    <tr id="{{$report->id}}">
                                        <td>
                                            {{$key+1}}
                                        </td>
                                        <td>
                                            {{$report->name}}
                                        </td>
                                        <td>
                                            {{$report->year}}
                                        </td>
                                        <td>
                                            <a href="../reports/{{$report->report}}" class="btn btn-primary btn-lg" download><i class="fa fa-file"></i></a>
                                        </td>
                                        <td>
                                            <button name="{{$report->id}}" class="btn btn-info edit_report" data-toggle="modal" data-target="#edit_reports"><i class="fa fa-pencil-alt"></i></button>
                                            <button name="{{$report->id}}" class="btn btn-danger delete_reports" href="#myModal" class="trigger-btn" data-toggle="modal"><i class="fa fa-trash"></i></button>
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
