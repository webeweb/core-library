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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolRelanceAdresseCptTrait;

/**
 * Relance adresse cpt trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolRelanceAdresseCptTraitTest extends AbstractTestCase {

    /**
     * Tests the setRelanceAdresseCpt() method.
     *
     * @return void
     */
    public function testSetRelanceAdresseCpt() {

        $obj = new TestBoolRelanceAdresseCptTrait();

        $obj->setRelanceAdresseCpt(true);
        $this->assertEquals(true, $obj->getRelanceAdresseCpt());
    }
}
