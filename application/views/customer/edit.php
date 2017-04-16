<div class="right_col" role="main" style="min-height: 1099px;">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Customer Process</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

                </div>
            </div>
        </div>

        <?php
        $custdata = array();
        $customer_state = 1;
        if (isset($customerdata) && !empty($customerdata)) {

            $custdata = $customerdata[0];
            $customer_state = $custdata['customer_state'];
        }
        ?>
        <div class="row">
            <section>
                <div class="wizard">
                    <div class="wizard-inner">
                        <div class="connecting-line"></div>
                        <ul class="nav nav-tabs" role="tablist">

                            <li role="presentation" class="<?php echo ($customer_state == 1) ? ' active ' : ' ';
        echo ($customer_state >= 1) ? ' ' : ' disabled ';
        ?>">
                                <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                                    <span class="round-tab">
                                        <i class="glyphicon glyphicon-user"></i>
                                    </span>
                                </a>
                            </li>

                            <li role="presentation" class="<?php echo ($customer_state == 2) ? ' active ' : ' ';
                                echo ($customer_state >= 2) ? ' ' : ' disabled ';
        ?>">
                                <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                                    <span class="round-tab">
                                        <i class="fa fa-money" aria-hidden="true"></i>
                                    </span>
                                </a>
                            </li>
                            <li role="presentation" class="<?php echo ($customer_state == 3) ? ' active ' : ' ';
                                echo ($customer_state >= 3) ? ' ' : ' disabled ';
        ?>">
                                <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                                    <span class="round-tab">
                                        <i class="glyphicon glyphicon-paperclip"></i>
                                    </span>
                                </a>
                            </li>
                            <li role="presentation" class="<?php echo ($customer_state == 4) ? ' active ' : ' ';
                                echo ($customer_state >= 4) ? ' ' : ' disabled ';
        ?>">
                                <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab" title="Step 4">
                                    <span class="round-tab">
                                        <i class="glyphicon glyphicon-time"></i>
                                    </span>
                                </a>
                            </li>

                            <li role="presentation" class="<?php echo ($customer_state == 5) ? ' active ' : ' ';
                                echo ($customer_state >= 5) ? ' ' : ' disabled ';
        ?>">
                                <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                                    <span class="round-tab">
                                        <i class="glyphicon glyphicon-ok"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>


                    <div class="tab-content">
                        <div class="tab-pane <?php echo ($customer_state == 1) ? ' active ' : ' '; ?>" role="tabpanel" id="step1" >
                            <form class="form-horizontal form-label-left" method="post" action="<?php echo base_url('customerController/saveData');?>" enctype="multipart/form-data" id="customer_registration">
                                <div class="step1">

                                    <input type="hidden" name="state" id="state" value="1"/>
                                    <input type="hidden" name="customer_id" class="customer_id" value="<?php echo $custdata['id']; ?>"/>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Delivery Date <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input class="form-control" id="inputSuccess3" name="delivery_date" placeholder="Delivery Date" type="text" value="<?php echo date('d-m-Y h:i:s',  strtotime($custdata['delivery_date']));  ?>" readonly="">
                                            <!--date('d-m-Y h:i A',strtotime($custdata['delivery_date']));-->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Branch <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select class="form-control" name="branch" id="branch">
                                                <option value="">Select Branch</option>
                                                <option <?php echo ($custdata['branch'] == "indore") ? " selected " : " " ?> value="indore">Ford Indore</option>
                                                <option <?php echo ($custdata['branch'] == "sagar") ? " selected " : " " ?> value="sagar">Ford Sagar</option>
                                                <option <?php echo ($custdata['branch'] == "khargone") ? " selected " : " " ?> value="khargone">Ford Khargone</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Customer Full Name <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input class="form-control" id="inputSuccess3" name="customer_name" value="<?php echo $custdata['customer_name'] ?>" placeholder="Full Name" type="text">
                                            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Vehicle Name <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select class="form-control" name="vehicle_name" id="vehicle_name">
                                                 <option value="">Select Vehicle</option>
                                                <option  <?php echo ($custdata['vehicle_name'] == "EcoSport") ? " selected " : " " ?>  value="EcoSport">EcoSport</option>
                                                <option  <?php echo ($custdata['vehicle_name'] == "Figo") ? " selected " : " " ?>  value="Figo">Figo</option>
                                                <option  <?php echo ($custdata['vehicle_name'] == "Aspire") ? " selected " : " " ?>  value="Aspire">Aspire</option>
                                                <option  <?php echo ($custdata['vehicle_name'] == "Mustang") ? " selected " : " " ?>  value="Mustang">Mustang</option>
                                                <option  <?php echo ($custdata['vehicle_name'] == "Endovour") ? " selected " : " " ?>  value="Fiesta">Ford Fiesta</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Engine Vin Number <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input class="form-control" id="inputSuccess7" name="customer_chesisno" placeholder="Chasis Number" value="<?php echo $custdata['engine_chesis_no']; ?>" type="text">
                                            <span class="fa fa-automobile form-control-feedback right" aria-hidden="true">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Mobile Number</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input class="form-control" id="inputSuccess5" name="customer_mobno" placeholder="Mobile" type="text" value="<?php echo $custdata['mobile_no'] ?>">
                                            <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Phone Number</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input class="form-control" id="inputSuccess6" name="customer_phone" placeholder="Phone" type="text" value="<?php echo $custdata['phone_no'] ?>">
                                            <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>  </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Follow Up</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea name="followup" class="form-control" placeholder="Comment Here"><?php echo $custdata['followup']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Sales Consultant</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <!-- <input class="form-control has-feedback-right" name="consultant_name" id="consultant_name" placeholder="Consultant name" value="<?php echo $custdata['consultant_name']; ?>" type="text">
                                            <span class="fa fa-user form-control-feedback right" aria-hidden="true">

                                            </span> -->

                                            <select class="form-control has-feedback-right" name="consultant_name" id="consultant_name">
                                              <option value="">Select Consultant</option>
                                              <?php
                                              $emplist = getEmployee();
                                               if(!empty($emplist)){
                                                 foreach ($emplist as $key => $value) {
                                                   ?>
                                                   <option <?= ($custdata['consultant_name']==$value['id'])?'selected':'';?> value="<?php echo $value['id'];?>"><?php echo  $value['name'];?></option>
                                                   <?php
                                                 }
                                               }
                                               ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input class="form-control has-feedback-right" name="customer_email" id="inputSuccess4" placeholder="Email" type="text" value="<?php echo $custdata['email'] ?>">
                                            <span class="fa fa-envelope form-control-feedback right" aria-hidden="true"></span>  </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Balance Amount</label>
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                            <select class="form-control" name="remaining_amt" id="remaining_amt">
                                                <option <?php echo ($custdata['remaining_amt'] == "0") ? " selected " : " " ?> value="0">No</option>
                                                <option <?php echo ($custdata['remaining_amt'] == "1") ? " selected " : " " ?> value="1">Yes</option>
                                            </select>

                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-12">

                                            <input placeholder="Amount" type="text" class="form-control" name='amount' id="amount" value="<?php echo $custdata['amount']; ?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Finance</label>
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                            <select class="form-control" name="finance" id="finance">
                                                <option <?php echo ($custdata['finance'] == "0") ? " selected " : " " ?> value="0">No</option>
                                                <option <?php echo ($custdata['finance'] == "1") ? " selected " : " " ?> value="1">Yes</option>
                                            </select>

                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-12">

                                            <input placeholder="Bank Name" type="text" class="form-control" name='bank_name' id="bank_name" value="<?php echo $custdata['bank_name'] ?>"/>
                                        </div>
                                    </div>




                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Insurance</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">

                                            <select class="form-control" name="insurance" id="insurance">
                                                <option value="">Select Insurance</option>
                                                <option <?php echo ($custdata['insurance'] == "vapl") ? " selected " : " " ?> value="vapl">VAPL</option>
                                                <option <?php echo ($custdata['insurance'] == "self") ? " selected " : " " ?> value="self">Self</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Vehicle Registration</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">

                                            <select class="form-control" name="vehicle_reg" id="vehicle_reg">
                                                <option value="">Select Registration</option>
                                                <option <?php echo ($custdata['vehicle_reg'] == "normal") ? " selected " : " " ?> value="normal">Normal</option>
                                                <option <?php echo ($custdata['vehicle_reg'] == "c/o") ? " selected " : " " ?> value="c/o">C/O</option>
                                                <option <?php echo ($custdata['vehicle_reg'] == "tr") ? " selected " : " " ?> value="tr">TR</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Customer Address <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea class="form-control" rows="3" name="customer_address" placeholder="Address"><?php echo $custdata['address'] ?></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Documents Complete ? <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
