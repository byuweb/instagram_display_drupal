<?php

namespace Drupal\instagram_d8\Controller;

use Drupal\instagram_d8\Utility\DescriptionTemplateTrait;

/**
 * Controller routines for block example routes.
 */
class InstaBlockController {
    use DescriptionTemplateTrait;

    /**
    * {@inheritdoc}
    */
    protected function getModuleName() {
    return 'instagram_d8';
    }


}
