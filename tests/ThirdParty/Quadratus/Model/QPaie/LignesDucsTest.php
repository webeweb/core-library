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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\LignesDucs;

/**
 * Lignes ducs test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class LignesDucsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new LignesDucs();

        $this->assertNull($obj->getCodeAt());
        $this->assertNull($obj->getCodeCentre());
        $this->assertNull($obj->getCodeDucs());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeInsee());
        $this->assertNull($obj->getCodeLibelle());
        $this->assertNull($obj->getConditionSpec());
        $this->assertNull($obj->getDateApplication());
        $this->assertNull($obj->getExclureFusion());
        $this->assertNull($obj->getIdInstitution());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getIsTaux());
        $this->assertNull($obj->getMarque());
        $this->assertNull($obj->getMontant());
        $this->assertNull($obj->getMtPatronal());
        $this->assertNull($obj->getMtSalarial());
        $this->assertNull($obj->getNbCot());
        $this->assertNull($obj->getNbPatronal());
        $this->assertNull($obj->getNbSalarial());
        $this->assertNull($obj->getOrganisme());
        $this->assertNull($obj->getPeriodeDecla());
        $this->assertNull($obj->getQualifiantCotis());
        $this->assertNull($obj->getSommeBase());
        $this->assertNull($obj->getTauxAt());
        $this->assertNull($obj->getTauxPatronal());
        $this->assertNull($obj->getTauxSalarial());
        $this->assertNull($obj->getTypeBaseUnique());
    }
}
