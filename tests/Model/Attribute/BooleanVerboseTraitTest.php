<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Model\Attribute;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestBooleanVerboseTrait;

/**
 * Boolean verbose trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class BooleanVerboseTraitTest extends AbstractTestCase {

    /**
     * Tests the setVerbose() method.
     *
     * @return void
     */
    public function testSetVerbose(): void {

        $obj = new TestBooleanVerboseTrait();

        $obj->setVerbose(true);
        $this->assertTrue($obj->getVerbose());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__constructor(): void {

        $obj = new TestBooleanVerboseTrait();

        $this->assertNull($obj->getVerbose());
    }
}
