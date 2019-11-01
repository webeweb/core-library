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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTexte10Trait;

/**
 * Texte10 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTexte10TraitTest extends AbstractTestCase {

    /**
     * Tests the setTexte10() method.
     *
     * @return void
     */
    public function testSetTexte10() {

        $obj = new TestStringTexte10Trait();

        $obj->setTexte10("texte10");
        $this->assertEquals("texte10", $obj->getTexte10());
    }
}
