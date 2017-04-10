<aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Creating New Session
                        <small>Data</small>
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Enter Data</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form role="form" method="post" action="<?php echo base_url(); ?>index.php/AdminControl/createNewSession">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Date</label>
                                            <input type="text" class="form-control" id="date" name="date" placeholder="YYYY-MM-DD">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Faculty Name</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Name of the faculty">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Title</label>
                                            <input type="text" class="form-control" id="title" name="title" placeholder="Title of the session">
                                        </div>
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Confirm</button>
                                    </div>
                                </form>
                            </div><!-- /.box -->

                        </div><!--/.col (right) -->
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->