<!--                                            <input name="documents_status"  type="hidden" class="js-switch" value="0" />
                                            <input name="documents_status" id="documents_status" type="checkbox" class="js-switch" unchecked value="1"  <?= ( $custdata['document_complete'] == "1") ? '   checked ' : ''; ?> />-->
                                            <select name="documents_status" id="documents_status" class="form-control">

                                                <option <?= ( $custdata['document_complete'] == "") ? '   selected ' : ''; ?> value="">Choose</option>
                                                <option <?= ( $custdata['document_complete'] == 1) ? '   selected ' : ''; ?> value="1">Yes</option>
                                                <option <?= ( $custdata['document_complete'] == 0) ? '   selected ' : ''; ?> value="0">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group document_type">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Documents Type ?</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label class="checkbox-inline">
                                                <?php
                                                $ids = array();
                                                if ($custdata['document_ids'] != "") {
                                                    $ids = explode(',', $custdata['document_ids']);
                                                }
                                                ?>
                                                <input type="checkbox" id="pencard" value="1" <?php echo (in_array(1, $ids)) ? " checked " : " "; ?> name="document[]">Pan Card
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" id="drivinglic" value="2" <?php echo (in_array(2, $ids)) ? " checked " : " "; ?> name="document[]">Aadhar Card
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" id="passport" value="3" <?php echo (in_array(3, $ids)) ? " checked " : " "; ?> name="document[]">Passport
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" id="bankdoletter" value="4" <?php echo (in_array(4, $ids)) ? " checked " : " "; ?> name="document[]">Bank Do Letter
                                            </label>
                                        </div>
                                    </div>



                                </div>
                                <ul class="list-inline pull-right">
