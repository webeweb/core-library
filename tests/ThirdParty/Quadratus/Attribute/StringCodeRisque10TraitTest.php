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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeRisque10Trait;

/**
 * Code risque10 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeRisque10TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeRisque10() method.
     *
     * @return void
     */
    public function testSetCodeRisque10() {

        $obj = new TestStringCodeRisque10Trait();

        $obj->setCodeRisque10("codeRisque10");
        $this->assertEquals("codeRisque10", $obj->getCodeRisque10());
    }
}
