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
    <thead>
        <tr>
            <th>User ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Date Created</th>
            <th>Orders count</th>
            <th>...</th>
        </tr>
    </thead>
    <tbody>
        <?php if(isset($users) && is_array($users)): ?>
            <?php foreach($users as $user): ?>
                <tr style="position: relative;">
                    <td style="color: blue;"><?=$user->id?></td>
                    <td style="color: blue;"><a href="<?=ROOT?>profile/<?=$user->url_address?>"><?=$user->name?></a></td>
                    <td><?=$user->email?></td>
                    <td style="color: red;"><?=date("jS m Y H:i a",strtotime($user->date))?></td>
                    <td><?=$user->orders_count?></td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
</table>

<?php $this->view("admin/footer",$data); ?>