<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Provider\Tests\Helper;

use WBW\Library\Provider\Helper\GuzzleHelper;
use WBW\Library\Provider\Tests\AbstractTestCase;

/**
 * Guzzle helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Provider\Tests\Helper
 */
class GuzzleHelperTest extends AbstractTestCase {

    /**
     * Tests getStreamParameterName()
     *
     * @return void
     */
    public function testGetStreamParameterName(): void {

        $exp = PHP_VERSION_ID < 70205 ? "save_to" : "sink";

        $this->assertEquals($exp, GuzzleHelper::getStreamParameterName());
    }
}
