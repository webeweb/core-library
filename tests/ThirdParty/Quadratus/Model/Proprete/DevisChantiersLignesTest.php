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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\DevisChantiersLignes;

/**
 * Devis chantiers lignes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class DevisChantiersLignesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DevisChantiersLignes();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeLocalType());
        $this->assertNull($obj->getCodeRevetement());
        $this->assertNull($obj->getMontantHt());
        $this->assertNull($obj->getNumDevis());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getSolMur());
        $this->assertNull($obj->getSurface());
        $this->assertNull($obj->getUniqIdNoeud());
    }
}
