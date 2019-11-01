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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\LocationsFi;

/**
 * Locations fi test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class LocationsFiTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new LocationsFi();

        $this->assertNull($obj->getBureau());
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
        $this->assertNull($obj->getDateFinContrat());
        $this->assertNull($obj->getDateMiseService());
        $this->assertNull($obj->getGuidVehicule());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getLibelleFrn());
        $this->assertNull($obj->getMateriauxAgricole());
        $this->assertNull($obj->getMontantTva());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getNumeroPj());
        $this->assertNull($obj->getQuantite());
        $this->assertNull($obj->getService());
        $this->assertNull($obj->getTpDuree());
        $this->assertNull($obj->getTpEchoirEchu());
        $this->assertNull($obj->getTpMoisAnnee());
        $this->assertNull($obj->getTpMonttDepot());
        $this->assertNull($obj->getTpPeriodicite());
        $this->assertNull($obj->getTpPremierPaiement());
        $this->assertNull($obj->getTaxePro());
        $this->assertNull($obj->getValeurHt());
        $this->assertNull($obj->getValeurLocative());
    }
}
