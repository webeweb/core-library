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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringz45Ca12LibelleTrait;

/**
 * z45 c a12 libelle trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Stringz45Ca12LibelleTraitTest extends AbstractTestCase {

    /**
     * Tests the setz45Ca12Libelle() method.
     *
     * @return void
     */
    public function testSetz45Ca12Libelle() {

        $obj = new TestStringz45Ca12LibelleTrait();

        $obj->setz45Ca12Libelle("z45Ca12Libelle");
        $this->assertEquals("z45Ca12Libelle", $obj->getz45Ca12Libelle());
    }
}
