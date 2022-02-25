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

use WBW\Library\Quadratus\Model\QCompta\Comptes2;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Comptes2 test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class Comptes2Test extends AbstractTestCase {

    /**
     * Tests setAffacturage()
     *
     * @return void
     */
    public function testSetAffacturage(): void {

        $obj = new Comptes2();

        $obj->setAffacturage(true);
        $this->assertEquals(true, $obj->getAffacturage());
    }

    /**
     * Tests setBic()
     *
     * @return void
     */
    public function testSetBic(): void {

        $obj = new Comptes2();

        $obj->setBic("bic");
        $this->assertEquals("bic", $obj->getBic());
    }

    /**
     * Tests setBtq()
     *
     * @return void
     */
    public function testSetBtq(): void {

        $obj = new Comptes2();

        $obj->setBtq("btq");
        $this->assertEquals("btq", $obj->getBtq());
    }

    /**
     * Tests setBureauDistributeur()
     *
     * @return void
     */
    public function testSetBureauDistributeur(): void {

        $obj = new Comptes2();

        $obj->setBureauDistributeur("bureauDistributeur");
        $this->assertEquals("bureauDistributeur", $obj->getBureauDistributeur());
    }

    /**
     * Tests setCodeOfficielCommune()
     *
     * @return void
     */
    public function testSetCodeOfficielCommune(): void {

        $obj = new Comptes2();

        $obj->setCodeOfficielCommune("codeOfficielCommune");
        $this->assertEquals("codeOfficielCommune", $obj->getCodeOfficielCommune());
    }

    /**
     * Tests setCodePostal()
     *
     * @return void
     */
    public function testSetCodePostal(): void {

        $obj = new Comptes2();

        $obj->setCodePostal("codePostal");
        $this->assertEquals("codePostal", $obj->getCodePostal());
    }

    /**
     * Tests setComplement()
     *
     * @return void
     */
    public function testSetComplement(): void {

        $obj = new Comptes2();

        $obj->setComplement("complement");
        $this->assertEquals("complement", $obj->getComplement());
    }

    /**
     * Tests setComplementSuite()
     *
     * @return void
     */
    public function testSetComplementSuite(): void {

        $obj = new Comptes2();

        $obj->setComplementSuite("complementSuite");
        $this->assertEquals("complementSuite", $obj->getComplementSuite());
    }

    /**
     * Tests setContrepartieAuto()
     *
     * @return void
     */
    public function testSetContrepartieAuto(): void {

        $obj = new Comptes2();

        $obj->setContrepartieAuto("contrepartieAuto");
        $this->assertEquals("contrepartieAuto", $obj->getContrepartieAuto());
    }

    /**
     * Tests setCptFourAffacturage()
     *
     * @return void
     */
    public function testSetCptFourAffacturage(): void {

        $obj = new Comptes2();

        $obj->setCptFourAffacturage("cptFourAffacturage");
        $this->assertEquals("cptFourAffacturage", $obj->getCptFourAffacturage());
    }

    /**
     * Tests setCptOrigine()
     *
     * @return void
     */
    public function testSetCptOrigine(): void {

        $obj = new Comptes2();

        $obj->setCptOrigine("cptOrigine");
        $this->assertEquals("cptOrigine", $obj->getCptOrigine());
    }

    /**
     * Tests setDomBanque()
     *
     * @return void
     */
    public function testSetDomBanque(): void {

        $obj = new Comptes2();

        $obj->setDomBanque("domBanque");
        $this->assertEquals("domBanque", $obj->getDomBanque());
    }

    /**
     * Tests setDomBanque2()
     *
     * @return void
     */
    public function testSetDomBanque2(): void {

        $obj = new Comptes2();

        $obj->setDomBanque2("domBanque2");
        $this->assertEquals("domBanque2", $obj->getDomBanque2());
    }

    /**
     * Tests setDomBanque3()
     *
     * @return void
     */
    public function testSetDomBanque3(): void {

        $obj = new Comptes2();

        $obj->setDomBanque3("domBanque3");
        $this->assertEquals("domBanque3", $obj->getDomBanque3());
    }

    /**
     * Tests setEcheanceFinDecade()
     *
     * @return void
     */
    public function testSetEcheanceFinDecade(): void {

        $obj = new Comptes2();

        $obj->setEcheanceFinDecade(true);
        $this->assertEquals(true, $obj->getEcheanceFinDecade());
    }

    /**
     * Tests setEcheanceFinQuinzaine()
     *
     * @return void
     */
    public function testSetEcheanceFinQuinzaine(): void {

        $obj = new Comptes2();

        $obj->setEcheanceFinQuinzaine(true);
        $this->assertEquals(true, $obj->getEcheanceFinQuinzaine());
    }

    /**
     * Tests setEmail()
     *
     * @return void
     */
    public function testSetEmail(): void {

        $obj = new Comptes2();

        $obj->setEmail("email");
        $this->assertEquals("email", $obj->getEmail());
    }

    /**
     * Tests setFax()
     *
     * @return void
     */
    public function testSetFax(): void {

        $obj = new Comptes2();

        $obj->setFax("fax");
        $this->assertEquals("fax", $obj->getFax());
    }

    /**
     * Tests setIban()
     *
     * @return void
     */
    public function testSetIban(): void {

        $obj = new Comptes2();

        $obj->setIban("iban");
        $this->assertEquals("iban", $obj->getIban());
    }

    /**
     * Tests setIbanCodeImputFrais()
     *
     * @return void
     */
    public function testSetIbanCodeImputFrais(): void {

        $obj = new Comptes2();

        $obj->setIbanCodeImputFrais("ibanCodeImputFrais");
        $this->assertEquals("ibanCodeImputFrais", $obj->getIbanCodeImputFrais());
    }

    /**
     * Tests setIdentTva()
     *
     * @return void
     */
    public function testSetIdentTva(): void {

        $obj = new Comptes2();

        $obj->setIdentTva("identTva");
        $this->assertEquals("identTva", $obj->getIdentTva());
    }

    /**
     * Tests setJourDepartEcheance()
     *
     * @return void
     */
    public function testSetJourDepartEcheance(): void {

        $obj = new Comptes2();

        $obj->setJourDepartEcheance(10);
        $this->assertEquals(10, $obj->getJourDepartEcheance());
    }

    /**
     * Tests setModePaiement()
     *
     * @return void
     */
    public function testSetModePaiement(): void {

        $obj = new Comptes2();

        $obj->setModePaiement("modePaiement");
        $this->assertEquals("modePaiement", $obj->getModePaiement());
    }

    /**
     * Tests setNbJoursEcheance()
     *
     * @return void
     */
    public function testSetNbJoursEcheance(): void {

        $obj = new Comptes2();

        $obj->setNbJoursEcheance("nbJoursEcheance");
        $this->assertEquals("nbJoursEcheance", $obj->getNbJoursEcheance());
    }

    /**
     * Tests setNiveauRelance()
     *
     * @return void
     */
    public function testSetNiveauRelance(): void {

        $obj = new Comptes2();

        $obj->setNiveauRelance("niveauRelance");
        $this->assertEquals("niveauRelance", $obj->getNiveauRelance());
    }

    /**
     * Tests setNomVille()
     *
     * @return void
     */
    public function testSetNomVille(): void {

        $obj = new Comptes2();

        $obj->setNomVille("nomVille");
        $this->assertEquals("nomVille", $obj->getNomVille());
    }

    /**
     * Tests setNomVoie()
     *
     * @return void
     */
    public function testSetNomVoie(): void {

        $obj = new Comptes2();

        $obj->setNomVoie("nomVoie");
        $this->assertEquals("nomVoie", $obj->getNomVoie());
    }

    /**
     * Tests setNumCptStock()
     *
     * @return void
     */
    public function testSetNumCptStock(): void {

        $obj = new Comptes2();

        $obj->setNumCptStock("numCptStock");
        $this->assertEquals("numCptStock", $obj->getNumCptStock());
    }

    /**
     * Tests setNumMandat()
     *
     * @return void
     */
    public function testSetNumMandat(): void {

        $obj = new Comptes2();

        $obj->setNumMandat(10);
        $this->assertEquals(10, $obj->getNumMandat());
    }

    /**
     * Tests setNumVoie()
     *
     * @return void
     */
    public function testSetNumVoie(): void {

        $obj = new Comptes2();

        $obj->setNumVoie("numVoie");
        $this->assertEquals("numVoie", $obj->getNumVoie());
    }

    /**
     * Tests setNumeroCompte()
     *
     * @return void
     */
    public function testSetNumeroCompte(): void {

        $obj = new Comptes2();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Tests setPays()
     *
     * @return void
     */
    public function testSetPays(): void {

        $obj = new Comptes2();

        $obj->setPays("pays");
        $this->assertEquals("pays", $obj->getPays());
    }

    /**
     * Tests setProfession()
     *
     * @return void
     */
    public function testSetProfession(): void {

        $obj = new Comptes2();

        $obj->setProfession("profession");
        $this->assertEquals("profession", $obj->getProfession());
    }

    /**
     * Tests setRib()
     *
     * @return void
     */
    public function testSetRib(): void {

        $obj = new Comptes2();

        $obj->setRib("rib");
        $this->assertEquals("rib", $obj->getRib());
    }

    /**
     * Tests setRib2()
     *
     * @return void
     */
    public function testSetRib2(): void {

        $obj = new Comptes2();

        $obj->setRib2("rib2");
        $this->assertEquals("rib2", $obj->getRib2());
    }

    /**
     * Tests setRib3()
     *
     * @return void
     */
    public function testSetRib3(): void {

        $obj = new Comptes2();

        $obj->setRib3("rib3");
        $this->assertEquals("rib3", $obj->getRib3());
    }

    /**
     * Tests setSiret()
     *
     * @return void
     */
    public function testSetSiret(): void {

        $obj = new Comptes2();

        $obj->setSiret("siret");
        $this->assertEquals("siret", $obj->getSiret());
    }

    /**
     * Tests setSuiviStock()
     *
     * @return void
     */
    public function testSetSuiviStock(): void {

        $obj = new Comptes2();

        $obj->setSuiviStock(true);
        $this->assertEquals(true, $obj->getSuiviStock());
    }

    /**
     * Tests setTel1()
     *
     * @return void
     */
    public function testSetTel1(): void {

        $obj = new Comptes2();

        $obj->setTel1("tel1");
        $this->assertEquals("tel1", $obj->getTel1());
    }

    /**
     * Tests setTel2()
     *
     * @return void
     */
    public function testSetTel2(): void {

        $obj = new Comptes2();

        $obj->setTel2("tel2");
        $this->assertEquals("tel2", $obj->getTel2());
    }

    /**
     * Tests setTermeEcheanceLe()
     *
     * @return void
     */
    public function testSetTermeEcheanceLe(): void {

        $obj = new Comptes2();

        $obj->setTermeEcheanceLe("termeEcheanceLe");
        $this->assertEquals("termeEcheanceLe", $obj->getTermeEcheanceLe());
    }

    /**
     * Tests setTypeSuivi()
     *
     * @return void
     */
    public function testSetTypeSuivi(): void {

        $obj = new Comptes2();

        $obj->setTypeSuivi("typeSuivi");
        $this->assertEquals("typeSuivi", $obj->getTypeSuivi());
    }

    /**
     * Tests setZipCode()
     *
     * @return void
     */
    public function testSetZipCode(): void {

        $obj = new Comptes2();

        $obj->setZipCode("zipCode");
        $this->assertEquals("zipCode", $obj->getZipCode());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Comptes2();

        $this->assertNull($obj->getAffacturage());
        $this->assertNull($obj->getBic());
        $this->assertNull($obj->getBtq());
        $this->assertNull($obj->getBureauDistributeur());
        $this->assertNull($obj->getCodeOfficielCommune());
        $this->assertNull($obj->getCodePostal());
        $this->assertNull($obj->getComplement());
        $this->assertNull($obj->getComplementSuite());
        $this->assertNull($obj->getContrepartieAuto());
        $this->assertNull($obj->getCptFourAffacturage());
        $this->assertNull($obj->getCptOrigine());
        $this->assertNull($obj->getDomBanque());
        $this->assertNull($obj->getDomBanque2());
        $this->assertNull($obj->getDomBanque3());
        $this->assertNull($obj->getEcheanceFinDecade());
        $this->assertNull($obj->getEcheanceFinQuinzaine());
        $this->assertNull($obj->getEmail());
        $this->assertNull($obj->getFax());
        $this->assertNull($obj->getIban());
        $this->assertNull($obj->getIbanCodeImputFrais());
        $this->assertNull($obj->getIdentTva());
        $this->assertNull($obj->getJourDepartEcheance());
        $this->assertNull($obj->getModePaiement());
        $this->assertNull($obj->getNbJoursEcheance());
        $this->assertNull($obj->getNiveauRelance());
        $this->assertNull($obj->getNomVille());
        $this->assertNull($obj->getNomVoie());
        $this->assertNull($obj->getNumCptStock());
        $this->assertNull($obj->getNumMandat());
        $this->assertNull($obj->getNumVoie());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getPays());
        $this->assertNull($obj->getProfession());
        $this->assertNull($obj->getRib());
        $this->assertNull($obj->getRib2());
        $this->assertNull($obj->getRib3());
        $this->assertNull($obj->getSiret());
        $this->assertNull($obj->getSuiviStock());
        $this->assertNull($obj->getTel1());
        $this->assertNull($obj->getTel2());
        $this->assertNull($obj->getTermeEcheanceLe());
        $this->assertNull($obj->getTypeSuivi());
        $this->assertNull($obj->getZipCode());
    }
}
