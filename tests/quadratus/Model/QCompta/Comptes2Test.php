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
     * Test setAffacturage()
     *
     * @return void
     */
    public function testSetAffacturage(): void {

        $obj = new Comptes2();

        $obj->setAffacturage(true);
        $this->assertTrue($obj->getAffacturage());
    }

    /**
     * Test setBic()
     *
     * @return void
     */
    public function testSetBic(): void {

        $obj = new Comptes2();

        $obj->setBic("bic");
        $this->assertEquals("bic", $obj->getBic());
    }

    /**
     * Test setBtq()
     *
     * @return void
     */
    public function testSetBtq(): void {

        $obj = new Comptes2();

        $obj->setBtq("btq");
        $this->assertEquals("btq", $obj->getBtq());
    }

    /**
     * Test setBureauDistributeur()
     *
     * @return void
     */
    public function testSetBureauDistributeur(): void {

        $obj = new Comptes2();

        $obj->setBureauDistributeur("bureauDistributeur");
        $this->assertEquals("bureauDistributeur", $obj->getBureauDistributeur());
    }

    /**
     * Test setCodeOfficielCommune()
     *
     * @return void
     */
    public function testSetCodeOfficielCommune(): void {

        $obj = new Comptes2();

        $obj->setCodeOfficielCommune("codeOfficielCommune");
        $this->assertEquals("codeOfficielCommune", $obj->getCodeOfficielCommune());
    }

    /**
     * Test setCodePostal()
     *
     * @return void
     */
    public function testSetCodePostal(): void {

        $obj = new Comptes2();

        $obj->setCodePostal("codePostal");
        $this->assertEquals("codePostal", $obj->getCodePostal());
    }

    /**
     * Test setComplement()
     *
     * @return void
     */
    public function testSetComplement(): void {

        $obj = new Comptes2();

        $obj->setComplement("complement");
        $this->assertEquals("complement", $obj->getComplement());
    }

    /**
     * Test setComplementSuite()
     *
     * @return void
     */
    public function testSetComplementSuite(): void {

        $obj = new Comptes2();

        $obj->setComplementSuite("complementSuite");
        $this->assertEquals("complementSuite", $obj->getComplementSuite());
    }

    /**
     * Test setContrepartieAuto()
     *
     * @return void
     */
    public function testSetContrepartieAuto(): void {

        $obj = new Comptes2();

        $obj->setContrepartieAuto("contrepartieAuto");
        $this->assertEquals("contrepartieAuto", $obj->getContrepartieAuto());
    }

    /**
     * Test setCptFourAffacturage()
     *
     * @return void
     */
    public function testSetCptFourAffacturage(): void {

        $obj = new Comptes2();

        $obj->setCptFourAffacturage("cptFourAffacturage");
        $this->assertEquals("cptFourAffacturage", $obj->getCptFourAffacturage());
    }

    /**
     * Test setCptOrigine()
     *
     * @return void
     */
    public function testSetCptOrigine(): void {

        $obj = new Comptes2();

        $obj->setCptOrigine("cptOrigine");
        $this->assertEquals("cptOrigine", $obj->getCptOrigine());
    }

    /**
     * Test setDomBanque()
     *
     * @return void
     */
    public function testSetDomBanque(): void {

        $obj = new Comptes2();

        $obj->setDomBanque("domBanque");
        $this->assertEquals("domBanque", $obj->getDomBanque());
    }

    /**
     * Test setDomBanque2()
     *
     * @return void
     */
    public function testSetDomBanque2(): void {

        $obj = new Comptes2();

        $obj->setDomBanque2("domBanque2");
        $this->assertEquals("domBanque2", $obj->getDomBanque2());
    }

    /**
     * Test setDomBanque3()
     *
     * @return void
     */
    public function testSetDomBanque3(): void {

        $obj = new Comptes2();

        $obj->setDomBanque3("domBanque3");
        $this->assertEquals("domBanque3", $obj->getDomBanque3());
    }

    /**
     * Test setEcheanceFinDecade()
     *
     * @return void
     */
    public function testSetEcheanceFinDecade(): void {

        $obj = new Comptes2();

        $obj->setEcheanceFinDecade(true);
        $this->assertTrue($obj->getEcheanceFinDecade());
    }

    /**
     * Test setEcheanceFinQuinzaine()
     *
     * @return void
     */
    public function testSetEcheanceFinQuinzaine(): void {

        $obj = new Comptes2();

        $obj->setEcheanceFinQuinzaine(true);
        $this->assertTrue($obj->getEcheanceFinQuinzaine());
    }

    /**
     * Test setEmail()
     *
     * @return void
     */
    public function testSetEmail(): void {

        $obj = new Comptes2();

        $obj->setEmail("email");
        $this->assertEquals("email", $obj->getEmail());
    }

    /**
     * Test setFax()
     *
     * @return void
     */
    public function testSetFax(): void {

        $obj = new Comptes2();

        $obj->setFax("fax");
        $this->assertEquals("fax", $obj->getFax());
    }

    /**
     * Test setIban()
     *
     * @return void
     */
    public function testSetIban(): void {

        $obj = new Comptes2();

        $obj->setIban("iban");
        $this->assertEquals("iban", $obj->getIban());
    }

    /**
     * Test setIbanCodeImputFrais()
     *
     * @return void
     */
    public function testSetIbanCodeImputFrais(): void {

        $obj = new Comptes2();

        $obj->setIbanCodeImputFrais("ibanCodeImputFrais");
        $this->assertEquals("ibanCodeImputFrais", $obj->getIbanCodeImputFrais());
    }

    /**
     * Test setIdentTva()
     *
     * @return void
     */
    public function testSetIdentTva(): void {

        $obj = new Comptes2();

        $obj->setIdentTva("identTva");
        $this->assertEquals("identTva", $obj->getIdentTva());
    }

    /**
     * Test setJourDepartEcheance()
     *
     * @return void
     */
    public function testSetJourDepartEcheance(): void {

        $obj = new Comptes2();

        $obj->setJourDepartEcheance(10);
        $this->assertEquals(10, $obj->getJourDepartEcheance());
    }

    /**
     * Test setModePaiement()
     *
     * @return void
     */
    public function testSetModePaiement(): void {

        $obj = new Comptes2();

        $obj->setModePaiement("modePaiement");
        $this->assertEquals("modePaiement", $obj->getModePaiement());
    }

    /**
     * Test setNbJoursEcheance()
     *
     * @return void
     */
    public function testSetNbJoursEcheance(): void {

        $obj = new Comptes2();

        $obj->setNbJoursEcheance("nbJoursEcheance");
        $this->assertEquals("nbJoursEcheance", $obj->getNbJoursEcheance());
    }

    /**
     * Test setNiveauRelance()
     *
     * @return void
     */
    public function testSetNiveauRelance(): void {

        $obj = new Comptes2();

        $obj->setNiveauRelance("niveauRelance");
        $this->assertEquals("niveauRelance", $obj->getNiveauRelance());
    }

    /**
     * Test setNomVille()
     *
     * @return void
     */
    public function testSetNomVille(): void {

        $obj = new Comptes2();

        $obj->setNomVille("nomVille");
        $this->assertEquals("nomVille", $obj->getNomVille());
    }

    /**
     * Test setNomVoie()
     *
     * @return void
     */
    public function testSetNomVoie(): void {

        $obj = new Comptes2();

        $obj->setNomVoie("nomVoie");
        $this->assertEquals("nomVoie", $obj->getNomVoie());
    }

    /**
     * Test setNumCptStock()
     *
     * @return void
     */
    public function testSetNumCptStock(): void {

        $obj = new Comptes2();

        $obj->setNumCptStock("numCptStock");
        $this->assertEquals("numCptStock", $obj->getNumCptStock());
    }

    /**
     * Test setNumMandat()
     *
     * @return void
     */
    public function testSetNumMandat(): void {

        $obj = new Comptes2();

        $obj->setNumMandat(10);
        $this->assertEquals(10, $obj->getNumMandat());
    }

    /**
     * Test setNumVoie()
     *
     * @return void
     */
    public function testSetNumVoie(): void {

        $obj = new Comptes2();

        $obj->setNumVoie("numVoie");
        $this->assertEquals("numVoie", $obj->getNumVoie());
    }

    /**
     * Test setNumeroCompte()
     *
     * @return void
     */
    public function testSetNumeroCompte(): void {

        $obj = new Comptes2();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Test setPays()
     *
     * @return void
     */
    public function testSetPays(): void {

        $obj = new Comptes2();

        $obj->setPays("pays");
        $this->assertEquals("pays", $obj->getPays());
    }

    /**
     * Test setProfession()
     *
     * @return void
     */
    public function testSetProfession(): void {

        $obj = new Comptes2();

        $obj->setProfession("profession");
        $this->assertEquals("profession", $obj->getProfession());
    }

    /**
     * Test setRib()
     *
     * @return void
     */
    public function testSetRib(): void {

        $obj = new Comptes2();

        $obj->setRib("rib");
        $this->assertEquals("rib", $obj->getRib());
    }

    /**
     * Test setRib2()
     *
     * @return void
     */
    public function testSetRib2(): void {

        $obj = new Comptes2();

        $obj->setRib2("rib2");
        $this->assertEquals("rib2", $obj->getRib2());
    }

    /**
     * Test setRib3()
     *
     * @return void
     */
    public function testSetRib3(): void {

        $obj = new Comptes2();

        $obj->setRib3("rib3");
        $this->assertEquals("rib3", $obj->getRib3());
    }

    /**
     * Test setSiret()
     *
     * @return void
     */
    public function testSetSiret(): void {

        $obj = new Comptes2();

        $obj->setSiret("siret");
        $this->assertEquals("siret", $obj->getSiret());
    }

    /**
     * Test setSuiviStock()
     *
     * @return void
     */
    public function testSetSuiviStock(): void {

        $obj = new Comptes2();

        $obj->setSuiviStock(true);
        $this->assertTrue($obj->getSuiviStock());
    }

    /**
     * Test setTel1()
     *
     * @return void
     */
    public function testSetTel1(): void {

        $obj = new Comptes2();

        $obj->setTel1("tel1");
        $this->assertEquals("tel1", $obj->getTel1());
    }

    /**
     * Test setTel2()
     *
     * @return void
     */
    public function testSetTel2(): void {

        $obj = new Comptes2();

        $obj->setTel2("tel2");
        $this->assertEquals("tel2", $obj->getTel2());
    }

    /**
     * Test setTermeEcheanceLe()
     *
     * @return void
     */
    public function testSetTermeEcheanceLe(): void {

        $obj = new Comptes2();

        $obj->setTermeEcheanceLe("termeEcheanceLe");
        $this->assertEquals("termeEcheanceLe", $obj->getTermeEcheanceLe());
    }

    /**
     * Test setTypeSuivi()
     *
     * @return void
     */
    public function testSetTypeSuivi(): void {

        $obj = new Comptes2();

        $obj->setTypeSuivi("typeSuivi");
        $this->assertEquals("typeSuivi", $obj->getTypeSuivi());
    }

    /**
     * Test setZipCode()
     *
     * @return void
     */
    public function testSetZipCode(): void {

        $obj = new Comptes2();

        $obj->setZipCode("zipCode");
        $this->assertEquals("zipCode", $obj->getZipCode());
    }

    /**
     * Test __construct()
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
