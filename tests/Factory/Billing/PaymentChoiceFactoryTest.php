<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Factory\Billing;

use WBW\Library\Common\Factory\Billing\PaymentChoiceFactory;
use WBW\Library\Common\Model\Billing\PaymentChoice;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Payment choice factory test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Factory\Billing
 */
class PaymentChoiceFactoryTest extends AbstractTestCase {

    /**
     * Test copy()
     *
     * @return void
     */
    public function testCopy(): void {

        $obj = new PaymentChoice();
        $obj->setLabel("label");

        $res = PaymentChoiceFactory::copy($obj, new PaymentChoice());
        $this->assertEquals($obj->getLabel(), $res->getLabel());
    }
}
