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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringz35LibelleTrait;

/**
 * z35 libelle trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Stringz35LibelleTraitTest extends AbstractTestCase {

    /**
     * Tests the setz35Libelle() method.
     *
     * @return void
     */
    public function testSetz35Libelle() {

        $obj = new TestStringz35LibelleTrait();

        $obj->setz35Libelle("z35Libelle");
        $this->assertEquals("z35Libelle", $obj->getz35Libelle());
    }
}
