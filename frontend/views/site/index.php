<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="pd-30">
    <h4 class="tx-gray-800 mg-b-5">Dashboard</h4>
    <p class="mg-b-0">Do big things with Bracket, the responsive bootstrap 4 admin template.</p>
</div><!-- d-flex -->

<div class="br-pagebody mg-t-5 pd-x-30">
    <div class="br-section-wrapper">
        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Top Label Layout</h6>
        <p class="mg-b-30 tx-gray-600">A form with a label on top of each form control.</p>

        <div class="form-layout form-layout-1">
            <div class="row mg-b-25">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Firstname: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="firstname" value="John Paul" placeholder="Enter firstname">
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Lastname: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="lastname" value="McDoe" placeholder="Enter lastname">
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Email address: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="email" value="johnpaul@yourdomain.com" placeholder="Enter email address">
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-8">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Mail Address: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="address" value="Market St. San Francisco" placeholder="Enter address">
                    </div>
                </div><!-- col-8 -->
                <div class="col-lg-4">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Country: <span class="tx-danger">*</span></label>
                        <select class="form-control select2" data-placeholder="Choose country">
                            <option label="Choose country"></option>
                            <option value="USA">United States of America</option>
                            <option value="UK">United Kingdom</option>
                            <option value="China">China</option>
                            <option value="Japan">Japan</option>
                        </select>
                    </div>
                </div><!-- col-4 -->
            </div><!-- row -->

            <div class="form-layout-footer">
                <button class="btn btn-info">Submit Form</button>
                <button class="btn btn-secondary">Cancel</button>
            </div><!-- form-layout-footer -->
        </div><!-- form-layout -->



    </div><!-- br-section-wrapper -->

</div><!-- br-pagebody -->
