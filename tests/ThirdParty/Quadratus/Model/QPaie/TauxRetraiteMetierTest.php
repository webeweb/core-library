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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\TauxRetraiteMetier;

/**
 * Taux retraite metier test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class TauxRetraiteMetierTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TauxRetraiteMetier();

        $this->assertNull($obj->getActive());
        $this->assertNull($obj->getCategSalarie());
        $this->assertNull($obj->getCodeActivite());
        $this->assertNull($obj->getCodeDucs());
        $this->assertNull($obj->getCodeEditionHisto());
        $this->assertNull($obj->getCodeLibelle());
        $this->assertNull($obj->getCodeMetier());
        $this->assertNull($obj->getCodeOrganisme());
        $this->assertNull($obj->getCompteCharge());
        $this->assertNull($obj->getConditionSpec());
        $this->assertNull($obj->getExclureLoiTepa());
        $this->assertNull($obj->getIndiceCateg());
        $this->assertNull($obj->getLibelleBul());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getQualifiantCotis());
        $this->assertNull($obj->getTypeLibelle());
    }
}
