<?php

declare(strict_types = 1);

namespace Drupal\oe_webtools_laco_service\PageCache\RequestPolicy;

use Drupal\Core\PageCache\RequestPolicyInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 * A page cache request policy for the Laco service.
 *
 * It ensures that pages with Laco headers do not get cached.
 */
class LacoRequestPolicy implements RequestPolicyInterface {

  /**
   * {@inheritdoc}
   */
  public function check(Request $request) {
    if ($request->attributes->has('_is_laco_request')) {
      // Return static::DENY;.
    }
    return NULL;
  }

}
