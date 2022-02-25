<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Strings;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringSourceTrait;

/**
 * String source trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringSourceTraitTest extends AbstractTestCase {

    /**
     * Tests setSource()
     *
     * @return void
     */
    public function testSetSource(): void {

        $obj = new TestStringSourceTrait();

        $obj->setSource("source");
        $this->assertEquals("source", $obj->getSource());
    }
}
