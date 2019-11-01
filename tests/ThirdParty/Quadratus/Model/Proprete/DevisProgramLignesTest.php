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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\DevisProgramLignes;

/**
 * Devis program lignes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class DevisProgramLignesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DevisProgramLignes();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeEchelle());
        $this->assertNull($obj->getCodeOperation());
        $this->assertNull($obj->getCodeProgramme());
        $this->assertNull($obj->getCoefficient());
        $this->assertNull($obj->getNoteResultat());
        $this->assertNull($obj->getNumDevis());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumLigneProg());
        $this->assertNull($obj->getVitesseTheorique());
    }
}
