<div class="page-header">
    <h3 class="page-title">Chat</h3>
</div>
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Ngày</th>
                                <th>Người nhắn</th>
                                <th>Nội dung</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $count = 1; ?>
                            <?php foreach ($data['chat'] as $chat) : ?>
                                <tr>
                                    <td><?= $count++ ?></td>
                                    <td><?= $chat['date'] ?></td>
                                    <td><?= $chat['in_msg_id'] ?></td>
                                    <td><?= $chat['content'] ?></td>
                                    <td>
                                        <a class="btn btn-primary" href="<?php echo BASE_URL ?>/admin/addchat/<?= $chat['in_msg_id'] ?>">
                                            <i class="fal fa-info-circle"></i>
                                        </a>
                                        <a class="btn btn-danger btn__delete" href="<?php echo BASE_URL ?>/admin/deletechat/<?= $chat['in_msg_id'] ?>">
                                        <i class="fal fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php
                            endforeach;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>