<?php

namespace Drupal\schema_claimreview\Plugin\metatag\Tag;

use Drupal\schema_metatag\Plugin\metatag\Tag\SchemaNameBase;

/**
 * Provides a plugin for the 'url' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_claim_review_url",
 *   label = @Translation("url"),
 *   description = @Translation("Link to the page hosting the full article of the fact check."),
 *   name = "url",
 *   group = "schema_claim_review",
 *   weight = 0,
 *   type = "string",
 *   secure = FALSE,
 *   multiple = FALSE
 * )
 */
class SchemaClaimReviewUrl extends SchemaNameBase {
  /**
   * {@inheritdoc}
   */
  public function form(array $element = []) {
    $form = parent::form($element);
    $form['#description'] = 'Link to the page hosting the full article of the fact check. If the page has multiple ClaimReview elements, be sure that the fact check has an HTML anchor, and this property points to that anchor. Examples: longreview.html or summarypage.html#fact1.';
    $form['#description'] .= ' The domain of this URL value must be the same domain as, or a subdomain of, the page hosting this ClaimReview element. Redirects or shortened URLs (such as g.co/searchconsole) are not resolved, and so will not work here.';
    $form['#required'] = TRUE;
    return $form;
  }
}
