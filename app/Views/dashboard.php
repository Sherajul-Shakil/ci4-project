<?= $this->extend("layouts/app") ?>

<?= $this->section("body") ?>

<div class="container" style="margin-top:20px;">
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">Dashboard</div>
            <div class="panel-body">
                <h1>Hello, <?= session()->get('name') ?></h1>
                <br><br>
                <h4><a href="<?= site_url('list-users') ?>">User Data with DataTrait</a></h4>
                <h4><a href="<?= site_url('list-products') ?>">Product Data with DataTrait</a></h4>
                <br><br>
                <h4><a href="<?= site_url('list-user') ?>">User Data with Stored Procedure</a></h4>
                <h4><a href="<?= site_url('single-user/1') ?>">Single User Data with Stored Procedure</a></h4>
                <br><br>
                <h4><a href="<?= site_url('logout') ?>">Logout</a></h4>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>