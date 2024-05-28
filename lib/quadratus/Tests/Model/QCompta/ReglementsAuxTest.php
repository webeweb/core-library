<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Quadratus\Tests\Model\QCompta;

use DateTime;
use Throwable;
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
     * Test setActif()
     *
     * @return void
     */
    public function testSetActif(): void {

        $obj = new ReglementsAux();

        $obj->setActif(true);
        $this->assertTrue($obj->getActif());
    }

    /**
     * Test setAutreDomBanque()
     *
     * @return void
     */
    public function testSetAutreDomBanque(): void {

        $obj = new ReglementsAux();

        $obj->setAutreDomBanque("autreDomBanque");
        $this->assertEquals("autreDomBanque", $obj->getAutreDomBanque());
    }

    /**
     * Test setAutreRib()
     *
     * @return void
     */
    public function testSetAutreRib(): void {

        $obj = new ReglementsAux();

        $obj->setAutreRib("autreRib");
        $this->assertEquals("autreRib", $obj->getAutreRib());
    }

    /**
     * Test setCodeJournalBanque()
     *
     * @return void
     */
    public function testSetCodeJournalBanque(): void {

        $obj = new ReglementsAux();

        $obj->setCodeJournalBanque("codeJournalBanque");
        $this->assertEquals("codeJournalBanque", $obj->getCodeJournalBanque());
    }

    /**
     * Test setCodeModePaiement()
     *
     * @return void
     */
    public function testSetCodeModePaiement(): void {

        $obj = new ReglementsAux();

        $obj->setCodeModePaiement("codeModePaiement");
        $this->assertEquals("codeModePaiement", $obj->getCodeModePaiement());
    }

    /**
     * Test setDans1Groupe()
     *
     * @return void
     */
    public function testSetDans1Groupe(): void {

        $obj = new ReglementsAux();

        $obj->setDans1Groupe(true);
        $this->assertTrue($obj->getDans1Groupe());
    }

    /**
     * Test setDateEcheance()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateEcheance(): void {

        // Set a Date/time mock.
        $dateEcheance = new DateTime("2018-09-10");

        $obj = new ReglementsAux();

        $obj->setDateEcheance($dateEcheance);
        $this->assertSame($dateEcheance, $obj->getDateEcheance());
    }

    /**
     * Test setMontantGroupe()
     *
     * @return void
     */
    public function testSetMontantGroupe(): void {

        $obj = new ReglementsAux();

        $obj->setMontantGroupe(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantGroupe());
    }

    /**
     * Test setMontantSaisiCredit()
     *
     * @return void
     */
    public function testSetMontantSaisiCredit(): void {

        $obj = new ReglementsAux();

        $obj->setMontantSaisiCredit(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSaisiCredit());
    }

    /**
     * Test setMontantSaisiDebit()
     *
     * @return void
     */
    public function testSetMontantSaisiDebit(): void {

        $obj = new ReglementsAux();

        $obj->setMontantSaisiDebit(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSaisiDebit());
    }

    /**
     * Test setMontantTenuCredit()
     *
     * @return void
     */
    public function testSetMontantTenuCredit(): void {

        $obj = new ReglementsAux();

        $obj->setMontantTenuCredit(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantTenuCredit());
    }

    /**
     * Test setMontantTenuDebit()
     *
     * @return void
     */
    public function testSetMontantTenuDebit(): void {

        $obj = new ReglementsAux();

        $obj->setMontantTenuDebit(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantTenuDebit());
    }

    /**
     * Test setNoRib()
     *
     * @return void
     */
    public function testSetNoRib(): void {

        $obj = new ReglementsAux();

        $obj->setNoRib("noRib");
        $this->assertEquals("noRib", $obj->getNoRib());
    }

    /**
     * Test setNumGroupe()
     *
     * @return void
     */
    public function testSetNumGroupe(): void {

        $obj = new ReglementsAux();

        $obj->setNumGroupe(10);
        $this->assertEquals(10, $obj->getNumGroupe());
    }

    /**
     * Test setNumLotLcr()
     *
     * @return void
     */
    public function testSetNumLotLcr(): void {

        $obj = new ReglementsAux();

        $obj->setNumLotLcr(10);
        $this->assertEquals(10, $obj->getNumLotLcr());
    }

    /**
     * Test setNumLotLettreP()
     *
     * @return void
     */
    public function testSetNumLotLettreP(): void {

        $obj = new ReglementsAux();

        $obj->setNumLotLettreP(10);
        $this->assertEquals(10, $obj->getNumLotLettreP());
    }

    /**
     * Test setNumLotTraite()
     *
     * @return void
     */
    public function testSetNumLotTraite(): void {

        $obj = new ReglementsAux();

        $obj->setNumLotTraite(10);
        $this->assertEquals(10, $obj->getNumLotTraite());
    }

    /**
     * Test setNumUniq()
     *
     * @return void
     */
    public function testSetNumUniq(): void {

        $obj = new ReglementsAux();

        $obj->setNumUniq(10);
        $this->assertEquals(10, $obj->getNumUniq());
    }

    /**
     * Test setNumUniqEcriture()
     *
     * @return void
     */
    public function testSetNumUniqEcriture(): void {

        $obj = new ReglementsAux();

        $obj->setNumUniqEcriture(10);
        $this->assertEquals(10, $obj->getNumUniqEcriture());
    }

    /**
     * Test setNumeroCompte()
     *
     * @return void
     */
    public function testSetNumeroCompte(): void {

        $obj = new ReglementsAux();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Test setReferenceTire()
     *
     * @return void
     */
    public function testSetReferenceTire(): void {

        $obj = new ReglementsAux();

        $obj->setReferenceTire("referenceTire");
        $this->assertEquals("referenceTire", $obj->getReferenceTire());
    }

    /**
     * Test setTypeReglement()
     *
     * @return void
     */
    public function testSetTypeReglement(): void {

        $obj = new ReglementsAux();

        $obj->setTypeReglement("typeReglement");
        $this->assertEquals("typeReglement", $obj->getTypeReglement());
    }

    /**
     * Test __construct()
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
