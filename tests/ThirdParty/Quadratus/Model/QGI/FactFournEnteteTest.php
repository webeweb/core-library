<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\FactFournEntete;

/**
 * Fact fourn entete test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class FactFournEnteteTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new FactFournEntete();

        $this->assertNull($obj->getBoniMali());
        $this->assertNull($obj->getCodeJournal());
        $this->assertNull($obj->getDate());
        $this->assertNull($obj->getFolio());
        $this->assertNull($obj->getLibAuto());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getMonnaie());
        $this->assertNull($obj->getMontantTtCcredit());
        $this->assertNull($obj->getMontantTtCdebit());
        $this->assertNull($obj->getNumDossCpta());
        $this->assertNull($obj->getNumFacture());
        $this->assertNull($obj->getNumFournisseur());
        $this->assertNull($obj->getNumLot());
        $this->assertNull($obj->getNumUniq());
        $this->assertNull($obj->getRefImage());
    }
}
