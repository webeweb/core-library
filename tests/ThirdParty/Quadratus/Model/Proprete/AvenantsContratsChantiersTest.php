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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\AvenantsContratsChantiers;

/**
 * Avenants contrats chantiers test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class AvenantsContratsChantiersTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AvenantsContratsChantiers();

        $this->assertNull($obj->getCodeAbsence());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getCodeTitulaire());
        $this->assertNull($obj->getNumeroAvenant());
        $this->assertNull($obj->getNumeroLigne());
        $this->assertNull($obj->getRemplaceAu());
        $this->assertNull($obj->getRemplaceDu());
        $this->assertNull($obj->getTypeDocument());
    }
}
