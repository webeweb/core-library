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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibelleActivite9Trait;

/**
 * Libelle activite9 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibelleActivite9TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibelleActivite9() method.
     *
     * @return void
     */
    public function testSetLibelleActivite9() {

        $obj = new TestStringLibelleActivite9Trait();

        $obj->setLibelleActivite9("libelleActivite9");
        $this->assertEquals("libelleActivite9", $obj->getLibelleActivite9());
    }
}
