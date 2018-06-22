<?php

namespace Drupal\schema_claimreview\Plugin\metatag\Tag;

use Drupal\schema_metatag\Plugin\metatag\Tag\SchemaNameBase;

/**
 * Provides a plugin for the 'schema_review_review_body' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_claim_review_review_body",
 *   label = @Translation("reviewBody"),
 *   description = @Translation("Review body."),
 *   name = "reviewBody",
 *   group = "schema_claim_review",
 *   weight = 11,
 *   type = "string",
 *   secure = FALSE,
 *   multiple = TRUE
 * )
 */
class SchemaClaimReviewReviewBody extends SchemaNameBase {

  /**
   * Generate a form element for this meta tag.
   */
  public function form(array $element = []) {
    $form = [
      '#type' => 'textarea',
      '#title' => $this->label(),
      '#description' => $this->t('The actual body of the review. Not mandatory'),
      '#empty_value' => '',
      '#default_value' => $this->value(),
    ];
    return $form;
  }
}
