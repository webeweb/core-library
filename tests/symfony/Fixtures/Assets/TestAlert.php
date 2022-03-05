<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Fixtures\Assets;

use WBW\Library\Symfony\Assets\AbstractAlert;

/**
 * Test alert.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Fixtures\Assets
 */
class TestAlert extends AbstractAlert {

    /**
     * Constructor.
     *
     * @param string $type The type.
     */
    public function __construct(string $type) {
        parent::__construct($type);
    }
}
