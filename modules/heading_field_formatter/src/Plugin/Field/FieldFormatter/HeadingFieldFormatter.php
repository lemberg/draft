<?php

namespace Drupal\heading_field_formatter\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Plugin implementation of the 'draft_heading_formatter' formatter.
 *
 * @FieldFormatter(
 *   id = "draft_heading_formatter",
 *   label = @Translation("Heading"),
 *   field_types = {
 *     "string",
 *     "text"
 *   }
 * )
 */
class HeadingFieldFormatter extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $elements = [];
    $html_tag = $this->getSetting('tag');
    foreach ($items as $delta => $item) {
      $elements[$delta] = [
        '#type'   => 'inline_template',
        '#template' => "<{$html_tag}>{{ title }}</{$html_tag}>",
        '#context' => [
          'title' => $item->value,
        ],
      ];
    }

    return $elements;
  }

  /**
   * {@inheritdoc}
   */
  public static function defaultSettings() {
    $options = parent::defaultSettings();

    $options['tag'] = 'h2';
    return $options;
  }

  /**
   * {@inheritdoc}
   */
  public function settingsForm(array $form, FormStateInterface $form_state) {
    $form = parent::settingsForm($form, $form_state);

    $form['tag'] = [
      '#type' => 'select',
      '#title' => $this->t('The HTML tag'),
      '#default_value' => $this->getSetting('tag'),
      '#options' => [
        'h1' => 'H1',
        'h2' => 'H2',
        'h3' => 'H3',
        'h4' => 'H4',
        'h5' => 'H5',
        'h6' => 'H6',
      ],
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function settingsSummary() {
    return [
      $this->t('HTML Tag: @tag', ['@tag' => $this->getSetting('tag')]),
    ];
  }

}
