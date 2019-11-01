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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibelle5Trait;

/**
 * Libelle5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibelle5TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibelle5() method.
     *
     * @return void
     */
    public function testSetLibelle5() {

        $obj = new TestStringLibelle5Trait();

        $obj->setLibelle5("libelle5");
        $this->assertEquals("libelle5", $obj->getLibelle5());
    }
}
