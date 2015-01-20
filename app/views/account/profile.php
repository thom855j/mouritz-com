<div class="page-wrapper">
    <?php
    $Username = USER_USERNAME;
    $Firstname = USER_FIRSTNAME;
    $Lastname = USER_LASTNAME;
    $Email = USER_EMAIL;


    if (!empty($data->feedback)) {
        foreach ($data->feedback as $feedback) {
            echo $feedback;
        }
    }
    ?>

    <div class="grid grid-pad">
        <div class="col-3-12">
            <div class="content">
                <h3 class="heading">Options</h3>
                <ul class="noLi">
                    <?php if ($user->role("Admin")) { ?>
                        <li><a href="<?php echo URL; ?>controlpanel">Controlpanel</a></li>
                    <?php } ?>
                    <li><a href="<?php echo URL; ?>account/settings">Settings</a></li>
                    <li><a href="<?php echo URL; ?>account/change" >Change Password</a></li>
                </ul>
            </div>
        </div>

        <div class="col-9-12">
            <div class="content">
                <h2 class="heading">Username: <?php echo Input::escape($data->user->data()->$Username); ?></h2>
                <p>Full name: <?php echo Input::escape($data->user->data()->$Firstname); ?>  <?php echo Input::escape($data->user->data()->$Lastname); ?></p>
                <p>Email: <?php echo Input::escape($data->user->data()->$Email); ?> </p>
            </div>
        </div>
    </div>


</div>