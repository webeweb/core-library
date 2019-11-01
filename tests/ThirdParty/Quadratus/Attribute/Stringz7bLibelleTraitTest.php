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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringz7bLibelleTrait;

/**
 * z7b libelle trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Stringz7bLibelleTraitTest extends AbstractTestCase {

    /**
     * Tests the setz7bLibelle() method.
     *
     * @return void
     */
    public function testSetz7bLibelle() {

        $obj = new TestStringz7bLibelleTrait();

        $obj->setz7bLibelle("z7bLibelle");
        $this->assertEquals("z7bLibelle", $obj->getz7bLibelle());
    }
}
