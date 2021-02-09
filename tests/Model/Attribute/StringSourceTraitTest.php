<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Model\Attribute;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestStringSourceTrait;

/**
 * String source trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class StringSourceTraitTest extends AbstractTestCase {

    /**
     * Tests the setSource() method.
     *
     * @return void
     */
    public function testSetSource(): void {

        $obj = new TestStringSourceTrait();

        $obj->setSource("source");
        $this->assertEquals("source", $obj->getSource());
    }
}
