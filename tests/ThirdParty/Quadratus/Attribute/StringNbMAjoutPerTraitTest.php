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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNbMAjoutPerTrait;

/**
 * Nb m ajout per trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNbMAjoutPerTraitTest extends AbstractTestCase {

    /**
     * Tests the setNbMAjoutPer() method.
     *
     * @return void
     */
    public function testSetNbMAjoutPer() {

        $obj = new TestStringNbMAjoutPerTrait();

        $obj->setNbMAjoutPer("nbMAjoutPer");
        $this->assertEquals("nbMAjoutPer", $obj->getNbMAjoutPer());
    }
}
