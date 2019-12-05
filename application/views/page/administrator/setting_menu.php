
                    <div class="wrapper">
                        <div class="page-wrap">
                            <div class="main-content">
                                <div class="container-fluid">
                                    <div class="page-header">
                                        <div class="row align-items-end">
                                            <div class="col-lg-8">
                                                <div class="page-header-title">
                                                    <i class="ik ik-settings bg-blue"></i>
                                                    <div class="d-inline">
                                                        <h5>Setting Menu</h5>
                                                        <span>Please enter data completely and correctly</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <nav class="breadcrumb-container" aria-label="breadcrumb">
                                                    <ol class="breadcrumb">
                                                        <li class="breadcrumb-item">
                                                            <a href="../index.html"><i class="ik ik-home"></i></a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#">Administrator</a></li>
                                                        <li class="breadcrumb-item active"><a href="#">Setting Menu</a></li>
                                                    </ol>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- New Data -->
                                    <div class="modal fade" id="demoModal" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="demoModalLabel">New Data</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <form class="forms-sample">
                                                    <div class="modal-body">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">ID Menu <i style="color: red;">*</i></label>
                                                            <div class="col-sm-4">
                                                                <input type="number" required class="form-control" id="id_menu" name="id_menu">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Parent Menu <i style="color: red;">*</i></label>
                                                            <div class="col-sm-8">
                                                                <select class="form-control select2" id="parent_menu" name="parent_menu">
                                                                    <option value="10001">Dashboard</option>
                                                                    <option value="10002">Administrator</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Menu Name <i style="color: red;">*</i></label>
                                                            <div class="col-sm-8">
                                                                <input type="text" required class="form-control" id="menu_name" name="menu_name">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Link <i style="color: red;">*</i></label>
                                                            <div class="col-sm-8">
                                                                <input type="text" required class="form-control" id="link" name="link">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Order Number</label>
                                                            <div class="col-sm-4">
                                                                <input type="number" class="form-control" id="order_number" name="order_number">
                                                            </div>
                                                        </div>
                                                    
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary" onclick="new_menu()">Simpan</button>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card" style="min-height: 484px;">
                                                <div class="card-body">
                                                    <button class="btn btn-primary mr-2" data-toggle="modal" data-target="#demoModal"><i class="ik ik-plus"></i>New Data</button>
                                                    <br><br><br>
                                                    <div class="dt-responsive">
                                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                                            <thead>
                                                                <tr>
                                                                    <th>ID Menu</th>
                                                                    <th>Parent Menu</th>
                                                                    <th>Menu Name</th>
                                                                    <th>Link</th>
                                                                    <th>Order Number</th>
                                                                    <th width="20">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>10001</td>
                                                                    <td>No Parent</td>
                                                                    <td>Dashboard</td>
                                                                    <td>welcome/link_dashboard</td>
                                                                    <td>1</td>
                                                                    <td>
                                                                        <div class="table-actions">
                                                                            
                                                                            <a href="#"><i class="ik ik-edit-2"></i></a>
                                                                            <a href="#"><i class="ik ik-trash-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10002</td>
                                                                    <td>No Parent</td>
                                                                    <td>Administrator</td>
                                                                    <td></td>
                                                                    <td>2</td>
                                                                    <td>
                                                                        <div class="table-actions">
                                                                            
                                                                            <a href="#"><i class="ik ik-edit-2"></i></a>
                                                                            <a href="#"><i class="ik ik-trash-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>100021</td>
                                                                    <td>Administrator</td>
                                                                    <td>Setting Menu</td>
                                                                    <td>welcome/setting_menu</td>
                                                                    <td>1</td>
                                                                    <td>
                                                                        <div class="table-actions">
                                                                            <a href="#"><i class="ik ik-edit-2"></i></a>
                                                                            <a href="#"><i class="ik ik-trash-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>