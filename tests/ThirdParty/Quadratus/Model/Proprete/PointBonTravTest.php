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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\PointBonTrav;

/**
 * Point bon trav test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class PointBonTravTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new PointBonTrav();

        $this->assertNull($obj->getAvenantSigne());
        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getCodeEquipe());
        $this->assertNull($obj->getCodeTacheType());
        $this->assertNull($obj->getDatePassage());
        $this->assertNull($obj->getDateRefBt());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getFromGenBt());
        $this->assertNull($obj->getHeureDeb());
        $this->assertNull($obj->getHeureDebMob());
        $this->assertNull($obj->getHeureFinMob());
        $this->assertNull($obj->getHeuresJour());
        $this->assertNull($obj->getHeuresNuit());
        $this->assertNull($obj->getMontant());
        $this->assertNull($obj->getNomPrenom());
        $this->assertNull($obj->getNumBt());
        $this->assertNull($obj->getNumChrono());
        $this->assertNull($obj->getNumeroAvenant());
        $this->assertNull($obj->getPaniers());
        $this->assertNull($obj->getPrime1());
        $this->assertNull($obj->getPrime2());
        $this->assertNull($obj->getPrime3());
        $this->assertNull($obj->getQualification());
        $this->assertNull($obj->getTransfertPaie());
        $this->assertNull($obj->getUniqId());
        $this->assertNull($obj->getValideMob());
    }
}
