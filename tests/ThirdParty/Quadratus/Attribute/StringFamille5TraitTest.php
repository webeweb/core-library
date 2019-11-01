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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringFamille5Trait;

/**
 * Famille5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringFamille5TraitTest extends AbstractTestCase {

    /**
     * Tests the setFamille5() method.
     *
     * @return void
     */
    public function testSetFamille5() {

        $obj = new TestStringFamille5Trait();

        $obj->setFamille5("famille5");
        $this->assertEquals("famille5", $obj->getFamille5());
    }
}
