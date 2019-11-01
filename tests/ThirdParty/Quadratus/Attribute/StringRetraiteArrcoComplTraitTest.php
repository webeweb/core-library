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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringRetraiteArrcoComplTrait;

/**
 * Retraite a r r c o compl trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringRetraiteArrcoComplTraitTest extends AbstractTestCase {

    /**
     * Tests the setRetraiteArrcoCompl() method.
     *
     * @return void
     */
    public function testSetRetraiteArrcoCompl() {

        $obj = new TestStringRetraiteArrcoComplTrait();

        $obj->setRetraiteArrcoCompl("retraiteArrcoCompl");
        $this->assertEquals("retraiteArrcoCompl", $obj->getRetraiteArrcoCompl());
    }
}
