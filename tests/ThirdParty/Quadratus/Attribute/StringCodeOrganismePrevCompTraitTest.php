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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeOrganismePrevCompTrait;

/**
 * Code organisme prev comp trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeOrganismePrevCompTraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeOrganismePrevComp() method.
     *
     * @return void
     */
    public function testSetCodeOrganismePrevComp() {

        $obj = new TestStringCodeOrganismePrevCompTrait();

        $obj->setCodeOrganismePrevComp("codeOrganismePrevComp");
        $this->assertEquals("codeOrganismePrevComp", $obj->getCodeOrganismePrevComp());
    }
}
