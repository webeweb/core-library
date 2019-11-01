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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\Tarifs;

/**
 * Tarifs test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class TarifsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Tarifs();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeColCreation());
        $this->assertNull($obj->getCodeColModification());
        $this->assertNull($obj->getCoeffTr1());
        $this->assertNull($obj->getCoeffTr2());
        $this->assertNull($obj->getCoeffTr3());
        $this->assertNull($obj->getCoeffTr4());
        $this->assertNull($obj->getCoeffTr5());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateDebut());
        $this->assertNull($obj->getDateFin());
        $this->assertNull($obj->getDateModification());
        $this->assertNull($obj->getFamArticle());
        $this->assertNull($obj->getFamClient());
        $this->assertNull($obj->getPuArticle());
        $this->assertNull($obj->getPuBase());
        $this->assertNull($obj->getPuTr1());
        $this->assertNull($obj->getPuTr2());
        $this->assertNull($obj->getPuTr3());
        $this->assertNull($obj->getPuTr4());
        $this->assertNull($obj->getPuTr5());
        $this->assertNull($obj->getPrixNetTr1());
        $this->assertNull($obj->getPrixNetTr2());
        $this->assertNull($obj->getPrixNetTr3());
        $this->assertNull($obj->getPrixNetTr4());
        $this->assertNull($obj->getPrixNetTr5());
        $this->assertNull($obj->getQteTr1());
        $this->assertNull($obj->getQteTr2());
        $this->assertNull($obj->getQteTr3());
        $this->assertNull($obj->getQteTr4());
        $this->assertNull($obj->getQteTr5());
        $this->assertNull($obj->getSousFamClient());
        $this->assertNull($obj->getTypeAppliCoef());
        $this->assertNull($obj->getTypeArticle());
    }
}
