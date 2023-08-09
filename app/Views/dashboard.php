<?= $this->extend("layouts/app") ?>

<?= $this->section("body") ?>

<div class="container" style="margin-top:20px;">
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">Dashboard</div>
            <div class="panel-body">
                <h1>Hello, <?= session()->get('name') ?></h1>
                <br><br>
                <h3><a href="<?= site_url('list-users') ?>">User Data with DataTrait</a></h3>
                <h3><a href="<?= site_url('list-products') ?>">Product Data with DataTrait</a></h3>
                <br><br>
                <h3><a href="<?= site_url('logout') ?>">Logout</a></h3>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>