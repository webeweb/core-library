<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\XmlTv\Tests\Traits\Strings;

use WBW\Library\XmlTv\Tests\AbstractTestCase;
use WBW\Library\XmlTv\Tests\Fixtures\Traits\Strings\TestStringSystemTrait;

/**
 * String system trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Tests\Traits\Strings
 */
class StringSystemTraitTest extends AbstractTestCase {

    /**
     * Test setSystem()
     *
     * @return void
     */
    public function testSetSystem(): void {

        $obj = new TestStringSystemTrait();

        $obj->setSystem("system");
        $this->assertEquals("system", $obj->getSystem());
    }
}
