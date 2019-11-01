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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\Etiquettes;

/**
 * Etiquettes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class EtiquettesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Etiquettes();

        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeBarre());
        $this->assertNull($obj->getCodeCliFour());
        $this->assertNull($obj->getCodeModele());
        $this->assertNull($obj->getEtiqPlus());
        $this->assertNull($obj->getImprimante());
        $this->assertNull($obj->getPrixVente());
        $this->assertNull($obj->getType());
        $this->assertNull($obj->getZone1());
        $this->assertNull($obj->getZone10());
        $this->assertNull($obj->getZone11());
        $this->assertNull($obj->getZone12());
        $this->assertNull($obj->getZone13());
        $this->assertNull($obj->getZone14());
        $this->assertNull($obj->getZone15());
        $this->assertNull($obj->getZone2());
        $this->assertNull($obj->getZone3());
        $this->assertNull($obj->getZone4());
        $this->assertNull($obj->getZone5());
        $this->assertNull($obj->getZone6());
        $this->assertNull($obj->getZone7());
        $this->assertNull($obj->getZone8());
        $this->assertNull($obj->getZone9());
    }
}
