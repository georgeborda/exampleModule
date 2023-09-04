<?php

namespace Drupal\exampleModule\Controller;

use Drupal\Core\Controller\ControllerBase;


class exampleModuleController extends ControllerBase
{
    # Demo 
    public function form()
    {
        // # Build the form
        // $form = \Drupal::formBuilder()->getForm('Drupal\labforms\Form\DemoForm');

        return [
            '#markup' => 'Hello world'
        ];
    }
}