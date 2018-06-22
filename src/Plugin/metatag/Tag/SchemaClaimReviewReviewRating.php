<?php

namespace Drupal\schema_claimreview\Plugin\metatag\Tag;

use Drupal\schema_metatag\Plugin\metatag\Tag\SchemaRatingBase;
use Drupal\schema_metatag\SchemaMetatagManager;

/**
 * Provides a plugin for the 'schema_review_review_rating' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_claim_review_review_rating",
 *   label = @Translation("reviewRating"),
 *   description = @Translation("reviewRating."),
 *   name = "reviewRating",
 *   group = "schema_claim_review",
 *   weight = 11,
 *   type = "string",
 *   secure = FALSE,
 *   multiple = TRUE
 * )
 */
class SchemaClaimReviewReviewRating extends SchemaRatingBase {

  /**
   * {@inheritdoc}
   */
  public function form(array $element = []) {
    $form = parent::form($element);

    $form['#description'] = 'The assessment of the claim. This object supports both a numeric and a textual assessment. The textual value is currently the only value shown in search results. The numeric value is not shown, but is used to evaluate consistency of fact checks across different sources; therefore having a numeric value may increase the chances of your fact check being shown.';
    $values = SchemaMetatagManager::unserialize($this->value());

    $form['alternateName'] = [
      '#type' => 'textfield',
      '#title' => $this->t('alternateName'),
      '#default_value' => !empty($values['alternateName']) ? $values['alternateName'] : '',
      '#maxlength' => 255,
      '#description' => $this->t('A meaningful value like "True" or "Mostly true".'),
    ];

    return $form;
  }
}
