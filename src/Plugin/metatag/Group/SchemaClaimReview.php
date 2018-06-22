<?php

namespace Drupal\schema_claimreview\Plugin\metatag\Group;

use Drupal\schema_metatag\Plugin\metatag\Group\SchemaGroupBase;

/**
 * Provides a plugin for the 'Review' meta tag group.
 *
 * @MetatagGroup(
 *   id = "schema_claim_review",
 *   label = @Translation("Schema.org: ClaimReview"),
 *   description = @Translation("See Schema.org definitions for this Schema type at <a href="":url"">:url</a>.", arguments = { ":url" = "http://schema.org/ClaimReview"}),
 *   weight = 10,
 * )
 */
class SchemaClaimReview extends SchemaGroupBase {
  // Nothing here yet. Just a placeholder class for a plugin.
}
