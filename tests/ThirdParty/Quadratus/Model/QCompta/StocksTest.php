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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\Stocks;

/**
 * Stocks test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class StocksTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Stocks();

        $this->assertNull($obj->getAnnee());
        $this->assertNull($obj->getCentre());
        $this->assertNull($obj->getLibelleEcriture());
        $this->assertNull($obj->getMontant());
        $this->assertNull($obj->getNature());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getPrixU());
        $this->assertNull($obj->getPrixU2());
        $this->assertNull($obj->getQuantite());
        $this->assertNull($obj->getQuantite2());
        $this->assertNull($obj->getRefEcrCodeJournal());
        $this->assertNull($obj->getRefEcrFolio());
        $this->assertNull($obj->getRefEcrLigneFolio());
        $this->assertNull($obj->getRefEcrNumLigne());
        $this->assertNull($obj->getRefEcrPeriodeEcriture());
    }
}
