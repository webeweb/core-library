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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringClasseTrait;

/**
 * Classe trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringClasseTraitTest extends AbstractTestCase {

    /**
     * Tests the setClasse() method.
     *
     * @return void
     */
    public function testSetClasse() {

        $obj = new TestStringClasseTrait();

        $obj->setClasse("classe");
        $this->assertEquals("classe", $obj->getClasse());
    }
}
