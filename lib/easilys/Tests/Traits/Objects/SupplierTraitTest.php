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

namespace WBW\Library\Easilys\Tests\Traits\Objects;

use WBW\Library\Easilys\Model\Supplier;
use WBW\Library\Easilys\Tests\AbstractTestCase;
use WBW\Library\Easilys\Tests\Fixtures\Traits\Objects\TestSupplierTrait;

/**
 * Supplier trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Traits\Strings
 */
class SupplierTraitTest extends AbstractTestCase {

    /**
     * Test setSupplier()
     *
     * @return void
     */
    public function testSetSupplier(): void {

        // Set a Supplier mock.
        $supplier = new Supplier();

        $obj = new TestSupplierTrait();

        $obj->setSupplier($supplier);
        $this->assertSame($supplier, $obj->getSupplier());
    }
}
