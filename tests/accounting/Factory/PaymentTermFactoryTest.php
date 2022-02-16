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

use WBW\Library\Accounting\Factory\PaymentTermFactory;
use WBW\Library\Accounting\Model\PaymentTerm;
use WBW\Library\Accounting\Tests\AbstractTestCase;

/**
 * Payment term factory test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Accounting\Tests\Factory
 */
class PaymentTermFactoryTest extends AbstractTestCase {

    /**
     * Tests copy()
     *
     * @return void
     */
    public function testCopy(): void {

        $obj = new PaymentTerm();
        $obj->setCode("code");
        $obj->setLabel("label");

        $res = PaymentTermFactory::copy($obj, new PaymentTerm());
        $this->assertEquals($obj->getCode(), $res->getCode());
        $this->assertEquals($obj->getLabel(), $res->getLabel());
    }
}
