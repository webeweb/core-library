<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QCompta;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QCompta\DosRevEtatCpt;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Dos rev etat cpt test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class DosRevEtatCptTest extends AbstractTestCase {

    /**
     * Tests setCollaborateur()
     *
     * @return void
     */
    public function testSetCollaborateur(): void {

        $obj = new DosRevEtatCpt();

        $obj->setCollaborateur("collaborateur");
        $this->assertEquals("collaborateur", $obj->getCollaborateur());
    }

    /**
     * Tests setCredit()
     *
     * @return void
     */
    public function testSetCredit(): void {

        $obj = new DosRevEtatCpt();

        $obj->setCredit(10.092018);
        $this->assertEquals(10.092018, $obj->getCredit());
    }

    /**
     * Tests setDateModif()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateModif(): void {

        // Set a Date/time mock.
        $dateModif = new DateTime("2018-09-10");

        $obj = new DosRevEtatCpt();

        $obj->setDateModif($dateModif);
        $this->assertSame($dateModif, $obj->getDateModif());
    }

    /**
     * Tests setDebit()
     *
     * @return void
     */
    public function testSetDebit(): void {

        $obj = new DosRevEtatCpt();

        $obj->setDebit(10.092018);
        $this->assertEquals(10.092018, $obj->getDebit());
    }

    /**
     * Tests setEtatCpt()
     *
     * @return void
     */
    public function testSetEtatCpt(): void {

        $obj = new DosRevEtatCpt();

        $obj->setEtatCpt("etatCpt");
        $this->assertEquals("etatCpt", $obj->getEtatCpt());
    }

    /**
     * Tests setModifie()
     *
     * @return void
     */
    public function testSetModifie(): void {

        $obj = new DosRevEtatCpt();

        $obj->setModifie(true);
        $this->assertEquals(true, $obj->getModifie());
    }

    /**
     * Tests setNumeroCompte()
     *
     * @return void
     */
    public function testSetNumeroCompte(): void {

        $obj = new DosRevEtatCpt();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Tests setPeriodeRev()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeRev(): void {

        // Set a Date/time mock.
        $periodeRev = new DateTime("2018-09-10");

        $obj = new DosRevEtatCpt();

        $obj->setPeriodeRev($periodeRev);
        $this->assertSame($periodeRev, $obj->getPeriodeRev());
    }

    /**
     * Tests setSolde()
     *
     * @return void
     */
    public function testSetSolde(): void {

        $obj = new DosRevEtatCpt();

        $obj->setSolde(10.092018);
        $this->assertEquals(10.092018, $obj->getSolde());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

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
}
