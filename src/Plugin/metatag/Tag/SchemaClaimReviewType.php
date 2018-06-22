<?php

namespace Drupal\schema_claimreview\Plugin\metatag\Tag;

use Drupal\schema_metatag\Plugin\metatag\Tag\SchemaTypeBase;

/**
 * Provides a plugin for the 'type' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_claim_review_type",
 *   label = @Translation("@type"),
 *   description = @Translation("The type of review."),
 *   name = "@type",
 *   group = "schema_claim_review",
 *   weight = -5,
 *   type = "string",
 *   secure = FALSE,
 *   multiple = FALSE
 * )
 */
class SchemaClaimReviewType extends SchemaTypeBase {

  /**
   * {@inheritdoc}
   */
  public static function labels() {
    return [
      'ClaimReview',
    ];
  }

}
