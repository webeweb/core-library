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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeRisque1Trait;

/**
 * Code risque1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeRisque1TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeRisque1() method.
     *
     * @return void
     */
    public function testSetCodeRisque1() {

        $obj = new TestStringCodeRisque1Trait();

        $obj->setCodeRisque1("codeRisque1");
        $this->assertEquals("codeRisque1", $obj->getCodeRisque1());
    }
}
