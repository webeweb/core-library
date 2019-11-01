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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeAssietteSit2AgffTrait;

/**
 * Code assiette s i t2 a g f f trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeAssietteSit2AgffTraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeAssietteSit2Agff() method.
     *
     * @return void
     */
    public function testSetCodeAssietteSit2Agff() {

        $obj = new TestStringCodeAssietteSit2AgffTrait();

        $obj->setCodeAssietteSit2Agff("codeAssietteSit2Agff");
        $this->assertEquals("codeAssietteSit2Agff", $obj->getCodeAssietteSit2Agff());
    }
}
