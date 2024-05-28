<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Provider;

use WBW\Library\Common\Provider\GuzzleHelper;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Guzzle helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Provider
 */
class GuzzleHelperTest extends AbstractTestCase {

    /**
     * Test getStreamParameterName()
     *
     * @return void
     */
    public function testGetStreamParameterName(): void {

        $exp = PHP_VERSION_ID < 70205 ? "save_to" : "sink";

        $this->assertEquals($exp, GuzzleHelper::getStreamParameterName());
    }
}
