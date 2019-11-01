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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\HistoTauxRetraiteMetier;

/**
 * Histo taux retraite metier test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class HistoTauxRetraiteMetierTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new HistoTauxRetraiteMetier();

        $this->assertNull($obj->getAPartirDe());
        $this->assertNull($obj->getCategSalarie());
        $this->assertNull($obj->getCodeActivite());
        $this->assertNull($obj->getCodeLibelle());
        $this->assertNull($obj->getCodeMetier());
        $this->assertNull($obj->getFormatNonEtendu());
        $this->assertNull($obj->getIndiceCateg());
        $this->assertNull($obj->getMontant());
        $this->assertNull($obj->getTauxPatronal());
        $this->assertNull($obj->getTauxSalarial());
    }
}
