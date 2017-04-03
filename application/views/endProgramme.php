<aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Full Programme Details
                        <br><small><b>From Date:</b> <?php echo $_SESSION['fdate'];?></small>
                        <br><small><b>To Date:</b> <?php echo $_SESSION['tdate'];?></small>
                        <br><small><b>Programme Title:</b> <?php echo $_SESSION['program_title'];?></small>
                        <br><small><b>Place:</b> <?php echo $_SESSION['place'];?></small>
                        <br><small><b>Local ID:</b> <?php echo $_SESSION['progid'];?></small>
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                          <div class="col-md-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Final Values</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <tbody>
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Fully - (4)</th>
                                                <th>Mostly - (3)</th>
                                                <th>Partly - (2)</th>
                                                <th>To a little extent - (1)</th>
                                                <th>Overall</th>
                                                <th>Percentage(%)</th>
                                            </tr>
                                        </thead>
                                            <tr>
                                                <th>Were the Programme Objectives met</th>
                                                <td><?php echo $q14?></td>
                                                <td><?php echo $q13?></td>
                                                <td><?php echo $q12?></td>
                                                <td><?php echo $q11?></td>
                                                <td>4</td>
                                                <td>100.00 %</td>
                                            </tr>
                                            <tr>
                                                <th>Did you find the programme sufficiently demanding and stimulating</th>
                                                <td><?php echo $q24?></td>
                                                <td><?php echo $q23?></td>
                                                <td><?php echo $q22?></td>
                                                <td><?php echo $q21?></td>
                                                <td>4</td>
                                                <td>100.00 %</td>
                                            </tr>
                                            <tr>
                                                <th>Did you benefit from this programme</th>
                                                <td><?php echo $q34?></td>
                                                <td><?php echo $q33?></td>
                                                <td><?php echo $q32?></td>
                                                <td><?php echo $q31?></td>
                                                <td>4</td>
                                                <td>100.00 %</td>
                                            </tr>
                                            <tr>
                                                <th>Will the learning help you in enhancing your job</th>
                                                <td><?php echo $q44?></td>
                                                <td><?php echo $q43?></td>
                                                <td><?php echo $q42?></td>
                                                <td><?php echo $q41?></td>
                                                <td>4</td>
                                                <td>100.00 %</td>
                                            </tr>
                                            <tr>
                                                <th>To what extent will you be able to transfer learning on to your job</th>
                                                <td><?php echo $q54?></td>
                                                <td><?php echo $q53?></td>
                                                <td><?php echo $q52?></td>
                                                <td><?php echo $q51?></td>
                                                <td>4</td>
                                                <td>100.00 %</td>
                                            </tr>
                                            <tr>
                                                <th>Were usage of methods like [cases, roleplays, group work, and other aids] effective</th>
                                                <td><?php echo $q64?></td>
                                                <td><?php echo $q63?></td>
                                                <td><?php echo $q62?></td>
                                                <td><?php echo $q61?></td>
                                                <td>4</td>
                                                <td>100.00 %</td>
                                            </tr>
                                            <tr>
                                                <th>Was the programme conducted in a professional manner</th>
                                                <td><?php echo $q74?></td>
                                                <td><?php echo $q73?></td>
                                                <td><?php echo $q72?></td>
                                                <td><?php echo $q71?></td>
                                                <td>4</td>
                                                <td>100.00 %</td>
                                            </tr>
                                            <tr>
                                                <th>Was the course material current, revelent and adequate</th>
                                                <td><?php echo $q84?></td>
                                                <td><?php echo $q83?></td>
                                                <td><?php echo $q82?></td>
                                                <td><?php echo $q81?></td>
                                                <td>4</td>
                                                <td>100.00 %</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <br><b><p style="color:red;">Overall of the Session : 3.92</p></b>
                                    <b><p style="color:red;">Overall of the Session (in %) : 98.98 %</p></b>
                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                            <a class = "btn btn-primary" href ="<?php echo base_url(); ?>index.php/AdminControl/main">Completed</a>
                                    </div>
                            </div><!-- /.box -->
                        </div><!--/.col (right) -->
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->