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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\SousLignesComptaGene;

/**
 * Sous lignes compta gene test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class SousLignesComptaGeneTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new SousLignesComptaGene();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeRegroupement());
        $this->assertNull($obj->getIntituleCompte());
        $this->assertNull($obj->getMontant());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getNumeroDocument());
        $this->assertNull($obj->getNumeroLigne());
        $this->assertNull($obj->getNumeroSousLigne());
        $this->assertNull($obj->getTypeDocument());
    }
}
