<aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Enter Programme Data
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
                            <!-- general form elements disabled -->
                            <div class="box box-warning">
                                <div class="box-header">
                                    <h3 class="box-title">Particulars</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <form role="form" method="post" action="<?php echo base_url(); ?>index.php/AdminControl/addToProgramme">
                                    <div class="form-group">
                                            <label for="name">Employee Name</label>
                                            <input type="text" class="form-control" id="employeename" name="employeename" placeholder="Employee Name">
                                        </div>
                                        <!-- Select multiple-->
                                        <div class="form-group">
                                            <label>Were the Programme Objectives met: </label>
                                            <select multiple class="form-control" name="q1">
                                                <option value=4>Fully</option>
                                                <option value=3>Mostly</option>
                                                <option value=2>Partly</option>
                                                <option value=1>To a little extent</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Did you find the programme sufficiently demanding and stimulating: </label>
                                            <select multiple class="form-control" name="q2">
                                                <option value=4>Fully</option>
                                                <option value=3>Mostly</option>
                                                <option value=2>Partly</option>
                                                <option value=1>To a little extent</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Did you benefit from this programme: </label>
                                            <select multiple class="form-control" name="q3">
                                                <option value=4>Fully</option>
                                                <option value=3>Mostly</option>
                                                <option value=2>Partly</option>
                                                <option value=1>To a little extent</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Will the learning help you in enhancing your job: </label>
                                            <select multiple class="form-control" name="q4">
                                                <option value=4>Fully</option>
                                                <option value=3>Mostly</option>
                                                <option value=2>Partly</option>
                                                <option value=1>To a little extent</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>To what extent will you be able to transfer learning on to your job: </label>
                                            <select multiple class="form-control" name="q5">
                                                <<option value=4>Fully</option>
                                                <option value=3>Mostly</option>
                                                <option value=2>Partly</option>
                                                <option value=1>To a little extent</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Were usage of methods like [cases, roleplays, group work, and other aids] effective: </label>
                                            <select multiple class="form-control" name="q6">
                                                <<option value=4>Fully</option>
                                                <option value=3>Mostly</option>
                                                <option value=2>Partly</option>
                                                <option value=1>To a little extent</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Was the programme conducted in a professional manner: </label>
                                            <select multiple class="form-control" name="q7">
                                                <option value=4>Fully</option>
                                                <option value=3>Mostly</option>
                                                <option value=2>Partly</option>
                                                <option value=1>To a little extent</option>n>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Was the course material current, revelent and adequate: </label>
                                            <select multiple class="form-control" name="q8">
                                                <option value=4>Excellent</option>
                                                <option value=3>Good</option>
                                                <option value=2>Satisfactory</option>
                                                <option value=1>Average</option>
                                            </select>
                                        </div>
                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-primary">Fill Next</button>
                                        </div>
                                    </form>
                                    <div class="box-footer">
                                            <a class = "btn btn-danger" href ="<?php echo base_url(); ?>index.php/AdminControl/finishProgramme">Finish this Programme</a>
                                    </div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!--/.col (right) -->
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->