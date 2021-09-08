<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Accounting\Tests\Model;

use WBW\Library\Accounting\Model\PaymentTerm;
use WBW\Library\Accounting\Model\PaymentTermInterface;
use WBW\Library\Accounting\Tests\AbstractTestCase;

/**
 * Payment term test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Accounting\Tests\Model
 */
class PaymentTermTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new PaymentTerm();

        $this->assertInstanceOf(PaymentTermInterface::class, $obj);

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getLabel());
    }
}
