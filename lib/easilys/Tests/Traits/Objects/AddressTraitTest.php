<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Easilys\Tests\Traits\Objects;

use WBW\Library\Easilys\Model\Address;
use WBW\Library\Easilys\Tests\AbstractTestCase;
use WBW\Library\Easilys\Tests\Fixtures\Traits\Objects\TestAddressTrait;

/**
 * Address trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Traits\Strings
 */
class AddressTraitTest extends AbstractTestCase {

    /**
     * Test setAddress()
     *
     * @return void
     */
    public function testSetAddress(): void {

        // Set a Address mock.
        $address = new Address();

        $obj = new TestAddressTrait();

        $obj->setAddress($address);
        $this->assertSame($address, $obj->getAddress());
    }
}
