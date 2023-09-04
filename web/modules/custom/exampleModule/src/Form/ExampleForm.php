<?php

namespace Drupal\exampleModule\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Component\Serialization\Json;
use Drupal\Core\Url;
use Drupal\Core\Database\Database;
use Drupal\file\Entity\File;

class ExampleForm extends FormBase {

  public function getFormId() {
    return 'example_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Save'),
      '#attributes' => [
        'class' => ['btn', 'btn-success'],
      ],
    ];

    $form['product_name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('<span class="input-group-text" id="product-name">Producto</span>'), 
      '#placeholder' => $this->t('ad-bio MEDIO LÖWESTEIN JENSEN'),
    ];
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {

  }