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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\Comptes2;

/**
 * Comptes2 test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class Comptes2Test extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

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
