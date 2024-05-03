<?php

declare(strict_types=1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Easilys\Tests\Model;

use WBW\Library\Easilys\Model\GenericFamily;
use WBW\Library\Easilys\Tests\AbstractTestCase;

/**
 * Family test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Model
 */
class FamilyTest extends AbstractTestCase {

    /**
     * Test setParent()
     *
     * @return void
     */
    public function testSetParent(): void {

        // Set a parent mock.
        $parent = new GenericFamily();

        $obj = new GenericFamily();

        $obj->setParent($parent);
        $this->assertSame($parent, $obj->getParent());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new GenericFamily();

        $this->assertNull($obj->getId());
        $this->assertNull($obj->getLabel());
        $this->assertNull($obj->getParent());
    }
}
