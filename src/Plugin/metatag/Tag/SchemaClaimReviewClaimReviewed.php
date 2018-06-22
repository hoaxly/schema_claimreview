<?php

namespace Drupal\schema_claimreview\Plugin\metatag\Tag;

use Drupal\schema_metatag\Plugin\metatag\Tag\SchemaNameBase;

/**
 * Provides a plugin for the 'schema_claim_review_claim_reviewed' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_claim_review_claim_reviewed",
 *   label = @Translation("claimReviewed"),
 *   description = @Translation("The claim reviewed."),
 *   name = "claimReviewed",
 *   group = "schema_claim_review",
 *   weight = 1,
 *   type = "string",
 *   secure = FALSE,
 *   multiple = FALSE
 * )
 */
class SchemaClaimReviewClaimReviewed extends SchemaNameBase {
  /**
   * Generate a form element for this meta tag.
   */
  public function form(array $element = []) {
    $form = [
      '#type' => 'textarea',
      '#title' => $this->label(),
      '#description' => $this->t('A short summary of the claim being evaluated. Try to keep this less than 75 characters to minimize wrapping when displayed on a mobile device.'),
      '#empty_value' => '',
      '#default_value' => $this->value(),
      '#required' => TRUE,
    ];
    return $form;
  }
}
