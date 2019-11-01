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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\Materiel;

/**
 * Materiel test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class MaterielTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Materiel();

        $this->assertNull($obj->getCodeBarre());
        $this->assertNull($obj->getCodeMateriel());
        $this->assertNull($obj->getDateAchat());
        $this->assertNull($obj->getDateDebutAmortissement());
        $this->assertNull($obj->getDateFinAmortissement());
        $this->assertNull($obj->getDateFinService());
        $this->assertNull($obj->getDateMiseEnService());
        $this->assertNull($obj->getDesignation1());
        $this->assertNull($obj->getDesignation2());
        $this->assertNull($obj->getDesignation3());
        $this->assertNull($obj->getDesignation4());
        $this->assertNull($obj->getDesignation5());
        $this->assertNull($obj->getMontantAmortissement());
        $this->assertNull($obj->getNumeroSerie());
        $this->assertNull($obj->getValAchatEuro());
        $this->assertNull($obj->getValAchatFrf());
    }
}
