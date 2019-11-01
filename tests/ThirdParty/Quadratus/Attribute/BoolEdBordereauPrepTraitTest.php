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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolEdBordereauPrepTrait;

/**
 * Ed bordereau prep trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolEdBordereauPrepTraitTest extends AbstractTestCase {

    /**
     * Tests the setEdBordereauPrep() method.
     *
     * @return void
     */
    public function testSetEdBordereauPrep() {

        $obj = new TestBoolEdBordereauPrepTrait();

        $obj->setEdBordereauPrep(true);
        $this->assertEquals(true, $obj->getEdBordereauPrep());
    }
}