<!--                                    <li><input type="button" class="btn btn-primary next-step" value="Save and Exit" value="1" name="exit"/></li>-->
                                      <li><button type="button" class="btn btn-primary savenexit" data-state="1"  name="exit">Save and Exit</button></li>
                                    <li><button type="button"  class="btn btn-primary next-step" data-state="1">Save and continue</button></li>
                                </ul>
                            </form>
                        </div>
                        <div class="tab-pane <?php echo ($customer_state == 2) ? ' active ' : ' '; ?>" role="tabpanel" id="step2">
                            <form class="form-horizontal form-label-left" action="<?php echo base_url('customerController/saveData');?>" method="post" enctype="multipart/form-data" id="customer_tax">
                                <div class="step2">

                                    <input type="hidden" name="state" id="state" value="2"/>
                                    <input type="hidden" name="customer_id" class="customer_id" value="<?php echo $custdata['id']; ?>"/>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Payment Complete ?</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12 paddingTop8">
                                            <input  name="payment_status"  type="hidden" value="0" />
                                            <input id="payment_status" name="payment_status" <?= ( $custdata['payment_complete'] == "1") ? '   checked ' : ''; ?> type="checkbox" class="js-switch" value="1"/>
                                        </div>
                                    </div>
                                    <div class="form-group payment_reason">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Reason</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12 paddingTop8">
                                            <textarea class="form-control" rows="2" name="customer_payment_reason" id="customer_payment_reason" placeholder="Reason For Payment Not Received"><?php echo $custdata['customer_payment_reason'] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group payment_type">
                                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">
                                            <small class="text-navy">Payment Type</small>
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <div class="radio-inline paddingTop8">
                                                <label>

                                                    <input type="radio" <?= ( $custdata['payment_type'] == "cash") ? '   checked ' : ''; ?> value="cash" value="cash" name="customer_payment" id="optionsRadios1" > Via Cash
                                                </label>
                                            </div>
                                            <div class="radio-inline paddingTop8">
                                                <label>
                                                    <input type="radio" value="cheque" <?= ( $custdata['payment_type'] == "cheque") ? '   checked ' : ''; ?> id="optionsRadios2" name="customer_payment"> Via Cheque
                                                </label>
                                                <label>
                                                    <input type="hidden" placeholder="Cheque no"  name="cheque_no" value="0">
                                                    <input type="text" placeholder="Cheque no"  id="cheque_no" name="cheque_no" value="<?php echo $custdata['cheque_no']; ?>">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Tax Payment Complete ?</label>
                                        <div class="col-md-8 col-sm-8 col-xs-12 paddingTop8">

                                            <input name="tax_payment_status" type="hidden"   value="0" />
                                            <input id="tax_payment_status" name="tax_payment_status"  <?= ( $custdata['tax_complete'] == "1") ? '   checked ' : ''; ?>  type="checkbox" class="js-switch" unchecked value="1" />
                                        </div>
                                    </div>
                                    <div class="form-group tax_payment_reason">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Reason</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea class="form-control" name="tax_payment_reason" rows="2" placeholder="Reason For Tax Payment Not Received"><?php echo $custdata['tax_fail_reason'] ?></textarea>
                                        </div>
                                    </div>
                                    <!--                       <div class="form-group selection_of_registration_no">
                                                            <label class="col-md-3 col-sm-3 col-xs-12 control-label">
                                                              <small class="text-navy">Selection of Registration No. ? </small>
                                                            </label>
                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                  <input name="selection_of_registration_no" id="selection_of_registration_no" type="checkbox" class="js-switch" unchecked />
                                                           </div>
                                                           </div>-->




                                </div>
                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="btn btn-default prev-step" data-state="2">Previous</button></li>
                                      <li><button type="button" class="btn btn-primary savenexit" data-state="2"  name="exit">Save and Exit</button></li>
                                    <li><button type="button"  class="btn btn-primary next-step" data-state="2">Save and continue</button></li>
                                </ul>
                            </form>
                        </div>
                        <div class="tab-pane <?php echo ($customer_state == 3) ? ' active ' : ' '; ?>" role="tabpanel" id="step3">
                            <form class="form-horizontal form-label-left" action="<?php echo base_url('customerController/saveData');?>" method="post" enctype="multipart/form-data" id="customer_registrationdetail">
                                <div class="step33">

                                    <input type="hidden" name="state" id="state" value="3"/>
                                    <input type="hidden" name="customer_id" class="customer_id" value="<?php echo $custdata['id']; ?>"/>
                                    <div class="form-group registration_no_type">
                                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">
                                            <small class="text-navy">Registration No. Type</small>
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <select class="form-control" id="registration_no_type" name="registration_no_type">
                                                <option  <?= ( $custdata['registration_no_type'] == "regular_no") ? '   selected ' : ''; ?>  value="regular_no">Regular No</option>
                                                <option <?= ( $custdata['registration_no_type'] == "choice_no") ? '   selected ' : ''; ?> value="choice_no">Choice No</option>
                                                <option <?= ( $custdata['registration_no_type'] == "vip_no") ? '   selected ' : ''; ?> value="vip_no">VIP NO</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group document_given_to_agent_for_regular_no">
                                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">
                                            <small class="text-navy">Document Given to Agent </small>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12 paddingTop8">
                                            <input name="document_given_to_agent_for_regular_no"  type="hidden"   value="0" />
                                            <input name="document_given_to_agent_for_regular_no" id="document_given_to_agent_for_regular_no" type="checkbox" <?= ( $custdata['document_given_customer'] == "1") ? '   checked ' : ''; ?>   class="js-switch"   value="1"/>
                                        </div>
                                    </div>
                                    <div class="form-group select_no_for_choice">
                                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">
                                            <small class="text-navy">Select No. ? </small>
                                        </label>
                                        <div class="col-md-1 col-sm-1 col-xs-12 paddingTop8">
                                            <input name="select_no_for_choice"  type="hidden"   value="0" />
                                            <input name="select_no_for_choice"  <?= ( $custdata['no_for_choice'] == "1") ? '   checked ' : ''; ?>  id="select_no_for_choice" type="checkbox" class="js-switch" value="1"  />
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-12 choice_no_field">
                                            <label class="col-sm-5 col-xs-12 control-label">
                                                <small class="text-navy">Choice No</small>
                                            </label>
                                            <div class="col-sm-7 col-xs-12">
                                                <input name="choice_no_type" value="<?php echo $custdata['choice_no_type']; ?>" class="form-control" id="choice_no_type"  type="text"  />

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group document_given_to_agent_for_choice_no">
                                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">
                                            <small class="text-navy">Document Given to Agent</small>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12 paddingTop8">
                                            <input name="document_given_to_agent_for_choice_no"  type="hidden"   value="0" />
                                            <input name="document_given_to_agent_for_choice_no" id="document_given_to_agent_for_choice_no" type="checkbox" <?= ( $custdata['document_for_no_choice'] == "1") ? '   checked ' : ''; ?>  value="1" class="js-switch"  />
                                        </div>
                                    </div>





                                </div>
                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="btn btn-default prev-step" data-state="3">Previous</button></li>
                                      <li><button type="button" class="btn btn-primary savenexit" data-state="3"  name="exit">Save and Exit</button></li>
                                    <li><button type="button" class="btn btn-primary btn-info-full next-step" data-state="3">Save and continue</button></li>
                                </ul>
                            </form>
                        </div>
                        <div class="tab-pane <?php echo ($customer_state == 4) ? ' active ' : ' '; ?>" role="tabpanel" id="step4">
                            <form class="form-horizontal form-label-left" action="<?php echo base_url('customerController/saveData');?>" method="post" enctype="multipart/form-data" id="customer_number">
                                <div class="step44">

                                    <input type="hidden" name="state" id="state" value="4"/>
                                    <input type="hidden" name="customer_id" class="customer_id" value="<?php echo $custdata['id']; ?>"/>
                                    <div class="form-group no_given_to_cus">
                                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">
                                            <small class="text-navy">No. Given to Customer ? </small>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input name="no_given_to_customor"  type="hidden" class="js-switch" value="0"  />
                                            <input name="no_given_to_customor" id="no_given_to_customor" type="checkbox" class="js-switch" value="1" <?= ( $custdata['no_given_customer'] == "1") ? '   checked ' : ''; ?>  />
                                        </div>
                                    </div>
                                    <div class="form-group call_agent">
                                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">
                                            <small class="text-navy">Call Agent RC Card Dispatched or Not ? </small>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input name="call_agent"  type="hidden" class="js-switch"  value="0" />
                                            <input name="call_agent" id="call_agent" type="checkbox" class="js-switch" <?= ( $custdata['call_agent_rc'] == "1") ? '   checked ' : ''; ?>  value="1"/>
                                        </div>
                                    </div>
                                     <div class="form-group photo_agent_upload">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Reason</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="file" id="rc_file" name="files" class="form-control"/>
                                            <input type="hidden" id="file_name"  name="file_name" class="form-control"/>
                                            <div class="image_show">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group call_agent_reason">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Reason</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea class="form-control" id="rc_reason" name="rc_reason" rows="2" placeholder="RC Not Received"><?php echo $custdata['rc_dispached_not_reason'] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="show_information_notification">
                                        <div class="alert alert-info alert-dismissable">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">�</a>
                                            Take Follow-up by SC for confirmation of Registration No.
                                        </div>
                                        <div class="alert alert-info alert-dismissable">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">�</a>
                                            Told Customer RC Card reached at your address within 15 days.
                                        </div>
                                    </div>

                                </div>
                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="btn btn-default prev-step" data-state="4">Previous</button></li>
                                    <li><button type="button"  class="btn btn-primary btn-info-full next-step" data-state="4">Save and continue</button></li>
                                </ul>
                            </form>
                        </div>
                        <div class="tab-pane <?php echo ($customer_state == 5) ? ' active ' : ' '; ?>" role="tabpanel" id="complete">

                                <form class="form-horizontal form-label-left" action="<?php echo base_url('customerController/saveData');?>"  method="post" enctype="multipart/form-data" id="customer_rc">
                            <div class="step55">

                                    <input type="hidden" name="state" id="state" value="5"/>
                                    <input type="hidden" name="customer_id" class="customer_id" value="<?php echo $custdata['id']; ?>"/>
                                      <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Delivery Date <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input class="form-control" id="inputSuccess3_edit" name="delivery_date" placeholder="Delivery Date" type="text" value="<?php echo date('d-m-Y h:i:s',  strtotime($custdata['delivery_date']));  ?>" readonly="">
                                            <!--date('d-m-Y h:i A',strtotime($custdata['delivery_date']));-->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Branch <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select class="form-control edit" name="branch" id="branch_edit">
                                                <option <?php echo ($custdata['branch'] == "indore") ? " selected " : " " ?> value="indore">Ford Indore</option>
                                                <option <?php echo ($custdata['branch'] == "sagar") ? " selected " : " " ?> value="sagar">Ford Sagar</option>
                                                <option <?php echo ($custdata['branch'] == "khargone") ? " selected " : " " ?> value="khargone">Ford Khargone</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Customer Full Name <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input class="form-control edit" id="inputSuccess3_edit" name="customer_name" value="<?php echo $custdata['customer_name'] ?>" placeholder="Full Name" type="text">
                                            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Vehicle Name <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select class="form-control edit" name="vehicle_name" id="vehicle_name_edit">

                                                <option  <?php echo ($custdata['vehicle_name'] == "Ford EcoSport") ? " selected " : " " ?>  value="Ford EcoSport">Ford EcoSport</option>
                                                <option  <?php echo ($custdata['vehicle_name'] == "Ford Figo") ? " selected " : " " ?>  value="Ford Figo">Ford Figo</option>
                                                <option  <?php echo ($custdata['vehicle_name'] == "Ford Aspire") ? " selected " : " " ?>  value="Ford Aspire">Ford Aspire</option>
                                                <option  <?php echo ($custdata['vehicle_name'] == "Ford Mustang") ? " selected " : " " ?>  value="Ford Mustang">Ford Mustang</option>
                                                <option  <?php echo ($custdata['vehicle_name'] == "Ford Fiesta") ? " selected " : " " ?>  value="Ford Fiesta">Ford Fiesta</option>
                                                <option  <?php echo ($custdata['vehicle_name'] == "Ford Classic") ? " selected " : " " ?>  value="Ford Classic">Ford Classic</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Engine Vin Number <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input class="form-control edit" id="inputSuccess7_edit" name="customer_chesisno" placeholder="Chasis Number" value="<?php echo $custdata['engine_chesis_no']; ?>" type="text">
                                            <span class="fa fa-automobile form-control-feedback right" aria-hidden="true">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Mobile Number</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input class="form-control edit" id="inputSuccess5_edit" name="customer_mobno" placeholder="Mobile" type="text" value="<?php echo $custdata['mobile_no'] ?>">
                                            <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Phone Number</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input class="form-control edit" id="inputSuccess6_edit" name="customer_phone" placeholder="Phone" type="text" value="<?php echo $custdata['phone_no'] ?>">
                                            <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>  </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12 edit">Follow Up</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea name="followup" id="followup_edit" class="form-control edit" placeholder="Comment Here"><?php echo $custdata['followup']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Sales Consultant</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input class="form-control has-feedback-right edit" name="consultant_name" id="consultant_name_edit" placeholder="Consultant name" value="<?php echo $custdata['consultant_name']; ?>" type="text">
                                            <span class="fa fa-user form-control-feedback right" aria-hidden="true">

                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input class="form-control has-feedback-right edit" name="customer_email" id="inputSuccess4_edit" placeholder="Email" type="text" value="<?php echo $custdata['email'] ?>">
                                            <span class="fa fa-envelope form-control-feedback right" aria-hidden="true"></span>  </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Balance Amount</label>
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                            <select class="form-control edit remaining_amt" name="remaining_amt" id="remaining_amt_edit">
                                                <option <?php echo ($custdata['remaining_amt'] == "0") ? " selected " : " " ?> value="0">No</option>
                                                <option <?php echo ($custdata['remaining_amt'] == "1") ? " selected " : " " ?> value="1">Yes</option>
                                            </select>

                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-12">

                                            <input placeholder="Amount" type="text" class="form-control edit amount" name='amount' id="amount_edit" value="<?php echo $custdata['amount']; ?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Finance</label>
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                            <select class="form-control edit finance" name="finance" id="finance_edit">
                                                <option <?php echo ($custdata['finance'] == "0") ? " selected " : " " ?> value="0">No</option>
                                                <option <?php echo ($custdata['finance'] == "1") ? " selected " : " " ?> value="1">Yes</option>
                                            </select>

                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-12">

                                            <input placeholder="Bank Name" type="text" class="form-control edit bank_name" name='bank_name' id="bank_name_edit" value="<?php echo $custdata['bank_name'] ?>"/>
                                        </div>
                                    </div>




                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Insurance</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">

                                            <select class="form-control edit" name="insurance" id="insurance_edit">
                                                <option <?php echo ($custdata['insurance'] == "vapl") ? " selected " : " " ?> value="vapl">VAPL</option>
                                                <option <?php echo ($custdata['insurance'] == "self") ? " selected " : " " ?> value="self">Self</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Vehicle Registration</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">

                                            <select class="form-control edit" name="vehicle_reg" id="vehicle_reg_edit">
                                                <option <?php echo ($custdata['vehicle_reg'] == "normal") ? " selected " : " " ?> value="normal">Normal</option>
                                                <option <?php echo ($custdata['vehicle_reg'] == "c/o") ? " selected " : " " ?> value="c/o">C/O</option>
                                                <option <?php echo ($custdata['vehicle_reg'] == "tr") ? " selected " : " " ?> value="tr">TR</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Customer Address <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea id="customer_address_edit" class="form-control edit" rows="3" name="customer_address" placeholder="Address"><?php echo $custdata['address'] ?></textarea>
                                        </div>
                                    </div>





                            </div>
                            <ul class="list-inline pull-right">
                                <li><button type="button" class="btn btn-default prev-step" data-state="5">Previous</button></li>
                                <li><button type="button" class="btn btn-info edit_field" data-state="5">Edit</button></li>
                                <li><button type="button" class="btn btn-primary btn-info-full finish-step" data-state="5">Finish</button></li>
                            </ul>
                            </form>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                </div>
            </section>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $("body").find('.edit').attr('disabled',true);
        $('body').on('click','.edit_field',function(){
           $(this).text('Save');
           $(this).removeClass('edit_field');
           $(this).addClass('save_field');
        $("body").find('.edit').attr('disabled',false);
        });
        $('body').on('click','.save_field',function(){
           $(this).text('Edit');
           $(this).removeClass('save_field');
           $(this).addClass('edit_field');
        $("body").find('.edit').attr('disabled',true);
        });
    });

    function nextTab(elem) {
        $(elem).next().find('a[data-toggle="tab"]').click();
    }
    function prevTab(elem) {
        $(elem).prev().find('a[data-toggle="tab"]').click();
    }


