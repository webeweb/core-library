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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeAssietteSitbagffTrait;

/**
 * Code assiette s i t b a g f f trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeAssietteSitbagffTraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeAssietteSitbagff() method.
     *
     * @return void
     */
    public function testSetCodeAssietteSitbagff() {

        $obj = new TestStringCodeAssietteSitbagffTrait();

        $obj->setCodeAssietteSitbagff("codeAssietteSitbagff");
        $this->assertEquals("codeAssietteSitbagff", $obj->getCodeAssietteSitbagff());
    }
}
