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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeRisqueTrait;

/**
 * Code risque trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeRisqueTraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeRisque() method.
     *
     * @return void
     */
    public function testSetCodeRisque() {

        $obj = new TestStringCodeRisqueTrait();

        $obj->setCodeRisque("codeRisque");
        $this->assertEquals("codeRisque", $obj->getCodeRisque());
    }
}
