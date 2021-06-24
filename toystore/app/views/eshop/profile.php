<?php $this->view("header", $data); ?>

<section id = "main-content">
    <section class="wrapper">
        <div class="container" style= "padding: 60px 0;">

        <!-- Styling -->
        <style type = "text/css">
            #main-content {
                margin: 0!important;
            }

            .wrapper {
                border-bottom: 1px solid #d3cccc;
            }

            .col-md-6 {
                color: #293444;
            }

            #user_text {
                font-size: 15px;
                color: #0404d5; 
            }

            .p {
                color: #6e93ce;
            }

            .details {
                background-color: #eee;
                box-shadow: 0 0 10px #aaa;
                width: 100%;
                position: absolute;
                min-height: 100px;
                left: 0px;
                padding: 10px;
                z-index: 2;
            }

            .hide {
                display: none;
            }

        </style>
            <!-- Profile data -->
<?php if(is_object($profile_data)): ?>
    <div class="row">
        <div class="col-md-4 mb">
        </div>
        <div class="col-md-4 mb" style="margin-bottom: 30px; background-color: #eee; text-align: center; box-shadow: 0 0 10px #aaa; border: solid thin #ddd;">
            <div class="white-panel pn">
                <div class="white-header">
                    <h5>TOP USER</h5>
                </div>
                <p><img src="<?=ASSETS . THEME ?>admin/img/ui-zac.jpg" class="img-circle" width="80"></p>
                <p><b><?= $profile_data->name ?></b></p>
                <div class="row">
                    <div class="col-md-6">
                        <p id="user_text" class="small mt">MEMBER SINCE</p>
                        <p><?= date("jS M Y",strtotime($profile_data->date)) ?></p>
                    </div>
                    <div class="col-md-6">
                        <p id="user_text" class="small mt">TOTAL SPEND</p>
                        <p>$ 47,60</p>
                    </div>
                </div>
                <hr style="color: #888;">
                <div class="row">
                    <div class="col-md-6">
                        <p id="user_text" class="small mt" style="cursor: pointer; color: #13b8ea;"><i class="fa fa-edit"></i> EDIT</p>
                    </div>
                    <div class="col-md-6">
                        <p id="user_text" class="small mt" style="cursor: pointer; color: #e18b57;">DELETE</p>
                    </div>
                </div>
            </div>
        </div><!-- /col-md-4 -->
        <div class="col-md-4 auto">
        </div>
    </div>    
        <!-- End profile data -->
    <?php if(is_array($orders)): ?>

        <table class="table">
            <thead>
                <tr>
                    <th>Order No</th>
                    <th>Order Date</th>
                    <th>Amount</th>
                    <th>Delivery Address</th>
                    <th>City/State</th>
                    <th>Mobile Phone</th>
                    <th>...</th>
                </tr>
            </thead>
            <tbody onclick="show_details(event)">
                <?php foreach($orders as $order): ?>
                    <tr style="position: relative;">
                        <td style="color: var(--blue-3);"><?=$order->id?></td>
                        <td style="color: var(--red-2);"><?=date("jS m Y H:i a",strtotime($order->date))?></td>
                        <td style="color: #85BB65;">$<?=$order->total?></td>
                        <td><?=$order->delivery_address?></td>
                        <td style="color: var(--orange);"><?=$order->state?></td>
                        <td><?=$order->mobile_phone?></td>
                        <td>
                            <i class="fa fa-arrow-down"></i>
                            <div class="js-order-details details hide">
                                <a style="float:right; cursor: pointer;">Close</a>
                                <h3>Order <span style="color: var(--blue-3)">#<?=$order->id?></span></h3>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Quantity</th>
                                            <th>Description</th>
                                            <th>Amount</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <?php if(isset($order->details) && is_array($order->details)): ?>
                                        <?php foreach($order->details as $detail): ?>
                                            <tbody>
                                                <tr>
                                                    <td><?=$detail->qty?></td>
                                                    <td><?=$detail->description?></td>
                                                    <td><?=$detail->amount?></td>
                                                    <td><?=$detail->total?></td>
                                                </tr>
                                            </tbody>
                                        <?php endforeach; ?>
                                        
                                    <?php else: ?>
                                        <div>No order details were found for this order</div>
                                    <?php endif; ?>
                                </table>
                                <h3 class="pull-right">Grand Total: <span style="color: #85BB65">$<?=$order->grand_total?></span></h3>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <h3 style="text-align: center;">This user doesn't have any order yet</h3>
    <?php endif; ?>

<?php else: ?>
    <h3 style="text-align: center;">Sorry, this account is not available</h3>
<?php endif; ?>

        </div>
    </section>
</section>

<script type="text/javascript">

    function show_details(e) {

        var row = e.target.parentNode;
        if(row.tagName != "TR") {
            row = row.parentNode;
        }
        var details = row.querySelector(".js-order-details");
        
        //get all rows
        var all = e.currentTarget.querySelectorAll(".js-order-details");
        for (var i = 0; i < all.length; i++) {
            if(all[i] != details) {
                all[i].classList.add("hide");
            }
        }

        if(details.classList.contains("hide")) {
            details.classList.remove("hide");
        }
        else {
            details.classList.add("hide");
        }
    }
</script>

<?php $this->view("footer", $data); ?>