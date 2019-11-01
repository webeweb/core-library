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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibelleActivite7Trait;

/**
 * Libelle activite7 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibelleActivite7TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibelleActivite7() method.
     *
     * @return void
     */
    public function testSetLibelleActivite7() {

        $obj = new TestStringLibelleActivite7Trait();

        $obj->setLibelleActivite7("libelleActivite7");
        $this->assertEquals("libelleActivite7", $obj->getLibelleActivite7());
    }
}
