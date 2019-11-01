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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringz47Ca12LibelleTrait;

/**
 * z47 c a12 libelle trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Stringz47Ca12LibelleTraitTest extends AbstractTestCase {

    /**
     * Tests the setz47Ca12Libelle() method.
     *
     * @return void
     */
    public function testSetz47Ca12Libelle() {

        $obj = new TestStringz47Ca12LibelleTrait();

        $obj->setz47Ca12Libelle("z47Ca12Libelle");
        $this->assertEquals("z47Ca12Libelle", $obj->getz47Ca12Libelle());
    }
}
