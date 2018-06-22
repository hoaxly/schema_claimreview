<?php

namespace Drupal\schema_claimreview\Plugin\metatag\Tag;

use Drupal\schema_metatag\Plugin\metatag\Tag\SchemaPersonOrgBase;

/**
 * Provides a plugin for the 'author' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_claim_review_author",
 *   label = @Translation("author"),
 *   description = @Translation("The author of the review."),
 *   name = "author",
 *   group = "schema_claim_review",
 *   weight = 2,
 *   type = "string",
 *   secure = FALSE,
 *   multiple = TRUE
 * )
 */
class SchemaClaimReviewAuthor extends SchemaPersonOrgBase {
  /**
   * {@inheritdoc}
   */
  public function form(array $element = []) {
    $form = parent::form($element);
    $form['#description'] = 'The publisher of the fact check article, not the publisher of the claim. Must be an organization, not a person. Must have at least one of the following properties: name or url.';

    return $form;
  }

}
