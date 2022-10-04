<?php
/** @var $model \app\core\Model */

use \app\core;
?>

<h1>Stwórz konto:</h1>

<form action="" method="post">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>First name</label>
                <input type="text" name="firstname" value="<?php echo $model->firstname; ?>" 
                class="form-control <?php echo $model->hasError('firstname') ? ' is-invalid' : ''?>">
            </div>

            <div class="invalid-feedback">
                <?php echo $model->getFirstError('firstname'); ?>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label>Last name</label>
                <input type="text" class="form-control" name="lastname">
            </div>
        </div>
    </div>
    <div class="form-group">
        <label>Email address</label>
        <input type="email" class="form-control" name="email">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password">
    </div>
    <div class="form-group">
        <label>Confirm Password</label>
        <input type="password" class="form-control" name="passwordConfirm">
    </div>
    <button type="submit" class="btn btn-primary">Rejestruj</button>
</form>