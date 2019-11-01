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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeLibSomme3Trait;

/**
 * Code lib somme3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeLibSomme3TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeLibSomme3() method.
     *
     * @return void
     */
    public function testSetCodeLibSomme3() {

        $obj = new TestStringCodeLibSomme3Trait();

        $obj->setCodeLibSomme3("codeLibSomme3");
        $this->assertEquals("codeLibSomme3", $obj->getCodeLibSomme3());
    }
}
