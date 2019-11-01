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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\CreditsBails;

/**
 * Credits bails test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class CreditsBailsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new CreditsBails();

        $this->assertNull($obj->getAdAmortAnterieur());
        $this->assertNull($obj->getAdAmortAnterieur2());
        $this->assertNull($obj->getAdAnneesAmort());
        $this->assertNull($obj->getAdCoeffDegressif());
        $this->assertNull($obj->getAdDotation());
        $this->assertNull($obj->getAdDotation2());
        $this->assertNull($obj->getAdDotationExcept());
        $this->assertNull($obj->getAdDuree());
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
        $this->assertNull($obj->getBaseTaxePro());
        $this->assertNull($obj->getBureau());
        $this->assertNull($obj->getCbEnFrancs());
        $this->assertNull($obj->getCrrDate());
        $this->assertNull($obj->getCrrpmValueCt());
        $this->assertNull($obj->getCrrpmValueLt());
        $this->assertNull($obj->getCrrPxCessionHt());
        $this->assertNull($obj->getCrrQteVendue());
        $this->assertNull($obj->getCrrSupplAmort());
        $this->assertNull($obj->getCrrSupplValeur());
        $this->assertNull($obj->getCrrType());
        $this->assertNull($obj->getCrValeurEuros());
        $this->assertNull($obj->getCentreAnalytique());
        $this->assertNull($obj->getCodeJournalEcheance());
        $this->assertNull($obj->getCodeJournalPaiement());
        $this->assertNull($obj->getCodeTva());
        $this->assertNull($obj->getCompteFrn());
        $this->assertNull($obj->getCptAssurance());
        $this->assertNull($obj->getCptCharge());
        $this->assertNull($obj->getCptEntretien());
        $this->assertNull($obj->getCptTva());
        $this->assertNull($obj->getCptTvaAssu());
        $this->assertNull($obj->getDin());
        $this->assertNull($obj->getDateAcquisition());
        $this->assertNull($obj->getDateMiseService());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getGuidVehicule());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getLibelleFrn());
        $this->assertNull($obj->getLimiteAmort());
        $this->assertNull($obj->getMateriauxAgricole());
        $this->assertNull($obj->getMontantTva());
        $this->assertNull($obj->getNatureAnalytique());
        $this->assertNull($obj->getNumDeuxImmoRachat());
        $this->assertNull($obj->getNumImmoRachat());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getNumeroDeux());
        $this->assertNull($obj->getNumeroPj());
        $this->assertNull($obj->getQuantite());
        $this->assertNull($obj->getService());
        $this->assertNull($obj->getTpDuree());
        $this->assertNull($obj->getTpEchoirEchu());
        $this->assertNull($obj->getTpMoisAnnee());
        $this->assertNull($obj->getTpMonttDepot());
        $this->assertNull($obj->getTpPeriodicite());
        $this->assertNull($obj->getTpPremierPaiement());
        $this->assertNull($obj->getTaxeFonciere());
        $this->assertNull($obj->getTaxePro());
        $this->assertNull($obj->getValeurEuros());
        $this->assertNull($obj->getValeurHt());
    }
}
