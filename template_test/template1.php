<?php
class CustomView extends \Slim\View
{
    public function render($template)
    {
        return 'The final rendered template';
    }
}
?>