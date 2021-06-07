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

            .col-md-4 {
                background-color: #eee;
                text-align: center;
                box-shadow: 0 0 20px #aaa;
                border: solid thin #ddd;
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

        </style>

            <div class="col-md-4 mb">
                <div class="white-panel pn">
                    <div class="white-header">
                        <h5>TOP USER</h5>
                    </div>
                    <p><img src="<?=ASSETS . THEME ?>admin/img/ui-zac.jpg" class="img-circle" width="80"></p>
                    <p><b><?= $data['user_data']->name ?></b></p>
                    <div class="row">
                        <div class="col-md-6">
                            <p id="user_text" class="small mt">MEMBER SINCE</p>
                            <p><?= date("jS M Y",strtotime($data['user_data']->date)) ?></p>
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
        </div>
    </section>
</section>

<?php $this->view("footer", $data); ?>