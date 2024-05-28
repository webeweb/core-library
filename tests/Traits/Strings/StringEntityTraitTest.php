<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Traits\Strings;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestStringEntityTrait;

/**
 * String entity trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class StringEntityTraitTest extends AbstractTestCase {

    /**
     * Test setEntity()
     *
     * @return void
     */
    public function testSetEntity(): void {

        $obj = new TestStringEntityTrait();

        $obj->setEntity("entity");
        $this->assertEquals("entity", $obj->getEntity());
    }
}
