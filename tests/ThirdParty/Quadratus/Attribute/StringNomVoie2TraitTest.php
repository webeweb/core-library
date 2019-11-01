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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNomVoie2Trait;

/**
 * Nom voie2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNomVoie2TraitTest extends AbstractTestCase {

    /**
     * Tests the setNomVoie2() method.
     *
     * @return void
     */
    public function testSetNomVoie2() {

        $obj = new TestStringNomVoie2Trait();

        $obj->setNomVoie2("nomVoie2");
        $this->assertEquals("nomVoie2", $obj->getNomVoie2());
    }
}
