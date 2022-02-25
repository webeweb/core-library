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
use WBW\Library\Quadratus\Model\QCompta\TramesLignes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Trames lignes test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class TramesLignesTest extends AbstractTestCase {

    /**
     * Tests setCode()
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new TramesLignes();

        $obj->setCode(10);
        $this->assertEquals(10, $obj->getCode());
    }

    /**
     * Tests setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new TramesLignes();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests setCodeLibAuto()
     *
     * @return void
     */
    public function testSetCodeLibAuto(): void {

        $obj = new TramesLignes();

        $obj->setCodeLibAuto("codeLibAuto");
        $this->assertEquals("codeLibAuto", $obj->getCodeLibAuto());
    }

    /**
     * Tests setCompte()
     *
     * @return void
     */
    public function testSetCompte(): void {

        $obj = new TramesLignes();

        $obj->setCompte("compte");
        $this->assertEquals("compte", $obj->getCompte());
    }

    /**
     * Tests setCompteContrepartie()
     *
     * @return void
     */
    public function testSetCompteContrepartie(): void {

        $obj = new TramesLignes();

        $obj->setCompteContrepartie("compteContrepartie");
        $this->assertEquals("compteContrepartie", $obj->getCompteContrepartie());
    }

    /**
     * Tests setCredit()
     *
     * @return void
     */
    public function testSetCredit(): void {

        $obj = new TramesLignes();

        $obj->setCredit(10.092018);
        $this->assertEquals(10.092018, $obj->getCredit());
    }

    /**
     * Tests setDateEcheance()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEcheance(): void {

        // Set a Date/time mock.
        $dateEcheance = new DateTime("2018-09-10");

        $obj = new TramesLignes();

        $obj->setDateEcheance($dateEcheance);
        $this->assertSame($dateEcheance, $obj->getDateEcheance());
    }

    /**
     * Tests setDebit()
     *
     * @return void
     */
    public function testSetDebit(): void {

        $obj = new TramesLignes();

        $obj->setDebit(10.092018);
        $this->assertEquals(10.092018, $obj->getDebit());
    }

    /**
     * Tests setIsDebit()
     *
     * @return void
     */
    public function testSetIsDebit(): void {

        $obj = new TramesLignes();

        $obj->setIsDebit(true);
        $this->assertEquals(true, $obj->getIsDebit());
    }

    /**
     * Tests setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new TramesLignes();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests setNumLigne()
     *
     * @return void
     */
    public function testSetNumLigne(): void {

        $obj = new TramesLignes();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TramesLignes();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeLibAuto());
        $this->assertNull($obj->getCompte());
        $this->assertNull($obj->getCompteContrepartie());
        $this->assertNull($obj->getCredit());
        $this->assertNull($obj->getDateEcheance());
        $this->assertNull($obj->getDebit());
        $this->assertNull($obj->getIsDebit());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getNumLigne());
    }
}
