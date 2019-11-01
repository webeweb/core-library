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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\Chantiers;

/**
 * Chantiers test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class ChantiersTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Chantiers();

        $this->assertNull($obj->getAdFbtq());
        $this->assertNull($obj->getAdFBureauDistributeur());
        $this->assertNull($obj->getAdFCivilite());
        $this->assertNull($obj->getAdFCodePays());
        $this->assertNull($obj->getAdFCodePostal());
        $this->assertNull($obj->getAdFComplement());
        $this->assertNull($obj->getAdFNomClient());
        $this->assertNull($obj->getAdFNomSuite());
        $this->assertNull($obj->getAdFNomSuite2());
        $this->assertNull($obj->getAdFNomSuite3());
        $this->assertNull($obj->getAdFNomVoie());
        $this->assertNull($obj->getAdFNumVoie());
        $this->assertNull($obj->getAdFTypeAdresse());
        $this->assertNull($obj->getAdresse());
        $this->assertNull($obj->getBtq());
        $this->assertNull($obj->getBtqLivraison());
        $this->assertNull($obj->getBudgetCommande());
        $this->assertNull($obj->getBureauDistributeur());
        $this->assertNull($obj->getBureauDistributeurLivraison());
        $this->assertNull($obj->getChantierPonctuel());
        $this->assertNull($obj->getChefEquipe());
        $this->assertNull($obj->getCleAlpha());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeAgence());
        $this->assertNull($obj->getCodeAnalytique());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCommercial());
        $this->assertNull($obj->getCodeEmpInspecteur());
        $this->assertNull($obj->getCodeFormule());
        $this->assertNull($obj->getCodeLivraison());
        $this->assertNull($obj->getCodePays());
        $this->assertNull($obj->getCodePostal());
        $this->assertNull($obj->getCodePostalLivraison());
        $this->assertNull($obj->getCodeRegMarge());
        $this->assertNull($obj->getCodeRevision());
        $this->assertNull($obj->getCodeTva());
        $this->assertNull($obj->getCodeVentilCompta());
        $this->assertNull($obj->getCollectif());
        $this->assertNull($obj->getCommandeIsolee());
        $this->assertNull($obj->getComplementLivraison());
        $this->assertNull($obj->getComplement());
        $this->assertNull($obj->getDateCreat());
        $this->assertNull($obj->getDateDebut());
        $this->assertNull($obj->getDateEcheanceContrat());
        $this->assertNull($obj->getDateFin());
        $this->assertNull($obj->getDateModif());
        $this->assertNull($obj->getDateRevision());
        $this->assertNull($obj->getDescriptif());
        $this->assertNull($obj->getDtAvantDernPrepa());
        $this->assertNull($obj->getDtDernPrepa());
        $this->assertNull($obj->getDtValiditeFactDeb());
        $this->assertNull($obj->getDtValiditeFactDebDebMois());
        $this->assertNull($obj->getDtValiditeFactFin());
        $this->assertNull($obj->getDtValiditeFactFinFinMois());
        $this->assertNull($obj->getEcheanceAnnuelle());
        $this->assertNull($obj->getFactNegoceIsolee());
        $this->assertNull($obj->getFactureIsolee());
        $this->assertNull($obj->getJourFact());
        $this->assertNull($obj->getLatitude());
        $this->assertNull($obj->getLoiChatelSurFacture());
        $this->assertNull($obj->getLongitude());
        $this->assertNull($obj->getMajStockByDa());
        $this->assertNull($obj->getNbControlesPrevus());
        $this->assertNull($obj->getNbMoisPreavis());
        $this->assertNull($obj->getNomAdresse());
        $this->assertNull($obj->getNomChantier());
        $this->assertNull($obj->getNomLivraison());
        $this->assertNull($obj->getNomResponsable());
        $this->assertNull($obj->getNomSuite());
        $this->assertNull($obj->getNomSuiteLivraison());
        $this->assertNull($obj->getNomVoie());
        $this->assertNull($obj->getNomVoieLivraison());
        $this->assertNull($obj->getNumVoie());
        $this->assertNull($obj->getNumVoieLivraison());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getPlanFact());
        $this->assertNull($obj->getPourcConsoProduit());
        $this->assertNull($obj->getPourcMargePrevis());
        $this->assertNull($obj->getReferenceFacture());
        $this->assertNull($obj->getReferenceFacture2());
        $this->assertNull($obj->getRuptDateLivraison());
        $this->assertNull($obj->getTelephone());
    }
}
