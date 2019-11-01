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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\SousLignesAnalytiques;

/**
 * Sous lignes analytiques test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class SousLignesAnalytiquesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new SousLignesAnalytiques();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeCentre());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeNature());
        $this->assertNull($obj->getCodeRegroupement());
        $this->assertNull($obj->getMontant());
        $this->assertNull($obj->getNumeroDocument());
        $this->assertNull($obj->getNumeroLigne());
        $this->assertNull($obj->getNumeroLigneAnal());
        $this->assertNull($obj->getNumeroSousLigneCptHt());
        $this->assertNull($obj->getTypeDocument());
    }
}