//according menu

    $(document).ready(function ()
    {
        //Add Inactive Class To All Accordion Headers
        $('.accordion-header').toggleClass('inactive-header');

        //Set The Accordion Content Width
        var contentwidth = $('.accordion-header').width();
        $('.accordion-content').css({});

        //Open The First Accordion Section When Page Loads
        $('.accordion-header').first().toggleClass('active-header').toggleClass('inactive-header');
        $('.accordion-content').first().slideDown().toggleClass('open-content');

        // The Accordion Effect
        $('.accordion-header').click(function () {
            if ($(this).is('.inactive-header')) {
                $('.active-header').toggleClass('active-header').toggleClass('inactive-header').next().slideToggle().toggleClass('open-content');
                $(this).toggleClass('active-header').toggleClass('inactive-header');
                $(this).next().slideToggle().toggleClass('open-content');
            } else {
                $(this).toggleClass('active-header').toggleClass('inactive-header');
                $(this).next().slideToggle().toggleClass('open-content');
            }
        });

        return false;
    });



</script>
<script type="text/javascript">
    $(document).ready(function () {
        var finance = $('#finance').val();
        if (finance == 0) {
            $("#bank_name").hide();
            $("#bank_name").val('');
        } else {
            $("#bank_name").show();

        }
        var finance = $('#finance_edit').val();
        if (finance == 0) {
            $("#bank_name_edit").hide();
            $("#bank_name_edit").val('');
        } else {
            $("#bank_name_edit").show();

        }
        var amount = $('#remaining_amt').val();
        if (amount == 0) {
            $("#amount").hide();
            $("#amount").val('');
        } else {
            $("#amount").show();

        }
        var amount = $('#remaining_amt_edit').val();
        if (amount == 0) {
            $("#amount_edit").hide();
            $("#amount_edit").val('');
        } else {
            $("#amount_edit").show();

        }
        $('body').on('change', '#remaining_amt', function () {
            var amount = $(this).val();
            if (amount == 0) {
                $("#amount").hide();
                $("#amount").val('');
            } else {
                $("#amount").show();

            }
        });
        $('body').on('change', '#remaining_amt_edit', function () {
            var amount = $(this).val();
            if (amount == 0) {
                $("#amount_edit").hide();
                $("#amount_edit").val('');
            } else {
                $("#amount_edit").show();

            }
        });
        //cheque no
         //cheque no
         if($('#optionsRadios1').is(':checked')){
            $("#cheque_no").hide();

         }
        $("body").on('click', '#optionsRadios1', function () {

            $("#cheque_no").hide();
            $("#cheque_no").val("");
        });
        $("body").on('click', '#optionsRadios2', function () {

            $("#cheque_no").show();

        });

        $('body').on('change', '#finance', function () {
            var finance = $(this).val();
            if (finance == 0) {
                $("#bank_name").hide();
                $("#bank_name").val('');
            } else {
                $("#bank_name").show();

            }
        });
        $('body').on('change', '#finance_edit', function () {
            var finance = $(this).val();
            if (finance == 0) {
                $("#bank_name_edit").hide();
                $("#bank_name_edit").val('');
            } else {
                $("#bank_name_edit").show();

            }
        });
        //Initialize tooltips
        $('.nav-tabs > li a[title]').tooltip();

        //Wizard
        $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

            var $target = $(e.target);

            if ($target.parent().hasClass('disabled')) {
                return false;
            }
        });

        $(".finish-step").click(function (e) {
            var stepnumber = $(this).attr('data-state');

            var isStepValid = true;
            if (stepnumber == 5) {
                // Your step validation logic
                // set isStepValid = false if has errors

                if (!$("#customer_rc").valid()) {
                    isStepValid = false;

                } else {
                    isStepValid = true
                    $(".edit").attr('disabled',false);
                    var formData = $("#customer_rc").serialize();
                    var formId = $("#customer_rc");
//                    alert(formData);
                   var flag =  submitForm(formId, formData);

                    $(".edit").attr('disabled',true);
                    if(flag){

                     location.href = base_url + "customer/search";
                    }
                }

            }
        });
        $(".next-step").click(function (e) {



            var stepnumber = $(this).attr('data-state');

            var isStepValid = true;
            if (stepnumber == 1) {
                // Your step validation logic
                // set isStepValid = false if has errors

                if (!$("#customer_registration").valid()) {
                    isStepValid = false;

                } else {
                    isStepValid = true
                    var formData = $("#customer_registration").serialize();
                    var formId = $("#customer_registration");
                   var flag =  submitForm(formId, formData);


                    if(flag){

                    var $active = $('.wizard .nav-tabs li.active');
                    $active.next().removeClass('disabled');
                    nextTab($active);
                    }
                }

            } else if (stepnumber == 2) {
                if (!$("#customer_tax").valid()) {
                    isStepValid = false

                } else {
                    isStepValid = true
                    var formData = $("#customer_tax").serialize();
                    var formId = $("#customer_tax");
                    var flag = submitForm(formId, formData);
                    if(flag){

                    var $active = $('.wizard .nav-tabs li.active');
                    $active.next().removeClass('disabled');
                    nextTab($active);
                    }
                }
            } else if (stepnumber == 3) {
                if (!$("#customer_registrationdetail").valid()) {
                    isStepValid = false

                } else {
                    isStepValid = true
                    var formData = $("#customer_registrationdetail").serialize();
                    var formId = $("#customer_registrationdetail");
                   var flag = submitForm(formId, formData);
                    if(flag){

                    var $active = $('.wizard .nav-tabs li.active');
                    $active.next().removeClass('disabled');
                    nextTab($active);
                    }
                }
            } else if (stepnumber == 4) {
                if (!$("#customer_number").valid()) {
                    isStepValid = false

                } else {
                    isStepValid = true
                    var formData = $("#customer_number").serialize();
                    var formId = $("#customer_number");
                    var flag = submitForm(formId, formData);
                    if(flag){

                    var $active = $('.wizard .nav-tabs li.active');
                    $active.next().removeClass('disabled');
                    nextTab($active);
                    }

                }
            } else if (stepnumber == 5) {
                if (!$("#customer_rc").valid()) {
                    isStepValid = false

                } else {
                    isStepValid = true
                    var formData = $("#customer_rc").serialize();
                    var formId = $("#customer_rc");
                    flag = submitForm(formId, formData);
                    if(flag){

                    var $active = $('.wizard .nav-tabs li.active');
                    $active.next().removeClass('disabled');
                    nextTab($active);
                    }
                }
            } else {
                isStepValid = true

            }







        });
         var base_url = $('body').find('#base_url').val();
              var options = {

        success:function(data){
            var data = $.parseJSON(data);

                if (data.flag) {
                    $('body').find('.customer_id').val(data.custíd);
                    if (data.redirect) {
                        location.href = base_url + "customer/search";
                    }

                }
        }
        // post-submit callback


    };
