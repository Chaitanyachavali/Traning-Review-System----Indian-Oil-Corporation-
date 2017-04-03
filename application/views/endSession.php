<aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Full Session Details
                        <br><small><b>Date:</b> <?php echo $_SESSION['date'];?></small>
                        <br><small><b>Faculty:</b> <?php echo $_SESSION['name'];?></small>
                        <br><small><b>Title:</b> <?php echo $_SESSION['title'];?></small>
                        <br><small><b>Local ID:</b> <?php echo $_SESSION['sessid'];?></small>
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
                                                <th>Excellent - (4)</th>
                                                <th>Good - (3)</th>
                                                <th>Satisfactory - (2)</th>
                                                <th>Average - (1)</th>
                                                <th>Overall</th>
                                                <th>Percentage(%)</th>
                                            </tr>
                                        </thead>
                                            <tr>
                                                <th>Coverage of the Topic</th>
                                                <td><?php echo $q14?></td>
                                                <td><?php echo $q13?></td>
                                                <td><?php echo $q12?></td>
                                                <td><?php echo $q11?></td>
                                                <td>4</td>
                                                <td>100.00 %</td>
                                            </tr>
                                            <tr>
                                                <th>Ability to Share/ Impart Knowledge</th>
                                                <td><?php echo $q24?></td>
                                                <td><?php echo $q23?></td>
                                                <td><?php echo $q22?></td>
                                                <td><?php echo $q21?></td>
                                                <td>4</td>
                                                <td>100.00 %</td>
                                            </tr>
                                            <tr>
                                                <th>Use of Traning methods and aids</th>
                                                <td><?php echo $q34?></td>
                                                <td><?php echo $q33?></td>
                                                <td><?php echo $q32?></td>
                                                <td><?php echo $q31?></td>
                                                <td>4</td>
                                                <td>100.00 %</td>
                                            </tr>
                                            <tr>
                                                <th>Clarification to your Queries [if any]</th>
                                                <td><?php echo $q44?></td>
                                                <td><?php echo $q43?></td>
                                                <td><?php echo $q42?></td>
                                                <td><?php echo $q41?></td>
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