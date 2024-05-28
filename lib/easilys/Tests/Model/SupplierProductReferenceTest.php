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

namespace WBW\Library\Easilys\Tests\Model;

use WBW\Library\Easilys\Model\SupplierProductReference;
use WBW\Library\Easilys\Tests\AbstractTestCase;

/**
 * Supplier product reference test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Model
 */
class SupplierProductReferenceTest extends AbstractTestCase {

    /**
     * Test setIsMandatory()
     *
     * @return void
     */
    public function testSetIsMandatory(): void {

        $obj = new SupplierProductReference();

        $obj->setIsMandatory(true);
        $this->assertTrue($obj->getIsMandatory());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new SupplierProductReference();

        $this->assertNull($obj->getApplyToChildrenSites());

        $this->assertNull($obj->getIsMandatory());
    }
}
