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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringHtAvecSaisieCongesCodesTachesTrait;

/**
 * H t avec saisie conges codes taches trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringHtAvecSaisieCongesCodesTachesTraitTest extends AbstractTestCase {

    /**
     * Tests the setHtAvecSaisieCongesCodesTaches() method.
     *
     * @return void
     */
    public function testSetHtAvecSaisieCongesCodesTaches() {

        $obj = new TestStringHtAvecSaisieCongesCodesTachesTrait();

        $obj->setHtAvecSaisieCongesCodesTaches("htAvecSaisieCongesCodesTaches");
        $this->assertEquals("htAvecSaisieCongesCodesTaches", $obj->getHtAvecSaisieCongesCodesTaches());
    }
}
