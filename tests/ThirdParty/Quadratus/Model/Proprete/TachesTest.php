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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\Taches;

/**
 * Taches test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class TachesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Taches();

        $this->assertNull($obj->getAutoIncr());
        $this->assertNull($obj->getCadence());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeAnalytique());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeDernSemGen());
        $this->assertNull($obj->getCodePrimeDimanche1Type2());
        $this->assertNull($obj->getCodePrimeJf1Type2());
        $this->assertNull($obj->getCodePrimeNuit1Type2());
        $this->assertNull($obj->getCodeTache());
        $this->assertNull($obj->getCodeTacheType());
        $this->assertNull($obj->getDescriptif());
        $this->assertNull($obj->getDtDernSemGen());
        $this->assertNull($obj->getDureeBudget());
        $this->assertNull($obj->getFichePoste());
        $this->assertNull($obj->getGestionHotellerie());
        $this->assertNull($obj->getMajDimNormalType2());
        $this->assertNull($obj->getMajJfNormalType2());
        $this->assertNull($obj->getMajNuitNormalType2());
        $this->assertNull($obj->getNiveauQualif());
        $this->assertNull($obj->getNonOeuvrant());
        $this->assertNull($obj->getNumBt());
        $this->assertNull($obj->getPlanningDernSemPrioritaire());
        $this->assertNull($obj->getPosteRent());
        $this->assertNull($obj->getSuiviHeures());
    }
}
