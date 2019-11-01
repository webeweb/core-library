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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\FichesExposition;

/**
 * Fiches exposition test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class FichesExpositionTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new FichesExposition();

        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getCodePrestation());
        $this->assertNull($obj->getCodeProduit());
        $this->assertNull($obj->getDateCtrl());
        $this->assertNull($obj->getDateDebExpo());
        $this->assertNull($obj->getDateFiche());
        $this->assertNull($obj->getDateFinExpo());
        $this->assertNull($obj->getLstCodePhase());
        $this->assertNull($obj->getLstCodePrev());
        $this->assertNull($obj->getResuCtrl());
        $this->assertNull($obj->getTempsExposition());
    }
}
