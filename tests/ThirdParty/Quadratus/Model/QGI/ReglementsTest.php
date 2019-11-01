<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\Reglements;

/**
 * Reglements test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class ReglementsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Reglements();

        $this->assertNull($obj->getBic());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeBanque());
        $this->assertNull($obj->getCodeComptable());
        $this->assertNull($obj->getCompteCaisse());
        $this->assertNull($obj->getCptPortefeuille());
        $this->assertNull($obj->getDateEcheanceCpta());
        $this->assertNull($obj->getDefinitionPaiement());
        $this->assertNull($obj->getDefinitionRemise());
        $this->assertNull($obj->getDetailEcheanceCpta());
        $this->assertNull($obj->getDetailEffetCpta());
        $this->assertNull($obj->getDeviseCaisse());
        $this->assertNull($obj->getDomiciliationBancaire1());
        $this->assertNull($obj->getDomiciliationBancaire2());
        $this->assertNull($obj->getDureeEcheances());
        $this->assertNull($obj->getEcheanceFinDecade());
        $this->assertNull($obj->getEcheanceFinQuinzaine());
        $this->assertNull($obj->getEditDateEcheance());
        $this->assertNull($obj->getEditerCheque());
        $this->assertNull($obj->getEspecesCaisse());
        $this->assertNull($obj->getGestionPaiements());
        $this->assertNull($obj->getIban());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getIntitule2());
        $this->assertNull($obj->getIntitule3());
        $this->assertNull($obj->getLcr());
        $this->assertNull($obj->getLibEcrCaisse());
        $this->assertNull($obj->getNombreEcheances());
        $this->assertNull($obj->getPaiementDepartLe());
        $this->assertNull($obj->getPaiementLe());
        $this->assertNull($obj->getPaiementNombreDeJours());
        $this->assertNull($obj->getPasDeTiroirCaisse());
        $this->assertNull($obj->getPasEffetAvoir());
        $this->assertNull($obj->getRib());
        $this->assertNull($obj->getRemisePied());
        $this->assertNull($obj->getTraiteEditer());
        $this->assertNull($obj->getTypeAcceptation());
    }
}
