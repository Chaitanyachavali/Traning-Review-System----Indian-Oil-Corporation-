<aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Enter Session Data
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
                            <!-- general form elements disabled -->
                            <div class="box box-warning">
                                <div class="box-header">
                                    <h3 class="box-title">Particulars</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <form role="form" method="post" action="<?php echo base_url(); ?>index.php/AdminControl/addToSession">
                                    <div class="form-group">
                                            <label for="name">Employee Name</label>
                                            <input type="text" class="form-control" id="employeename" name="employeename" placeholder="Employee Name">
                                        </div>
                                        <!-- Select multiple-->
                                        <div class="form-group">
                                            <label>Coverage of the Topic: </label>
                                            <select multiple class="form-control" name="q1">
                                                <option value=4>Excellent</option>
                                                <option value=3>Good</option>
                                                <option value=2>Satisfactory</option>
                                                <option value=1>Average</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Ability to Share/ Impart Knowledge: </label>
                                            <select multiple class="form-control" name="q2">
                                                <option value=4>Excellent</option>
                                                <option value=3>Good</option>
                                                <option value=2>Satisfactory</option>
                                                <option value=1>Average</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label> Use of Traning methods and aids: </label>
                                            <select multiple class="form-control" name="q3">
                                                <option value=4>Excellent</option>
                                                <option value=3>Good</option>
                                                <option value=2>Satisfactory</option>
                                                <option value=1>Average</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Clarification to your Queries [if any]: </label>
                                            <select multiple class="form-control" name="q4">
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
                                            <a class = "btn btn-danger" href ="<?php echo base_url(); ?>index.php/AdminControl/finishSession">Finish this Session</a>
                                    </div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!--/.col (right) -->
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->