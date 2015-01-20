<?php

/**
 * This is the "base controller class". All other "real" controllers extend this class.
 */
class Controller {

    protected function loadModel($model, $params = null) {
        require_once(MODELS . $model . '.php');
        return new $model($params);
    }

    public function view($view = '', $data = array(), $template = '', $noTemplates = false) {
        if ($noTemplates == true) {
            require_once VIEWS . $view . '.php';
        } else {
            require_once(TEMPLATES . $template . '/header.php');
            require_once(VIEWS . $view . '.php');
            require_once(TEMPLATES . $template . '/footer.php');
        }

        if (DEBUG == true) {
            ?>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main"> 
                <?php
                echo '<pre>';
                print_r($data);
                echo '</pre>';
                ?>
            </div>
            <?php
        }
    }

}
