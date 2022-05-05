<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Fixtures\Provider;

use WBW\Library\Symfony\Provider\AbstractColorProvider;

/**
 * Test color provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Fixtures\Provider
 */
class TestColorProvider extends AbstractColorProvider {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct("fixture");
    }

    /**
     *{@inheritdoc}
     */
    public function getColors(): array {
        return [];
    }

    /**
     *{@inheritdoc}
     */
    public function getName(): string {
        return "test";
    }
}
