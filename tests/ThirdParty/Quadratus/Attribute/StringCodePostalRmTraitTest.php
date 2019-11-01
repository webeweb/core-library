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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodePostalRmTrait;

/**
 * Code postal r m trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodePostalRmTraitTest extends AbstractTestCase {

    /**
     * Tests the setCodePostalRm() method.
     *
     * @return void
     */
    public function testSetCodePostalRm() {

        $obj = new TestStringCodePostalRmTrait();

        $obj->setCodePostalRm("codePostalRm");
        $this->assertEquals("codePostalRm", $obj->getCodePostalRm());
    }
}
