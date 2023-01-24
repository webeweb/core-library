<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Strings;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringEntityTrait;

/**
 * String entity trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringEntityTraitTest extends AbstractTestCase {

    /**
     * Tests setEntity()
     *
     * @return void
     */
    public function testSetEntity(): void {

        $obj = new TestStringEntityTrait();

        $obj->setEntity("entity");
        $this->assertEquals("entity", $obj->getEntity());
    }
}
