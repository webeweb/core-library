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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibelleInterneTrait;

/**
 * Libelle interne trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibelleInterneTraitTest extends AbstractTestCase {

    /**
     * Tests the setLibelleInterne() method.
     *
     * @return void
     */
    public function testSetLibelleInterne() {

        $obj = new TestStringLibelleInterneTrait();

        $obj->setLibelleInterne("libelleInterne");
        $this->assertEquals("libelleInterne", $obj->getLibelleInterne());
    }
}
