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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\ParamEtiquettes;

/**
 * Param etiquettes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class ParamEtiquettesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ParamEtiquettes();

        $this->assertNull($obj->getAvecCodeBarre());
        $this->assertNull($obj->getAvecPrixVente());
        $this->assertNull($obj->getCodeModele());
        $this->assertNull($obj->getEtiqDeFront());
        $this->assertNull($obj->getEtiqMasque());
        $this->assertNull($obj->getEtiqPlus());
        $this->assertNull($obj->getImprimante());
        $this->assertNull($obj->getInitChamp());
        $this->assertNull($obj->getInitTable());
        $this->assertNull($obj->getInitValeur());
        $this->assertNull($obj->getLgZone());
        $this->assertNull($obj->getLibZone());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getNumeroLigne());
        $this->assertNull($obj->getQteEnt());
        $this->assertNull($obj->getType());
    }
}
