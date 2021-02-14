            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <div class="content">
                    <!-- Start Content-->
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Exemption</a></li>
                                            <li class="breadcrumb-item active">All Business Exemptions</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">All Business Exemptions</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">
                                            <?php
                                                $success = $this->session->userdata('success');
                                                if ($success != "") { 
                                            ?>
                                                    <div class="alert alert-success"><b><?php echo $success ?></b></div>
                                                <?php }else{ ?>
                                                <?php
                                                    $failure = $this->session->userdata('failure');
                                                if ($failure != "") { ?>
                                                    <div class="alert alert-danger"><b><?php echo $failure ?></b></div>
                                            <?php 
                                                } 
                                            }
                                            ?>
                                        </h4>
                                        <!-- <a href="<?php  echo base_url();?>Admin/addhotelcategory"><button type="button" class="btn btn-primary btn-sm waves-effect waves-light" style="float: right;"><i class="fe-plus mr-1"></i> ADD</button></a> -->
                                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th>Sl No.</th>
                                                    <th>Business Name</th>
                                                    <th>Address</th>
                                                    <th>Size Of Business</th>
                                                    <th>Email</th>
                                                    <th>Contact No.</th>
                                                    <th>State</th>
                                                    <th>Local Goverment</th>
                                                    <th>Year Of Exemption</th>
                                                    <th>PCN No.</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                     if(!empty($hcat)){
                                                       foreach($hcat as $key => $val){
                                                ?>
                                                <tr>
                                                    <td><?php echo $key+1;?></td>
                                                    <td>
                                                        <?php echo $val['name'];?>
                                                    </td>
                                                    <td>
                                                        <?php echo $val['address'];?>
                                                    </td>
                                                    <td>
                                                        <?php echo $val['size'];?>
                                                    </td>
                                                    <td>
                                                        <?php echo $val['email'];?>
                                                    </td>
                                                    <td>
                                                        <?php echo $val['personmobile'];?>
                                                    </td>
                                                    <td>
                                                        <?php echo $val['state'];?>
                                                    </td>
                                                    <td>
                                                        <?php echo $val['government'];?>
                                                    </td>
                                                    <td>
                                                        <?php echo $val['yearvalidity'];?>
                                                    </td>
                                                    <?php
                                                    if (!empty($val['exemption_id'])) {       
                                                    ?>
                                                    <td>
                                                        <?php echo $val['exemption_id'];?>
                                                    </td>
                                                    <?php
                                                            }else{
                                                    ?>
                                                    <td>NA</td>
                                                    <?php
                                                    }
                                                    ?>
                                                    <?php
                                                        if ($val['permission'] == 1) {
                                                    ?>
                                                    <td>Approved</td>
                                                    <?php
                                                        }elseif($val['permission'] == 2){
                                                    ?>
                                                    <td>Denied</td>
                                                    <?php
                                                        }else{
                                                    ?>
                                                    <td>
                                                        <a href="<?php echo base_url()?>home/approve_b_exem/<?php echo $val['id'];?>/<?php echo $val['userid'];?>"><button type="button" class="btn btn-success btn-sm waves-effect waves-light">Approved</button></a>
                                                        <a href="<?php echo base_url()?>home/deny_b_exem/<?php echo $val['id'];?>/<?php echo $val['userid'];?>"><button type="button" class="btn btn-danger btn-sm waves-effect waves-light">Deny</button></a>
                                                    </td>
                                                    <?php
                                                        }
                                                    ?>
                                                </tr>
                                                <?php 
                                                        }
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                        
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row-->
                        
                    </div> <!-- container -->

                </div> <!-- content -->