//            ajax file uplaod

            $("#rc_file").AjaxFileUpload({
                                action: base_url+"customer/upload",
				onComplete: function(filename, response) {
					$("#file_name").val(filename);
                                        $(".image_show").empty();
                                        var name = base_url+"/rc_document/"+filename;
                                        $(".image_show").html("<img height='100' class='thumbnail' width='150' src='"+name+"'>");


				}
			});



//         $('#customer_registration').ajaxForm({
//       beforeSubmit: function(data){ return $("#customer_registration").valid()},
//        success:function(data){
//            var data = $.parseJSON(data);
//
//                if (data.flag) {
//                    $('body').find('.customer_id').val(data.custíd);
//                    if (data.redirect) {
//                        location.href = base_url + "customer/search";
//                    }
//
//                }
//        }
//        // post-submit callback
//
//
//    });
//        $('#customer_tax').ajaxForm({
//       beforeSubmit: function(data){ return $("#customer_tax").valid() },
//        success:function(data){
//            var data = $.parseJSON(data);
//
//                if (data.flag) {
//                    $('body').find('.customer_id').val(data.custíd);
//                    if (data.redirect) {
//                        location.href = base_url + "customer/search";
//                    }
//
//                }
//        }
//        // post-submit callback
//
//
//    });
//        $('#customer_registrationdetail').ajaxForm({
//       beforeSubmit:function(data){  $("#customer_registrationdetail").valid()},
//        success:function(data){
//            var data = $.parseJSON(data);
//
//                if (data.flag) {
//                    $('body').find('.customer_id').val(data.custíd);
//                    if (data.redirect) {
//                        location.href = base_url + "customer/search";
//                    }
//
//                }
//        }
//        // post-submit callback
//
//
//    });
//        $('#customer_number').ajaxForm({
//       beforeSubmit: function(data){ return $("#customer_number").valid()},
//        success:function(data){
//            var data = $.parseJSON(data);
//
//                if (data.flag) {
//                    $('body').find('.customer_id').val(data.custíd);
//                    if (data.redirect) {
//                        location.href = base_url + "customer/search";
//                    }
//
//                }
//        }
//        // post-submit callback
//
//
//    });
//        $('#customer_rc').ajaxForm({
//       beforeSubmit: function(data){  return $("#customer_rc").valid() },
//        success:function(data){
//            var data = $.parseJSON(data);
//
//                if (data.flag) {
//                    $('body').find('.customer_id').val(data.custíd);
//                    if (data.redirect) {
//                        location.href = base_url + "customer/search";
//                    }
//
//                }
//        }
//        // post-submit callback
//
//
//    });

        $(".prev-step").click(function (e) {

            var $active = $('.wizard .nav-tabs li.active');
            prevTab($active);

        });




        $('body').on('click', '.next-step', function (e) {


        });




        $("#customer_registration").validate({
            rules: {
                customer_name: {
                    required: true,
                    minlength: 3
                },
                customer_email: {
//                    required: true,
                    email: true
                },
                customer_mobno: {
                    required: true,
                    minlength: 10,
                    maxlength: 10,
                    number: true
                },
                customer_phone: {
//                    required: true,
                    minlength: 10,
                    maxlength: 10,
                    number: true
                },
                customer_address: {
                    required: true,
                    minlength: 10,
                    maxlength: 100
                },
                customer_chesisno: {
                    required: true,
                    minlength:7,
                    maxlength:7
                },
//                payment_status: "required",
//                documents_status: "required",
//                "document[]": {
//                    required: function (element) {
//                        return $('#documents_status').val()
//                    }
//                },
                amount: {
                    required: function (element) {
                        if ($('#remaining_amt').val() == 1) {
                            return true;
                        } else {
                            return false;

                        }
                    },
                    number: true
                },
                bank_name: {
                    required: function (element) {
                        if ($('#finance').val() == 1) {
                            return true;
                        } else {
                            return false;

                        }
                    }
                },
                consultant_name: "required",
                documents_status: "required",
                vehicle_name: "required",
                branch: "required",
                insurance: "required",
                vehicle_reg: "required",

            }, messages: {
                customer_name: {required: "Customer Name is Required"},
                customer_email: {required: "Customer Email is required"},
                customer_mobno: {required: "Customer Mobile no is required"},
                customer_phone: {required: "Customer Phone no is required"},
                customer_address: {required: "Customer address is required"},
                customer_chesisno: {required: "Vehicle Chesis no is required"},
                payment_status: {required: "Payment Status is required"},
                amount: {required: "Amount is required"},
                bank_name: {required: "Bank name is required"},
               consultant_name: {required: "Consultant name is required"},
                documents_status: {required: "Document Status is required"},
                cheque_no: {required: "Document Status is required"},
                amount: {required: "Amount is required"},
                vehicle_reg: {required: "Vehicle Registration is required"},
                bank_name: {required: "Bank name is required"},
                insurance: {required: "Insurance name is required"},
                vehicle_name: {required: "Vehicle Name is required"},
                branch: {required: "Branch Name is required"},
                "document[]": {required: "Document Type is required"}
            }
        });
        //
        $("#customer_tax").validate({
            rules: {
                customer_payment_reason:"required",
                tax_payment_reason: "required",
                cheque_no: {
                    required: function (element) {
                        return $('#optionsRadios2').is(':checked')
                    }
                }

            }, messages: {
                tax_payment_status: "Tax Payment is Required",
                tax_payment_reason: "Reason is required",
                 customer_payment_reason: {required: "Payment Reason is required"},

                  cheque_no: {required: "Cheque no is required"},
            }
        });
        $("#customer_registrationdetail").validate({
            rules: {
                registration_no_type: "required",
                choice_no_type: {
                    required:true,

                }
//                document_given_to_agent_for_regular_no: "required",
            }, messages: {
                registration_no_type: "registration no is Required",
                document_given_to_agent_for_regular_no: "Docuemnt check is  required",
                 choice_no_type: {reuired:"No is Requied"}
            }
        });
        $("#customer_number").validate({
            rules: {
                no_given_to_customor: "required",
//                call_agent: "required",
                rc_reason: "required",
                files:"required"
            }, messages: {
                no_given_to_customor: "No given to customer is Required",
//                call_agent: "Call Agent RC Card Dispatched is required",
                rc_reason: "Call Agent RC Card Dispatched reason is required",
                files:"RC Document is required"
            }
        });
        $("#customer_rc").validate({
            rules: {
//                call_agent: "required",
//                rc_reason: "required"
            }, messages: {
                call_agent: "Call Agent RC Card Dispatched is required",
                rc_reason: "Call Agent RC Card Dispatched reason is required"
            }
        });
        //next button event

        $('body').on('click', '.buttonNext', function () {


        });


        /****************************************************************************************/
        $('.buttonNext').addClass('btn btn-success');
        $('.buttonPrevious').addClass('btn btn-primary');
        $('.buttonFinish').addClass('btn btn-default');
        if ($("#payment_status").is(":checked")) {
            $(".payment_reason").hide();
        } else {
            $(".payment_type").hide();

        }

        $("body").on('change', '#documents_status', function () {
            if ($(this).val() == '1') {
                $(".document_type").show();
                $("#pencard").prop('checked', 'checked');
                $("#drivinglic").prop('checked', 'checked');
                $("#passport").prop('checked', 'checked');
                if($("#finance").val()=='1'){

                $("#bankdoletter").prop('checked', 'checked');
                }
            } else if ($(this).val() == '0') {
                $("#pencard").removeAttr('checked');
                $("#drivinglic").removeAttr('checked');
                $("#passport").removeAttr('checked');
                $("#bankdoletter").removeAttr('checked');
                $(".document_type").show();
            } else {
                $(".document_type").hide();
            }
        });

        if ($("#tax_payment_status").is(":checked")) {
            $(".tax_payment_reason").hide();
        } else {
            $(".tax_payment_reason").show();
        }
        if ($("#registration_no_type").val() == 'regular_no') {
            $(".document_given_to_agent_for_regular_no").show();
            $(".select_no_for_choice").hide();
             $(".choice_no_field").hide();
            $(".document_given_to_agent_for_choice_no").hide();
        } else if ($("#registration_no_type").val() == 'choice_no') {
            $(".document_given_to_agent_for_regular_no").hide();
            $(".select_no_for_choice").show();
                $(".choice_no_field").show();

            if ($("#select_no_for_choice").is(":checked")) {
                $(".document_given_to_agent_for_choice_no").show();
            } else {

                $(".document_given_to_agent_for_choice_no").hide();
            }
        }
        if ($("#no_given_to_customor").is(":checked")) {
            $(".show_information_notification").hide();
        } else {
            $(".show_information_notification").show();
        }

        if ($("#call_agent").is(":checked")) {
            $(".call_agent_reason").hide();
            $(".photo_agent_upload").show();
        } else {
            $(".photo_agent_upload").hide();
            $(".call_agent_reason").show();
        }

        $("#payment_status").change(function () {
            if ($(this).is(":checked")) {

                $(".payment_reason").hide();
                $(".payment_type").show();
            } else {
                $(".payment_reason").show();
                $(".payment_type").hide();
            }
        });
