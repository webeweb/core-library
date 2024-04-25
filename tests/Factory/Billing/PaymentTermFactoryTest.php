<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Factory\Billing;

use WBW\Library\Common\Factory\Billing\PaymentTermFactory;
use WBW\Library\Common\Model\Billing\PaymentTerm;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Payment term factory test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Factory\Billing
 */
class PaymentTermFactoryTest extends AbstractTestCase {

    /**
     * Test copy()
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
