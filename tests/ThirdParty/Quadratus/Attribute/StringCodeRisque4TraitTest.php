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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeRisque4Trait;

/**
 * Code risque4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeRisque4TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeRisque4() method.
     *
     * @return void
     */
    public function testSetCodeRisque4() {

        $obj = new TestStringCodeRisque4Trait();

        $obj->setCodeRisque4("codeRisque4");
        $this->assertEquals("codeRisque4", $obj->getCodeRisque4());
    }
}
