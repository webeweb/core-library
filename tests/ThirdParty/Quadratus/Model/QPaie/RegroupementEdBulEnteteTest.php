<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\RegroupementEdBulEntete;

/**
 * Regroupement ed bul entete test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class RegroupementEdBulEnteteTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new RegroupementEdBulEntete();

        $this->assertNull($obj->getAfficher());
        $this->assertNull($obj->getCodeRegroupEdBul());
        $this->assertNull($obj->getCodeTitre());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getQuadra());
    }
}
