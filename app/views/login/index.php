
<div class="page-wrapper" >
    <?php
    if (!empty($data->feedback)) {
        foreach ($data->feedback as $feedback) {
            echo $feedback;
        }
    }
    ?>
    <div class="login-wrap">
    <div class="unit big-heading">
        <h2>Login</h2>
    </div>

    <form class="form-signin" role="form" method="post" action="<?php echo URL; ?>login/verify" data-parsley-validate>
        <input type="text" name="username"  class="form-control" placeholder="Brugernavn" required="" autofocus="">
        <input type="password" name="password"  class="form-control" placeholder="Adgangskode" required="">
        <label class="checkbox">
            <input type="checkbox" name='remember' id="remember"> Remember my login on this PC
        </label>
        <input class=" btn-lg btn-primary btn-block" type="submit" name="submit" value="Login"><br>
        <a href="<?php echo URL; ?>register">Registrer</a><br>
        <a href="<?php echo URL; ?>home">Tilbage</a><br>
    </form>
    <div> <!-- /login-wrap -->
</div> <!-- /container -->
