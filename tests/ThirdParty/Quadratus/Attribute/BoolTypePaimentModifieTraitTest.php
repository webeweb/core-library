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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolTypePaimentModifieTrait;

/**
 * Type paiment modifie trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolTypePaimentModifieTraitTest extends AbstractTestCase {

    /**
     * Tests the setTypePaimentModifie() method.
     *
     * @return void
     */
    public function testSetTypePaimentModifie() {

        $obj = new TestBoolTypePaimentModifieTrait();

        $obj->setTypePaimentModifie(true);
        $this->assertEquals(true, $obj->getTypePaimentModifie());
    }
}
