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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\Immobilisations;

/**
 * Immobilisations test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class ImmobilisationsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Immobilisations();

        $this->assertNull($obj->getAdAmortAnterieur());
        $this->assertNull($obj->getAdAmortAnterieur2());
        $this->assertNull($obj->getAdAnneesAmort());
        $this->assertNull($obj->getAdCoeffDegressif());
        $this->assertNull($obj->getAdDeductionAmortAnterieur());
        $this->assertNull($obj->getAdDeductionDotation());
        $this->assertNull($obj->getAdDotation());
        $this->assertNull($obj->getAdDotation2());
        $this->assertNull($obj->getAdDotationExcept());
        $this->assertNull($obj->getAdDuree());
        $this->assertNull($obj->getAdDureeTot());
        $this->assertNull($obj->getAdGarderDotSaisie());
        $this->assertNull($obj->getAdQuantite());
        $this->assertNull($obj->getAdTauxLineaire());
        $this->assertNull($obj->getAdType());
        $this->assertNull($obj->getAfAmortAnterieur());
        $this->assertNull($obj->getAfAnneesAmort());
        $this->assertNull($obj->getAfCoeffDegressif());
        $this->assertNull($obj->getAfDotation());
        $this->assertNull($obj->getAfDuree());
        $this->assertNull($obj->getAfsii());
        $this->assertNull($obj->getAfTauxExcept());
        $this->assertNull($obj->getAfTauxLineaire());
        $this->assertNull($obj->getAfType());
        $this->assertNull($obj->getArt151DureeDejaEtalee());
        $this->assertNull($obj->getArt151DureeEtalement());
        $this->assertNull($obj->getArt151MontantDejaEtale());
        $this->assertNull($obj->getArt151MontantEtaleAnnee());
        $this->assertNull($obj->getBaseCalcul());
        $this->assertNull($obj->getBaseTaxePro());
        $this->assertNull($obj->getBureau());
        $this->assertNull($obj->getCrIsDot());
        $this->assertNull($obj->getCrr151Motif());
        $this->assertNull($obj->getCrr151PmValueCt());
        $this->assertNull($obj->getCrr151PmValueLt());
        $this->assertNull($obj->getCrrDate());
        $this->assertNull($obj->getCrrpmValueCt());
        $this->assertNull($obj->getCrrpmValueCtf());
        $this->assertNull($obj->getCrrpmValueLt());
        $this->assertNull($obj->getCrrpmValueLtf());
        $this->assertNull($obj->getCrrPxCessionHt());
        $this->assertNull($obj->getCrrQteVendue());
        $this->assertNull($obj->getCrrSupplAmort());
        $this->assertNull($obj->getCrrSupplValeur());
        $this->assertNull($obj->getCrrType());
        $this->assertNull($obj->getCTauxImp());
        $this->assertNull($obj->getCValeurEuros());
        $this->assertNull($obj->getCentreAnalytique());
        $this->assertNull($obj->getCodeTva());
        $this->assertNull($obj->getCompteFrn());
        $this->assertNull($obj->getDin());
        $this->assertNull($obj->getDateAcqForfait());
        $this->assertNull($obj->getDateAcquisition());
        $this->assertNull($obj->getDateMiseService());
        $this->assertNull($obj->getDateReeval());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getFamille());
        $this->assertNull($obj->getGuidVehicule());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getLibelleFrn());
        $this->assertNull($obj->getLibelleQuantite());
        $this->assertNull($obj->getLimiteAmort());
        $this->assertNull($obj->getMajoration());
        $this->assertNull($obj->getMateriauxAgricole());
        $this->assertNull($obj->getMontantTva());
        $this->assertNull($obj->getNatureAnalytique());
        $this->assertNull($obj->getNbMoisMajoration());
        $this->assertNull($obj->getNumCptTransDot());
        $this->assertNull($obj->getNumDossOrg());
        $this->assertNull($obj->getNumEnsRealloc());
        $this->assertNull($obj->getNumEnsemble());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getNumeroDeux());
        $this->assertNull($obj->getNumeroPj());
        $this->assertNull($obj->getPilotage());
        $this->assertNull($obj->getQuantite());
        $this->assertNull($obj->getService());
        $this->assertNull($obj->getSite());
        $this->assertNull($obj->getTpDateOrigine());
        $this->assertNull($obj->getTauxTva());
        $this->assertNull($obj->getTaxeFonciere());
        $this->assertNull($obj->getTaxePro());
        $this->assertNull($obj->getVDate());
        $this->assertNull($obj->getVncRealloc());
        $this->assertNull($obj->getVNumero());
        $this->assertNull($obj->getVNumeroCompte());
        $this->assertNull($obj->getVNumeroCompteIni());
        $this->assertNull($obj->getVNumeroDeux());
        $this->assertNull($obj->getVNumeroDeuxIni());
        $this->assertNull($obj->getVNumeroIni());
        $this->assertNull($obj->getValeurAcqForfait());
        $this->assertNull($obj->getValeurBaseAmortissement());
        $this->assertNull($obj->getValeurDeduction());
        $this->assertNull($obj->getValeurHt());
        $this->assertNull($obj->getValeurHtOrigine());
        $this->assertNull($obj->getZoneLibre1());
        $this->assertNull($obj->getZoneLibre2());
        $this->assertNull($obj->getZoneLibre3());
    }
}
