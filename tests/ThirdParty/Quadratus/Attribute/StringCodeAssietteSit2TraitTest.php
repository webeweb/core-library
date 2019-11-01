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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeAssietteSit2Trait;

/**
 * Code assiette s i t2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeAssietteSit2TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeAssietteSit2() method.
     *
     * @return void
     */
    public function testSetCodeAssietteSit2() {

        $obj = new TestStringCodeAssietteSit2Trait();

        $obj->setCodeAssietteSit2("codeAssietteSit2");
        $this->assertEquals("codeAssietteSit2", $obj->getCodeAssietteSit2());
    }
}
