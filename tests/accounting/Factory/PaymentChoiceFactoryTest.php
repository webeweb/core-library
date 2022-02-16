<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Accounting\Tests\Factory;

use WBW\Library\Accounting\Factory\PaymentChoiceFactory;
use WBW\Library\Accounting\Model\PaymentChoice;
use WBW\Library\Accounting\Tests\AbstractTestCase;

/**
 * Payment choice factory test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Accounting\Tests\Factory
 */
class PaymentChoiceFactoryTest extends AbstractTestCase {

    /**
     * Tests copy()
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
