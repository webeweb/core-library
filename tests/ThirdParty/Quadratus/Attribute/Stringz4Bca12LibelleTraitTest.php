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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringz4Bca12LibelleTrait;

/**
 * z4 b c a12 libelle trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Stringz4Bca12LibelleTraitTest extends AbstractTestCase {

    /**
     * Tests the setz4Bca12Libelle() method.
     *
     * @return void
     */
    public function testSetz4Bca12Libelle() {

        $obj = new TestStringz4Bca12LibelleTrait();

        $obj->setz4Bca12Libelle("z4Bca12Libelle");
        $this->assertEquals("z4Bca12Libelle", $obj->getz4Bca12Libelle());
    }
}
