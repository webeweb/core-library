<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Traits\Strings;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestStringHostnameTrait;

/**
 * String hostname trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class StringHostnameTraitTest extends AbstractTestCase {

    /**
     * Test setHostname()
     *
     * @return void
     */
    public function testSetHostname(): void {

        $obj = new TestStringHostnameTrait();

        $obj->setHostname("hostname");
        $this->assertEquals("hostname", $obj->getHostname());
    }
}
