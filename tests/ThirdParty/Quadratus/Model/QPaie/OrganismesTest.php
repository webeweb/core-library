<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\Organismes;

/**
 * Organismes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class OrganismesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Organismes();

        $this->assertNull($obj->getCentrePayeur());
        $this->assertNull($obj->getCodeCatCadre());
        $this->assertNull($obj->getCodeCentre());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeNonCadre());
        $this->assertNull($obj->getCodeOrganisme());
        $this->assertNull($obj->getCompteCharge());
        $this->assertNull($obj->getCompteTiers());
        $this->assertNull($obj->getCotAssedicParUrssaf());
        $this->assertNull($obj->getCotitel());
        $this->assertNull($obj->getDossCadre());
        $this->assertNull($obj->getDossNonCadre());
        $this->assertNull($obj->getEditionDucs());
        $this->assertNull($obj->getGestionPaieDecaleeOc());
        $this->assertNull($obj->getGroupeInterne());
        $this->assertNull($obj->getIdIntervenant());
        $this->assertNull($obj->getJourExigible());
        $this->assertNull($obj->getJourLimiteDepot());
        $this->assertNull($obj->getJourReglement());
        $this->assertNull($obj->getMensTrim());
        $this->assertNull($obj->getNoAffiliation());
        $this->assertNull($obj->getOptiqueDucs());
        $this->assertNull($obj->getPaiementEdiVlu());
        $this->assertNull($obj->getPasTraiterEdi());
        $this->assertNull($obj->getRib());
        $this->assertNull($obj->getTelepaiement());
    }
}
