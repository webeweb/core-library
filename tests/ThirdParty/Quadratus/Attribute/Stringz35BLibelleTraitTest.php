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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringz35BLibelleTrait;

/**
 * z35 b libelle trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Stringz35BLibelleTraitTest extends AbstractTestCase {

    /**
     * Tests the setz35BLibelle() method.
     *
     * @return void
     */
    public function testSetz35BLibelle() {

        $obj = new TestStringz35BLibelleTrait();

        $obj->setz35BLibelle("z35BLibelle");
        $this->assertEquals("z35BLibelle", $obj->getz35BLibelle());
    }
}
