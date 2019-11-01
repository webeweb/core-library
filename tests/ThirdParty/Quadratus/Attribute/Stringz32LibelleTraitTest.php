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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringz32LibelleTrait;

/**
 * z32 libelle trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Stringz32LibelleTraitTest extends AbstractTestCase {

    /**
     * Tests the setz32Libelle() method.
     *
     * @return void
     */
    public function testSetz32Libelle() {

        $obj = new TestStringz32LibelleTrait();

        $obj->setz32Libelle("z32Libelle");
        $this->assertEquals("z32Libelle", $obj->getz32Libelle());
    }
}
