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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\Centralisateur;

/**
 * Centralisateur test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class CentralisateurTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Centralisateur();

        $this->assertNull($obj->getCodeJournal());
        $this->assertNull($obj->getCreditClasse15());
        $this->assertNull($obj->getCreditClasse67());
        $this->assertNull($obj->getCreditClient());
        $this->assertNull($obj->getCreditFournisseur());
        $this->assertNull($obj->getDebitClasse15());
        $this->assertNull($obj->getDebitClasse67());
        $this->assertNull($obj->getDebitClient());
        $this->assertNull($obj->getDebitFournisseur());
        $this->assertNull($obj->getFolio());
        $this->assertNull($obj->getNbLigneFolio());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getProchaineLigne());
    }
}
