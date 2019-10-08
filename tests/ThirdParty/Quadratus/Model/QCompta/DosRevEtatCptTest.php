<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use DateTime;
use Exception;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\DosRevEtatCpt;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * Dos rev etat cpt model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class DosRevEtatCptTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DosRevEtatCpt();

        $this->assertNull($obj->getCollaborateur());
        $this->assertNull($obj->getCredit());
        $this->assertNull($obj->getDateModif());
        $this->assertNull($obj->getDebit());
        $this->assertNull($obj->getEtatCpt());
        $this->assertNull($obj->getModifie());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getPeriodeRev());
        $this->assertNull($obj->getSolde());
    }

    /**
     * Tests the setCollaborateur() method.
     *
     * @return void
     */
    public function testSetCollaborateur() {

        $obj = new DosRevEtatCpt();

        $obj->setCollaborateur("collaborateur");
        $this->assertEquals("collaborateur", $obj->getCollaborateur());
    }

    /**
     * Tests the setCredit() method.
     *
     * @return void
     */
    public function testSetCredit() {

        $obj = new DosRevEtatCpt();

        $obj->setCredit(10.092018);
        $this->assertEquals(10.092018, $obj->getCredit());
    }

    /**
     * Tests the setDateModif() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateModif() {

        $obj = new DosRevEtatCpt();

        $obj->setDateModif(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateModif());
    }

    /**
     * Tests the setDebit() method.
     *
     * @return void
     */
    public function testSetDebit() {

        $obj = new DosRevEtatCpt();

        $obj->setDebit(10.092018);
        $this->assertEquals(10.092018, $obj->getDebit());
    }

    /**
     * Tests the setEtatCpt() method.
     *
     * @return void
     */
    public function testSetEtatCpt() {

        $obj = new DosRevEtatCpt();

        $obj->setEtatCpt("etatCpt");
        $this->assertEquals("etatCpt", $obj->getEtatCpt());
    }

    /**
     * Tests the setModifie() method.
     *
     * @return void
     */
    public function testSetModifie() {

        $obj = new DosRevEtatCpt();

        $obj->setModifie(true);
        $this->assertEquals(true, $obj->getModifie());
    }

    /**
     * Tests the setNumeroCompte() method.
     *
     * @return void
     */
    public function testSetNumeroCompte() {

        $obj = new DosRevEtatCpt();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Tests the setPeriodeRev() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeRev() {

        $obj = new DosRevEtatCpt();

        $obj->setPeriodeRev(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeRev());
    }

    /**
     * Tests the setSolde() method.
     *
     * @return void
     */
    public function testSetSolde() {

        $obj = new DosRevEtatCpt();

        $obj->setSolde(10.092018);
        $this->assertEquals(10.092018, $obj->getSolde());
    }
}
