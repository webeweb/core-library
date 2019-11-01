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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibelleVarianteTrait;

/**
 * Libelle variante trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibelleVarianteTraitTest extends AbstractTestCase {

    /**
     * Tests the setLibelleVariante() method.
     *
     * @return void
     */
    public function testSetLibelleVariante() {

        $obj = new TestStringLibelleVarianteTrait();

        $obj->setLibelleVariante("libelleVariante");
        $this->assertEquals("libelleVariante", $obj->getLibelleVariante());
    }
}
