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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\AgendaConstantes;

/**
 * Agenda constantes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class AgendaConstantesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AgendaConstantes();

        $this->assertNull($obj->getArchivagePermanent());
        $this->assertNull($obj->getCodeActivite7());
        $this->assertNull($obj->getCodeActivite8());
        $this->assertNull($obj->getCodeActivite9());
        $this->assertNull($obj->getCouleurActivite1());
        $this->assertNull($obj->getCouleurActivite10());
        $this->assertNull($obj->getCouleurActivite11());
        $this->assertNull($obj->getCouleurActivite2());
        $this->assertNull($obj->getCouleurActivite3());
        $this->assertNull($obj->getCouleurActivite4());
        $this->assertNull($obj->getCouleurActivite5());
        $this->assertNull($obj->getCouleurActivite6());
        $this->assertNull($obj->getCouleurActivite7());
        $this->assertNull($obj->getCouleurActivite8());
        $this->assertNull($obj->getCouleurActivite9());
        $this->assertNull($obj->getCouleurCalendrier());
        $this->assertNull($obj->getCouleurDimJFeries());
        $this->assertNull($obj->getDisabledActivityLabelOnFirstRow());
        $this->assertNull($obj->getDossierFactPme());
        $this->assertNull($obj->getHeureDebut());
        $this->assertNull($obj->getHeureFin());
        $this->assertNull($obj->getLibelleActivite7());
        $this->assertNull($obj->getLibelleActivite8());
        $this->assertNull($obj->getLibelleActivite9());
        $this->assertNull($obj->getMultiDossiers());
        $this->assertNull($obj->getTextColorActivite1());
        $this->assertNull($obj->getTextColorActivite10());
        $this->assertNull($obj->getTextColorActivite11());
        $this->assertNull($obj->getTextColorActivite2());
        $this->assertNull($obj->getTextColorActivite3());
        $this->assertNull($obj->getTextColorActivite4());
        $this->assertNull($obj->getTextColorActivite5());
        $this->assertNull($obj->getTextColorActivite6());
        $this->assertNull($obj->getTextColorActivite7());
        $this->assertNull($obj->getTextColorActivite8());
        $this->assertNull($obj->getTextColorActivite9());
        $this->assertNull($obj->getTextColorDimJFeries());
        $this->assertNull($obj->getUseNewGpeParam());
        $this->assertNull($obj->getWeekMode());
    }
}
