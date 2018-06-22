<?php

namespace Drupal\schema_claimreview\Plugin\metatag\Tag;

use Drupal\schema_metatag\Plugin\metatag\Tag\SchemaCreativeWorkTrait;
use Drupal\schema_metatag\Plugin\metatag\Tag\SchemaNameBase;
use Drupal\schema_metatag\SchemaMetatagManager;

/**
 * Provides a plugin for the 'schema_claim_review_item_reviewed' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_claim_review_item_reviewed",
 *   label = @Translation("itemReviewed"),
 *   description = @Translation("The item reviewed."),
 *   name = "itemReviewed",
 *   group = "schema_claim_review",
 *   weight = 1,
 *   type = "string",
 *   secure = FALSE,
 *   multiple = FALSE
 * )
 */
class SchemaClaimReviewItemReviewed extends SchemaNameBase {


  use SchemaCreativeWorkTrait {
    creativeWorkProperties as creativeWorkPropertiesParent;
  }


  public static function creativeWorkProperties($object_type) {

    $properties = static::creativeWorkPropertiesParent($object_type);

    if ($object_type == 'CreativeWork') {
      $properties['author'] = [
        'class' => 'SchemaPersonOrgBase',
        'formKeys' => 'personOrgFormKeys',
        'form' => 'personOrgForm',
        'description' => "The author of the work.",
      ];
    }
    return $properties;
  }

  /**
   * {@inheritdoc}
   */
  public function form(array $element = []) {

    $value = SchemaMetatagManager::unserialize($this->value());

    $input_values = [
      'title' => $this->label(),
      'description' => $this->description(),
      'value' => $value,
      '#required' => isset($element['#required']) ? $element['#required'] : FALSE,
      'visibility_selector' => $this->visibilitySelector(),
    ];


    $form = $this->creativeWorkForm($input_values);

    $form['#description'] = 'An object describing the reviewed item/claim being made.';

    return $form;
  }
}
