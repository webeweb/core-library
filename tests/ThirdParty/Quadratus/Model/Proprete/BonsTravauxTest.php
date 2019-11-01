<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\BonsTravaux;

/**
 * Bons travaux test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class BonsTravauxTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new BonsTravaux();

        $this->assertNull($obj->getAdBtbtq());
        $this->assertNull($obj->getAdBtBureauDistributeur());
        $this->assertNull($obj->getAdBtCivilite());
        $this->assertNull($obj->getAdBtCodePays());
        $this->assertNull($obj->getAdBtCodePostal());
        $this->assertNull($obj->getAdBtComplement());
        $this->assertNull($obj->getAdBtNom());
        $this->assertNull($obj->getAdBtNomSuite());
        $this->assertNull($obj->getAdBtNomVoie());
        $this->assertNull($obj->getAdBtNumVoie());
        $this->assertNull($obj->getAdFbtq());
        $this->assertNull($obj->getAdFBureauDistributeur());
        $this->assertNull($obj->getAdFCivilite());
        $this->assertNull($obj->getAdFCodePays());
        $this->assertNull($obj->getAdFCodePostal());
        $this->assertNull($obj->getAdFComplement());
        $this->assertNull($obj->getAdFNom());
        $this->assertNull($obj->getAdFNomSuite());
        $this->assertNull($obj->getAdFNomSuite2());
        $this->assertNull($obj->getAdFNomSuite3());
        $this->assertNull($obj->getAdFNomVoie());
        $this->assertNull($obj->getAdFNumVoie());
        $this->assertNull($obj->getAdresseBtSaisie());
        $this->assertNull($obj->getAdresseFacturationSaisie());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeFrequence());
        $this->assertNull($obj->getCodeTacheBt());
        $this->assertNull($obj->getCodeTournee());
        $this->assertNull($obj->getCritereListe1());
        $this->assertNull($obj->getCritereListe2());
        $this->assertNull($obj->getCritereNumerique1());
        $this->assertNull($obj->getCritereNumerique2());
        $this->assertNull($obj->getCritereTexte1());
        $this->assertNull($obj->getCritereTexte2());
        $this->assertNull($obj->getDateDernierPassage());
        $this->assertNull($obj->getDateFinValidite());
        $this->assertNull($obj->getDatePremierPassage());
        $this->assertNull($obj->getDateValidite());
        $this->assertNull($obj->getDescription());
        $this->assertNull($obj->getEquipe());
        $this->assertNull($obj->getFrequence());
        $this->assertNull($obj->getFrequenceSuite());
        $this->assertNull($obj->getGestionPlanning());
        $this->assertNull($obj->getHeureDeb());
        $this->assertNull($obj->getLatitude());
        $this->assertNull($obj->getLongitude());
        $this->assertNull($obj->getMentionSpeciale());
        $this->assertNull($obj->getNbHeures());
        $this->assertNull($obj->getNbJours());
        $this->assertNull($obj->getNumBt());
        $this->assertNull($obj->getPosteRent());
        $this->assertNull($obj->getSaisieInterJour());
        $this->assertNull($obj->getTravailleDimanche());
        $this->assertNull($obj->getTravailleJoursFeries());
        $this->assertNull($obj->getTravailleSamedi());
        $this->assertNull($obj->getTypeFrequence());
        $this->assertNull($obj->getUnBonParMois());
    }
}
