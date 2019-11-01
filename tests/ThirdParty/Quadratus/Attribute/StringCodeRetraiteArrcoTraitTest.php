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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeRetraiteArrcoTrait;

/**
 * Code retraite a r r c o trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeRetraiteArrcoTraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeRetraiteArrco() method.
     *
     * @return void
     */
    public function testSetCodeRetraiteArrco() {

        $obj = new TestStringCodeRetraiteArrcoTrait();

        $obj->setCodeRetraiteArrco("codeRetraiteArrco");
        $this->assertEquals("codeRetraiteArrco", $obj->getCodeRetraiteArrco());
    }
}