//        $("#documents_status").change(function () {
//            if ($(this).is(":checked")) {
//
//
//                $(".document_type").show();
//            } else {
//
//                $(".document_type").hide();
//            }
//        });
        $("#tax_payment_status").change(function () {
            if ($(this).is(":checked")) {

                $(".tax_payment_reason").hide();
                //$(".selection_of_registration_no").show();
            } else {
                $(".tax_payment_reason").show();
                //  $(".selection_of_registration_no").hide();
            }
        });
        $("#selection_of_registration_no").change(function () {
            if ($(this).is(":checked")) {

                $(".registration_no_type").hide();
                $(".no_given_to_customor").show();
            } else {
                $(".registration_no_type").show();
                $(".no_given_to_customor").hide();
            }
        });
        $("#registration_no_type").change(function () {
            // alert($(this).val());
            if ($(this).val() == 'regular_no') {
                $(".document_given_to_agent_for_regular_no").show();
            }
            if ($(this).val() == 'choice_no') {
                $(".select_no_for_choice").show();
            }

            if ($(this).val() == 'regular_no') {
                $(".document_given_to_agent_for_regular_no").show();
                $(".select_no_for_choice").hide();
                $(".choice_no_field").hide();
                $(".document_given_to_agent_for_choice_no").hide();
            } else if ($(this).val() == 'choice_no') {
                $(".document_given_to_agent_for_regular_no").hide();
                $(".select_no_for_choice").show();
                $(".choice_no_field").show();
                if ($("#select_no_for_choice").is(":checked")) {
                    $(".document_given_to_agent_for_choice_no").show();
                } else {
                    $(".document_given_to_agent_for_choice_no").hide();
                }
            }else if($(this).val() == 'vip_no'){
                 $(".choice_no_field").show();
                 $(".document_given_to_agent_for_regular_no").hide();
                  $(".select_no_for_choice").show();
                  if ($("#select_no_for_choice").is(":checked")) {
                    $(".document_given_to_agent_for_choice_no").show();
                } else {
                    $(".document_given_to_agent_for_choice_no").hide();
                }
            }

        });
        $("#select_no_for_choice").change(function () {
            // alert($(this).val());
            if ($(this).is(":checked")) {
                $(".document_given_to_agent_for_choice_no").show();
            } else {
                $(".document_given_to_agent_for_choice_no").hide();
            }


        });
        $("#no_given_to_customor").change(function () {
            // alert($(this).val());
            if ($(this).is(":checked")) {
                $(".show_information_notification").hide();
            } else {
                $(".show_information_notification").show();
            }


        });
        $("#call_agent").change(function () {

            if ($(this).is(":checked")) {
                $(".call_agent_reason").hide();
            $(".photo_agent_upload").show();
            } else {
               $(".photo_agent_upload").hide();
            $(".call_agent_reason").show();
            }


        });
          $('.savenexit').click(function(){
             var base_url = $("#base_url").val();
               var stepnumber = $(this).attr('data-state');
            var isStepValid = true;

            if (stepnumber == 1) {
                // Your step validation logic
                // set isStepValid = false if has errors

                if (!$("#customer_registration").valid()) {
                    isStepValid = false;
                } else {
                    isStepValid = true
                    var formData = $("#customer_registration").serialize();
//                    alert(formData);
                    var formId = $("#customer_registration");
                    submitForm(formId, formData);
                    location.href= base_url+"customer/search";
                    var $active = $('.wizard .nav-tabs li.active');
                    $active.next().removeClass('disabled');
                    nextTab($active);
                }

            } else if (stepnumber == 2) {
                if (!$("#customer_tax").valid()) {
                    isStepValid = false

                } else {
                    isStepValid = true
                    var formData = $("#customer_tax").serialize();
                    var formId = $("#customer_tax");
                    submitForm(formId, formData);
                      location.href= base_url+"customer/search";
                    var $active = $('.wizard .nav-tabs li.active');
                    $active.next().removeClass('disabled');
                    nextTab($active);
                }
            } else if (stepnumber == 3) {
                if (!$("#customer_registrationdetail").valid()) {
                    isStepValid = false

                } else {
                    isStepValid = true
                    var formData = $("#customer_registrationdetail").serialize();
                    var formId = $("#customer_registrationdetail");
                    submitForm(formId, formData);
                      location.href= base_url+"customer/search";
                    var $active = $('.wizard .nav-tabs li.active');
                    $active.next().removeClass('disabled');
                    nextTab($active);
                }
            } else if (stepnumber == 4) {
                if (!$("#customer_number").valid()) {
                    isStepValid = false

                } else {
                    isStepValid = true
                    var formData = $("#customer_number").serialize();
                    var formId = $("#customer_number");
                    submitForm(formId, formData);
                      location.href= base_url+"customer/search";
                    var $active = $('.wizard .nav-tabs li.active');
                    $active.next().removeClass('disabled');
                    nextTab($active);
                }
            } else if (stepnumber == 5) {
                if (!$("#customer_rc").valid()) {
                    isStepValid = false

                } else {
                    isStepValid = true
                    var formData = $("#customer_rc").serialize();
                    var formId = $("#customer_rc");
                    submitForm(formId, formData);
                      location.href= base_url+"customer/search";
                    var $active = $('.wizard .nav-tabs li.active');
                    $active.next().removeClass('disabled');
                    nextTab($active);
                }
            } else {
                isStepValid = true

            }



         });
         $('body').on('click','#select_no_for_choice',function(){
            var customer_id =  $(".customer_id").val();
            if ($(this).is(":checked")) {
                 $.ajax({
            url: base_url + 'customerController/CheckAmount/'+customer_id,
            async: false,
            success: function (data) {
            var data = $.parseJSON(data);
                if(data.flag==true){
                    alert('Please Complete the Payment First');
                $('#select_no_for_choice').attr('checked', false);
                }}
                 });


            }else{

            }
         });
         $('body').on('click','#document_given_to_agent_for_regular_no',function(){
            var customer_id =  $(".customer_id").val();
            if ($(this).is(":checked")) {
                 $.ajax({
            url: base_url + 'customerController/CheckAmount/'+customer_id,
            async: false,
            success: function (data) {
            var data = $.parseJSON(data);
                if(data.flag==true){
                    alert('Please Complete the Payment First');
                $('#document_given_to_agent_for_regular_no').attr('checked', false);
                }}
                 });


            }else{

            }
         });
    });

    function submitForm(formid, formdata) {
        var base_url = $('body').find('#base_url').val();
        var obj = formid;
        var flag=false;
        $.ajax({
            url: base_url + 'customerController/saveData',
            type: 'POST',
            data: formdata,
            async: false,
            success: function (data) {
                var data = $.parseJSON(data);

                if (data.flag) {

                    $('body').find('.customer_id').val(data.custíd);

                    if(data.state==4){
//                       alert(data.custdata["vehicle_name"]);
                        if(data.custdata!=""){
                           var branch =  data.custdata["branch"];
                           var vehicle_name =  data.custdata["vehicle_name"];
                           var finance =  data.custdata["finance"];
                           var remaining_amt =  data.custdata["remaining_amt"];
                           var vehicle_reg =  data.custdata["vehicle_reg"];
                           if(remaining_amt==0){
                               $("#amount_edit").hide();
                           }
                           if(finance==0){
                               $("#finance_edit").hide();
                           }
                           $("#branch_edit option[value="+branch+"]").prop('selected','selected');
                           $("inputSuccess3_edit").val(data.custdata["customer_name"]);
                           $("#vehicle_name_edit option[value='"+vehicle_name+"']").prop('selected','selected');
                           $("#inputSuccess7_edit").val(data.custdata["engine_chesis_no"]);
                           $("#inputSuccess5_edit").val(data.custdata["mobile_no"]);
                           $("#inputSuccess6_edit").val(data.custdata["phone_no"]);
                           $("#followup_edit").text(data.custdata["followup"]);
                           $("#consultant_name_edit").val(data.custdata["consultant_name"]);
                           $("#inputSuccess4_edit").val(data.custdata["email"]);
                           $("#remaining_amt_edit option[value="+remaining_amt+"]").prop('selected','selected');
                           $("#finance_edit option[value="+finance+"]").prop('selected','selected');
                           $("#vehicle_reg_edit option[value='"+vehicle_reg+"']").prop('selected','selected');
                           $("#customer_address").text(data.custdata["address"]);

                        }
                    }
                     flag = data.flag;
                    if (data.redirect) {
                        flag=false;
                        location.href = base_url + "customer/search";
                    }
                }
            }
        });
        return flag;
    }

