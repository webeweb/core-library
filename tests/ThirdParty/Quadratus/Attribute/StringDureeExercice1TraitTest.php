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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringDureeExercice1Trait;

/**
 * Duree exercice_1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringDureeExercice1TraitTest extends AbstractTestCase {

    /**
     * Tests the setDureeExercice1() method.
     *
     * @return void
     */
    public function testSetDureeExercice1() {

        $obj = new TestStringDureeExercice1Trait();

        $obj->setDureeExercice1("dureeExercice1");
        $this->assertEquals("dureeExercice1", $obj->getDureeExercice1());
    }
}
