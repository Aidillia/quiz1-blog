@extends('layout.master')

@section('title-page')
<img src="assets/images/dashboard.png" width="20" height="20" class="icon-img-title" alt=""> 
<h4>Dashboard</h4>
@endsection

@section('breadcrumbs')
<ul class="breadcrumbs">
<li class="breadcrumbs-item">Pages <i class="fas fa-chevron-right"></i> </li>
<li class="breadcrumbs-item active">Dashboard</li>
</ul>
@endsection

@section('content')
<div class="row">
                <div class="col-12">
                    <div class="card-cs">
                        <div class="card-title-cs"><h5>Widget</h5></div>

                        <button class="btn-cs btn-cs-warning">Warning</button>
                        <button class="btn-cs btn-cs-success">Success</button>
                        <button class="btn-cs btn-cs-primary">Info</button>
                        <button class="btn-cs btn-cs-danger">Danger</button>


                        <form action="" class="form-cs">
                            <div class="form-group-cs">
                                <label for="" class="label-form-cs">Text Field</label>
                                <input type="text" class="form-control-cs">
                            </div>
                            <div class="form-group-cs">
                                <label for="" class="label-form-cs">Select</label>
                                <select name="" id="" class="form-control-cs">
                                    <option value="">-Pilih Item-</option>
                                    <option value="option_1">option 1</option>
                                    <option value="option_2">option 2</option>
                                    <option value="option_3">option 3</option>
                                </select>
                            </div>
                            <div class="form-group-cs">
                                <label for="" class="label-form-cs">Text Area</label>
                                <textarea name="" id="" class="form-control-cs" cols="30" rows="5"></textarea>
                            </div>
                        </form>

                         
                        <div class="card-footer-cs">
                            <button class="btn-cs btn-cs-success">Simpan</button>
                            <button class="btn-cs btn-cs-danger">Batal</button>
                        </div>
                    </div>
                </div>
            </div>
@endsection