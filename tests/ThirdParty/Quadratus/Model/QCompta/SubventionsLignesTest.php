<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\SubventionsLignes;

/**
 * Subventions lignes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class SubventionsLignesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new SubventionsLignes();

        $this->assertNull($obj->getAnnee());
        $this->assertNull($obj->getMontantRestant());
        $this->assertNull($obj->getMontantVir());
        $this->assertNull($obj->getNumContrat());
        $this->assertNull($obj->getNumCptSubvention());
        $this->assertNull($obj->getNumLigne());
    }
}
