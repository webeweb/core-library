<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodePaysIsoNaissTrait;

/**
 * Code pays i s o naiss trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodePaysIsoNaissTraitTest extends AbstractTestCase {

    /**
     * Tests the setCodePaysIsoNaiss() method.
     *
     * @return void
     */
    public function testSetCodePaysIsoNaiss() {

        $obj = new TestStringCodePaysIsoNaissTrait();

        $obj->setCodePaysIsoNaiss("codePaysIsoNaiss");
        $this->assertEquals("codePaysIsoNaiss", $obj->getCodePaysIsoNaiss());
    }
}
