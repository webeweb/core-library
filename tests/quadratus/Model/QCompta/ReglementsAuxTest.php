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
use WBW\Library\Quadratus\Model\QCompta\ReglementsAux;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Reglements aux test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class ReglementsAuxTest extends AbstractTestCase {

    /**
     * Tests setActif()
     *
     * @return void
     */
    public function testSetActif(): void {

        $obj = new ReglementsAux();

        $obj->setActif(true);
        $this->assertEquals(true, $obj->getActif());
    }

    /**
     * Tests setAutreDomBanque()
     *
     * @return void
     */
    public function testSetAutreDomBanque(): void {

        $obj = new ReglementsAux();

        $obj->setAutreDomBanque("autreDomBanque");
        $this->assertEquals("autreDomBanque", $obj->getAutreDomBanque());
    }

    /**
     * Tests setAutreRib()
     *
     * @return void
     */
    public function testSetAutreRib(): void {

        $obj = new ReglementsAux();

        $obj->setAutreRib("autreRib");
        $this->assertEquals("autreRib", $obj->getAutreRib());
    }

    /**
     * Tests setCodeJournalBanque()
     *
     * @return void
     */
    public function testSetCodeJournalBanque(): void {

        $obj = new ReglementsAux();

        $obj->setCodeJournalBanque("codeJournalBanque");
        $this->assertEquals("codeJournalBanque", $obj->getCodeJournalBanque());
    }

    /**
     * Tests setCodeModePaiement()
     *
     * @return void
     */
    public function testSetCodeModePaiement(): void {

        $obj = new ReglementsAux();

        $obj->setCodeModePaiement("codeModePaiement");
        $this->assertEquals("codeModePaiement", $obj->getCodeModePaiement());
    }

    /**
     * Tests setDans1Groupe()
     *
     * @return void
     */
    public function testSetDans1Groupe(): void {

        $obj = new ReglementsAux();

        $obj->setDans1Groupe(true);
        $this->assertEquals(true, $obj->getDans1Groupe());
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

        $obj = new ReglementsAux();

        $obj->setDateEcheance($dateEcheance);
        $this->assertSame($dateEcheance, $obj->getDateEcheance());
    }

    /**
     * Tests setMontantGroupe()
     *
     * @return void
     */
    public function testSetMontantGroupe(): void {

        $obj = new ReglementsAux();

        $obj->setMontantGroupe(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantGroupe());
    }

    /**
     * Tests setMontantSaisiCredit()
     *
     * @return void
     */
    public function testSetMontantSaisiCredit(): void {

        $obj = new ReglementsAux();

        $obj->setMontantSaisiCredit(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSaisiCredit());
    }

    /**
     * Tests setMontantSaisiDebit()
     *
     * @return void
     */
    public function testSetMontantSaisiDebit(): void {

        $obj = new ReglementsAux();

        $obj->setMontantSaisiDebit(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSaisiDebit());
    }

    /**
     * Tests setMontantTenuCredit()
     *
     * @return void
     */
    public function testSetMontantTenuCredit(): void {

        $obj = new ReglementsAux();

        $obj->setMontantTenuCredit(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantTenuCredit());
    }

    /**
     * Tests setMontantTenuDebit()
     *
     * @return void
     */
    public function testSetMontantTenuDebit(): void {

        $obj = new ReglementsAux();

        $obj->setMontantTenuDebit(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantTenuDebit());
    }

    /**
     * Tests setNoRib()
     *
     * @return void
     */
    public function testSetNoRib(): void {

        $obj = new ReglementsAux();

        $obj->setNoRib("noRib");
        $this->assertEquals("noRib", $obj->getNoRib());
    }

    /**
     * Tests setNumGroupe()
     *
     * @return void
     */
    public function testSetNumGroupe(): void {

        $obj = new ReglementsAux();

        $obj->setNumGroupe(10);
        $this->assertEquals(10, $obj->getNumGroupe());
    }

    /**
     * Tests setNumLotLcr()
     *
     * @return void
     */
    public function testSetNumLotLcr(): void {

        $obj = new ReglementsAux();

        $obj->setNumLotLcr(10);
        $this->assertEquals(10, $obj->getNumLotLcr());
    }

    /**
     * Tests setNumLotLettreP()
     *
     * @return void
     */
    public function testSetNumLotLettreP(): void {

        $obj = new ReglementsAux();

        $obj->setNumLotLettreP(10);
        $this->assertEquals(10, $obj->getNumLotLettreP());
    }

    /**
     * Tests setNumLotTraite()
     *
     * @return void
     */
    public function testSetNumLotTraite(): void {

        $obj = new ReglementsAux();

        $obj->setNumLotTraite(10);
        $this->assertEquals(10, $obj->getNumLotTraite());
    }

    /**
     * Tests setNumUniq()
     *
     * @return void
     */
    public function testSetNumUniq(): void {

        $obj = new ReglementsAux();

        $obj->setNumUniq(10);
        $this->assertEquals(10, $obj->getNumUniq());
    }

    /**
     * Tests setNumUniqEcriture()
     *
     * @return void
     */
    public function testSetNumUniqEcriture(): void {

        $obj = new ReglementsAux();

        $obj->setNumUniqEcriture(10);
        $this->assertEquals(10, $obj->getNumUniqEcriture());
    }

    /**
     * Tests setNumeroCompte()
     *
     * @return void
     */
    public function testSetNumeroCompte(): void {

        $obj = new ReglementsAux();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Tests setReferenceTire()
     *
     * @return void
     */
    public function testSetReferenceTire(): void {

        $obj = new ReglementsAux();

        $obj->setReferenceTire("referenceTire");
        $this->assertEquals("referenceTire", $obj->getReferenceTire());
    }

    /**
     * Tests setTypeReglement()
     *
     * @return void
     */
    public function testSetTypeReglement(): void {

        $obj = new ReglementsAux();

        $obj->setTypeReglement("typeReglement");
        $this->assertEquals("typeReglement", $obj->getTypeReglement());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ReglementsAux();

        $this->assertNull($obj->getActif());
        $this->assertNull($obj->getAutreDomBanque());
        $this->assertNull($obj->getAutreRib());
        $this->assertNull($obj->getCodeJournalBanque());
        $this->assertNull($obj->getCodeModePaiement());
        $this->assertNull($obj->getDans1Groupe());
        $this->assertNull($obj->getDateEcheance());
        $this->assertNull($obj->getMontantGroupe());
        $this->assertNull($obj->getMontantSaisiCredit());
        $this->assertNull($obj->getMontantSaisiDebit());
        $this->assertNull($obj->getMontantTenuCredit());
        $this->assertNull($obj->getMontantTenuDebit());
        $this->assertNull($obj->getNoRib());
        $this->assertNull($obj->getNumGroupe());
        $this->assertNull($obj->getNumLotLcr());
        $this->assertNull($obj->getNumLotLettreP());
        $this->assertNull($obj->getNumLotTraite());
        $this->assertNull($obj->getNumUniq());
        $this->assertNull($obj->getNumUniqEcriture());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getReferenceTire());
        $this->assertNull($obj->getTypeReglement());
    }
}
