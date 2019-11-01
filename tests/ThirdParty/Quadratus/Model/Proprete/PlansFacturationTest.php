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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\PlansFacturation;

/**
 * Plans facturation test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class PlansFacturationTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new PlansFacturation();

        $this->assertNull($obj->getAou());
        $this->assertNull($obj->getAvr());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeRegroupement());
        $this->assertNull($obj->getCoefficient());
        $this->assertNull($obj->getDateFinValidite());
        $this->assertNull($obj->getDec());
        $this->assertNull($obj->getDesignation());
        $this->assertNull($obj->getDesignation2());
        $this->assertNull($obj->getDesignation3());
        $this->assertNull($obj->getDesignationBis());
        $this->assertNull($obj->getDesignationBis2());
        $this->assertNull($obj->getDesignationBis3());
        $this->assertNull($obj->getDesignationRtf());
        $this->assertNull($obj->getDuree());
        $this->assertNull($obj->getFev());
        $this->assertNull($obj->getFinPeriodeTarif());
        $this->assertNull($obj->getIndice());
        $this->assertNull($obj->getJan());
        $this->assertNull($obj->getJui());
        $this->assertNull($obj->getJuin());
        $this->assertNull($obj->getMai());
        $this->assertNull($obj->getMar());
        $this->assertNull($obj->getNov());
        $this->assertNull($obj->getNumBt());
        $this->assertNull($obj->getNumeroDevis());
        $this->assertNull($obj->getNumeroHistorique());
        $this->assertNull($obj->getOct());
        $this->assertNull($obj->getPeriodeTarif());
        $this->assertNull($obj->getPosteRent());
        $this->assertNull($obj->getPrixAchat());
        $this->assertNull($obj->getPrixVente());
        $this->assertNull($obj->getPxFacture());
        $this->assertNull($obj->getQuantite());
        $this->assertNull($obj->getRefArticle());
        $this->assertNull($obj->getRefPosteCdeWebFt());
        $this->assertNull($obj->getSep());
        $this->assertNull($obj->getTaux());
        $this->assertNull($obj->getVentilMarge());
    }
}