</script>


<style>

    .wizard {
        margin: 20px auto;
        background: #fff;
    }

    .wizard .nav-tabs {
        position: relative;
        margin: 40px auto;
        margin-bottom: 0;
        border-bottom-color: #e0e0e0;
    }

    .wizard > div.wizard-inner {
        position: relative;
    }

    .connecting-line {
        height: 2px;
        background: #e0e0e0;
        position: absolute;
        width: 80%;
        margin: 0 auto;
        left: 0;
        right: 0;
        top: 50%;
        z-index: 1;
    }

    .wizard .nav-tabs > li.active > a, .wizard .nav-tabs > li.active > a:hover, .wizard .nav-tabs > li.active > a:focus {
        color: #555555;
        cursor: default;
        border: 0;
        border-bottom-color: transparent;
    }

    span.round-tab {
        width: 70px;
        height: 70px;
        line-height: 70px;
        display: inline-block;
        border-radius: 100px;
        background: #fff;
        border: 2px solid #e0e0e0;
        z-index: 2;
        position: absolute;
        left: 0;
        text-align: center;
        font-size: 25px;
    }
    span.round-tab i{
        color:#555555;
    }
    .wizard li.active span.round-tab {
        background: #fff;
        border: 2px solid #5bc0de;

    }
    .wizard li.active span.round-tab i{
        color: #5bc0de;
    }

    span.round-tab:hover {
        color: #333;
        border: 2px solid #333;
    }

    .wizard .nav-tabs > li {
        width: 20%;
    }

    .wizard li:after {
        content: " ";
        position: absolute;
        left: 46%;
        opacity: 0;
        margin: 0 auto;
        bottom: 0px;
        border: 5px solid transparent;
        border-bottom-color: #5bc0de;
        transition: 0.1s ease-in-out;
    }

    .wizard li.active:after {
        content: " ";
        position: absolute;
        left: 46%;
        opacity: 1;
        margin: 0 auto;
        bottom: 0px;
        border: 10px solid transparent;
        border-bottom-color: #5bc0de;
    }

    .wizard .nav-tabs > li a {
        width: 70px;
        height: 70px;
        margin: 20px auto;
        border-radius: 100%;
        padding: 0;
    }

    .wizard .nav-tabs > li a:hover {
        background: transparent;
    }

    .wizard .tab-pane {
        position: relative;
        padding-top: 50px;
    }

    .wizard h3 {
        margin-top: 0;
    }
    .step1 .row {
        margin-bottom:10px;
    }
    .step_21 {
        border :1px solid #eee;
        border-radius:5px;
        /*    padding:10px;*/
    }
    .step33 {

        border-radius:5px;
        padding-left:10px;
        margin-bottom:10px;
    }
    .dropselectsec {
        width: 68%;
        padding: 6px 5px;
        border: 1px solid #ccc;
        border-radius: 3px;
        color: #333;
        margin-left: 10px;
        outline: none;
        font-weight: normal;
    }
    .dropselectsec1 {
        width: 74%;
        padding: 6px 5px;
        border: 1px solid #ccc;
        border-radius: 3px;
        color: #333;
        margin-left: 10px;
        outline: none;
        font-weight: normal;
    }
    .mar_ned {
        margin-bottom:10px;
    }
    .wdth {
        width:25%;
    }
    .birthdrop {
        padding: 6px 5px;
        border: 1px solid #ccc;
        border-radius: 3px;
        color: #333;
        margin-left: 10px;
        width: 16%;
        outline: 0;
        font-weight: normal;
    }


    /* according menu */
    #accordion-container {
        font-size:13px
    }
    .accordion-header {
        font-size:13px;
        background:#ebebeb;
        margin:5px 0 0;
        padding:7px 20px;
        cursor:pointer;
        color:#fff;
        font-weight:400;
        -moz-border-radius:5px;
        -webkit-border-radius:5px;
        border-radius:5px
    }
    .unselect_img{
        width:18px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }
    .active-header {
        -moz-border-radius:5px 5px 0 0;
        -webkit-border-radius:5px 5px 0 0;
        border-radius:5px 5px 0 0;
        background:#F53B27;
    }
    .active-header:after {
        content:"\f068";
        font-family:'FontAwesome';
        float:right;
        margin:5px;
        font-weight:400
    }
    .inactive-header {
        background:#333;
    }
    .inactive-header:after {
        content:"\f067";
        font-family:'FontAwesome';
        float:right;
        margin:4px 5px;
        font-weight:400
    }
    .accordion-content {
        display:none;
        padding:20px;
        background:#fff;
        border:1px solid #ccc;
        border-top:0;
        -moz-border-radius:0 0 5px 5px;
        -webkit-border-radius:0 0 5px 5px;
        border-radius:0 0 5px 5px
    }
    .accordion-content a{
        text-decoration:none;
        color:#333;
    }
    .accordion-content td{
        border-bottom:1px solid #dcdcdc;
    }



    @media( max-width : 585px ) {

        .wizard {
            width: 90%;
            height: auto !important;
        }

        span.round-tab {
            font-size: 16px;
            width: 50px;
            height: 50px;
            line-height: 50px;
        }

        .wizard .nav-tabs > li a {
            width: 50px;
            height: 50px;
            line-height: 50px;
        }

        .wizard li.active:after {
            content: " ";
            position: absolute;
            left: 35%;
        }
    }
</style>
