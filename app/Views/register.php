<?= $this->extend("layouts/app") ?>

<?= $this->section("body") ?>

<div class="container" style="margin-top:20px;">
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">Register</div>
            <div class="panel-body">
                <?php if (isset($validation)) : ?>
                    <div class="col-12">
                        <div class="alert alert-danger" role="alert">
                            <?= $validation->listErrors() ?>
                        </div>
                    </div>
                <?php endif; ?>
                <form class="" action="<?= base_url('register') ?>" method="post">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <!-- Use the $_POST array to retrieve form value for name input -->
                        <input type="text" class="form-control" name="name" id="name" value="<?= isset($_POST['name']) ? $_POST['name'] : '' ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <!-- Use the $_POST array to retrieve form value for email input -->
                        <input type="email" class="form-control" name="email" id="email" value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>">
                    </div>
                    <div class="form-group">
                        <label for="phone_no">Phone No</label>
                        <!-- Use the $_POST array to retrieve form value for phone_no input -->
                        <input type="text" class="form-control" name="phone_no" id="phone_no" value="<?= isset($_POST['phone_no']) ? $_POST['phone_no'] : '' ?>">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                    <div class="form-group">
                        <label for="password_confirm">Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirm" id="password_confirm">
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                    <a href="<?= base_url('login') ?>" class="btn btn-primary">Go to Login</a>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>