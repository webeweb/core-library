<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\ArtVarDepot;

/**
 * Art var depot test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class ArtVarDepotTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ArtVarDepot();

        $this->assertNull($obj->getAlleeCasier());
        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeDepot());
        $this->assertNull($obj->getCodeVariante());
        $this->assertNull($obj->getQteStockAttente());
        $this->assertNull($obj->getQteStockMaxi());
        $this->assertNull($obj->getQteStockMini());
        $this->assertNull($obj->getQteStockReel());
        $this->assertNull($obj->getQteStockReserve());
    }
}
