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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTexte25Trait;

/**
 * Texte25 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTexte25TraitTest extends AbstractTestCase {

    /**
     * Tests the setTexte25() method.
     *
     * @return void
     */
    public function testSetTexte25() {

        $obj = new TestStringTexte25Trait();

        $obj->setTexte25("texte25");
        $this->assertEquals("texte25", $obj->getTexte25());
    }
}
