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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringQuantiteLibelle2Trait;

/**
 * Quantite libelle2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringQuantiteLibelle2TraitTest extends AbstractTestCase {

    /**
     * Tests the setQuantiteLibelle2() method.
     *
     * @return void
     */
    public function testSetQuantiteLibelle2() {

        $obj = new TestStringQuantiteLibelle2Trait();

        $obj->setQuantiteLibelle2("quantiteLibelle2");
        $this->assertEquals("quantiteLibelle2", $obj->getQuantiteLibelle2());
    }
}
