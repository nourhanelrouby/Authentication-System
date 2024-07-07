<?php require 'header.php'?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center display-4 border my-5 p-2">All Users</h1>
        </div>
        <div class="col-sm-10 mx-auto">
            <div class="border my-3">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Mobile</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data as $dt): ?>
                    <tr>
                        <th scope="row"><?php echo $dt->id ;?></th>
                        <td><?php echo $dt->username  ;?></td>
                        <td><?php echo $dt->userEmail  ;?></td>
                        <td><?php echo $dt->userMobile  ;?></td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php require 'footer.php'?>
