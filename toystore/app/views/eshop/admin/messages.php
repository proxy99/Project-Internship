<?php $this->view("admin/header",$data); ?>

<?php $this->view("admin/sidebar",$data); ?>

<style type="text/css">

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

</style>
<table class="table table-striped table-advance table-hover">

        <?php if($mode == "read"): ?>

            <thead>
                <tr>
                    <th>Name</th>
                    <th>Subject</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Date created</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if(isset($messages) && is_array($messages)): ?>
                    <?php foreach($messages as $message): ?>
                        <tr style="position: relative;">
                            <td style="color: blue;"><?=$message->name?></td>
                            <td style="color: blue;"><?=$message->subject?></td>
                            <td><?=$message->email?></td>
                            <td><?=$message->message?></td>
                            <td style="color: red;"><?=date("jS m Y H:i a",strtotime($message->date))?></td>
                            <td>
                                <a href="<?=ROOT?>admin/messages?delete=<?=$message->id?>">
                                    <i class="fa fa-trash-o"></i> Delete
                                </a>    
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
                
                <tr><td colspan="8"><?php Page::show_links() ?></td></tr>
            </tbody>

        <?php elseif($mode == "delete_confirmed"): ?>

            <div class="status alert alert-success">Your message is deleted successfully</div>
            <a href="<?=ROOT?>admin/messages">
                <input type="button" class="btn btn-success pull-right" value="Back to message">
            </a>

        <?php elseif($mode == "delete" && is_object($messages)): ?>

            <div class="status alert alert-danger">Are you sure you want to delete this message ?</div>

            <thead>
                <tr>
                    <th>Name</th>
                    <th>Subject</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Date created</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>  
                <tr style="position: relative;">
                    <td style="color: blue;"><?=$messages->name?></td>
                    <td style="color: blue;"><?=$messages->subject?></td>
                    <td><?=$messages->email?></td>
                    <td><?=$messages->message?></td>
                    <td style="color: red;"><?=date("jS m Y H:i a",strtotime($messages->date))?></td>
                </tr>
                <a href="<?=ROOT?>admin/messages?delete_confirmed=<?=$messages->id?>">
                    <input type="button" class="btn btn-warning pull-right" value="Delete">
                </a>
            </tbody>
        <?php endif; ?>
    
</table>

<?php $this->view("admin/footer",$data); ?>