<?php

namespace Drupal\schema_claimreview\Plugin\metatag\Tag;

use Drupal\schema_metatag\Plugin\metatag\Tag\SchemaDateBase;

/**
 * Provides a plugin for the 'datePublished' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_claim_review_date_published",
 *   label = @Translation("datePublished"),
 *   description = @Translation("Publishing date of the review."),
 *   name = "datePublished",
 *   group = "schema_claim_review",
 *   weight = 6,
 *   type = "string",
 *   secure = FALSE,
 *   multiple = FALSE
 * )
 */
class SchemaClaimReviewDatePublished extends SchemaDateBase {
  /**
   * {@inheritdoc}
   */
  public function form(array $element = []) {
    $form = parent::form($element);
    $form['#description'] = 'The date when the fact check was published. To format the date properly, use a token like [node:created:html_datetime].';
    $form['#required'] = TRUE;
    return $form;
  }
}
