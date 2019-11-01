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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\Centres;

/**
 * Centres test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class CentresTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Centres();

        $this->assertNull($obj->getAdresseRue1());
        $this->assertNull($obj->getAdresseRue2());
        $this->assertNull($obj->getAdresseVille());
        $this->assertNull($obj->getCentreInactif());
        $this->assertNull($obj->getCleRepartition());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateDevis());
        $this->assertNull($obj->getDescription());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getMargeDirecte());
        $this->assertNull($obj->getNiveauRepartition());
        $this->assertNull($obj->getOrdreEdition());
        $this->assertNull($obj->getRepartitionAna());
        $this->assertNull($obj->getRepartitionAuto());
        $this->assertNull($obj->getResponsable());
        $this->assertNull($obj->getRestrictions());
        $this->assertNull($obj->getSuiviAnneeRecolte());
        $this->assertNull($obj->getSuperficie());
        $this->assertNull($obj->getTypeCentre());
        $this->assertNull($obj->getTypeSuivi());
        $this->assertNull($obj->getTypeSuiviAutreTexte());
        $this->assertNull($obj->getTypeSuiviAutreValeur());
    }
}
