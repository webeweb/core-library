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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\DevisLignes;

/**
 * Devis lignes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class DevisLignesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DevisLignes();

        $this->assertNull($obj->getBatiment());
        $this->assertNull($obj->getCodeLocal());
        $this->assertNull($obj->getCodeRevetement());
        $this->assertNull($obj->getEtage());
        $this->assertNull($obj->getIdentification());
        $this->assertNull($obj->getLibelleLocal());
        $this->assertNull($obj->getLibelleRevetement());
        $this->assertNull($obj->getNumDevis());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumProgramme());
        $this->assertNull($obj->getSolMur());
        $this->assertNull($obj->getSurface());
        $this->assertNull($obj->getZoneGeographique());
    }
}
