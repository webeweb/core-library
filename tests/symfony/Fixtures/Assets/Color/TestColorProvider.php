<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Fixtures\Assets\Color;

use WBW\Library\Symfony\Assets\Color\AbstractColorProvider;

/**
 * Test color provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Fixtures\Assets\Color
 */
class TestColorProvider extends AbstractColorProvider {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct("fixture");
    }

    /**
     *{@inheritDoc}
     */
    public function getColors(): array {
        return [];
    }

    /**
     *{@inheritDoc}
     */
    public function getName(): string {
        return "test";
    }
}
