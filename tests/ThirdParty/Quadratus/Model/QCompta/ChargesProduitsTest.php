<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\ChargesProduits;

/**
 * Charges produits test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class ChargesProduitsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ChargesProduits();

        $this->assertNull($obj->getCentre());
        $this->assertNull($obj->getCodeFeuille());
        $this->assertNull($obj->getCommentaires());
        $this->assertNull($obj->getContrePartie());
        $this->assertNull($obj->getEtatLigne());
        $this->assertNull($obj->getLibEcriture());
        $this->assertNull($obj->getMoisRevision());
        $this->assertNull($obj->getMtHt());
        $this->assertNull($obj->getMtN1());
        $this->assertNull($obj->getNature());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumLotEcriture());
        $this->assertNull($obj->getNumLotPeriodicite());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getRefImage());
        $this->assertNull($obj->getSens());
        $this->assertNull($obj->getTxTva());
    }
}
