<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Billing;

use JsonSerializable;
use WBW\Library\Common\Billing\PaymentChoice;
use WBW\Library\Common\Billing\PaymentChoiceInterface;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Payment choice test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Billing
 */
class PaymentChoiceTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $obj = new PaymentChoice();

        $this->assertIsArray($obj->jsonSerialize());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new PaymentChoice();

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(PaymentChoiceInterface::class, $obj);

        $this->assertNull($obj->getLabel());
    }
}
