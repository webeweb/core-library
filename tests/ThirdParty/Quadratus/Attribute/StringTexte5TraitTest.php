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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTexte5Trait;

/**
 * Texte5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTexte5TraitTest extends AbstractTestCase {

    /**
     * Tests the setTexte5() method.
     *
     * @return void
     */
    public function testSetTexte5() {

        $obj = new TestStringTexte5Trait();

        $obj->setTexte5("texte5");
        $this->assertEquals("texte5", $obj->getTexte5());
    }
}
