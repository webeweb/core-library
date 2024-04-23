<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Traits\Strings;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestStringToTrait;

/**
 * String to trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class StringToTraitTest extends AbstractTestCase {

    /**
     * Test setTo()
     *
     * @return void
     */
    public function testSetTo(): void {

        $obj = new TestStringToTrait();

        $obj->setTo("to");
        $this->assertEquals("to", $obj->getTo());
    }
}
