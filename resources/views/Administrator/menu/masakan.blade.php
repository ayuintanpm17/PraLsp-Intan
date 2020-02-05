@extends('Administrator.main')


@section('content')        
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="product-payment-inner-st">
                <ul id="myTabedu1" class="tab-review-design">
                    <li class="active"><a href="#description">Basic Information</a></li>
                </ul>
                <div id="myTabContent" class="tab-content custom-product-edit">
                    <div class="product-tab-list tab-pane fade active in" id="description">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="review-content-section">
                                    <div id="dropzone1" class="pro-ad">
                                        <form action="/upload" class="dropzone dropzone-custom needsclick add-professors dz-clickable" id="demo1-upload" novalidate="novalidate">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <input name="firstname" type="text" class="form-control" placeholder="Nama Masakan">
                                                    </div>
                                                    <div class="input-group" style="margin-top: 10px;">
                                                        <span class="input-group-addon">$</span>
                                                        <input type="text" placeholder="Harga" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <select name="gender" class="form-control">
                                                            <option value="none" selected="" disabled="">Status Masakan</option>
                                                            <option value="0">Ada</option>
                                                            <option value="1">Tidak Ada</option>
                                                        </select>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="sparkline13-list">
                <div class="sparkline13-hd">
                    <div class="main-sparkline13-hd">
                        <h1>Pemesanan <span class="table-project-n">Data</span> Table</h1>
                    </div>
                </div>
                <div class="sparkline13-graph">
                    <div class="datatable-dashv1-list custom-datatable-overright">
                        <div id="toolbar">
                            <select class="form-control dt-tb">
                              <option value="">Export Basic</option>
                                <option value="all">Export All</option>
                                <option value="selected">Export Selected</option>
                            </select>
                        </div>
                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                            data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                            <thead>
                                <tr>
                                    
                                    <th data-field="id">No</th>
                                    <th data-field="name" data-editable="true">Nama Masakan</th>
                                    <th data-field="price" data-editable="true">Harga</th>
                                    <th data-field="name" data-editable="true">Status Masakan</th>    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $i = 1;
                                ?>
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>Web Development</td>
                                    <td>admin@uttara.com</td>
                                    <td>+8801962067309</td>
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    

@endsection
