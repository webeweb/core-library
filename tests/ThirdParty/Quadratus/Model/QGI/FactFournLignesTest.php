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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\FactFournLignes;

/**
 * Fact fourn lignes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class FactFournLignesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new FactFournLignes();

        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeMission());
        $this->assertNull($obj->getCollaborateur());
        $this->assertNull($obj->getCompte());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getMontantCredit());
        $this->assertNull($obj->getMontantDebit());
        $this->assertNull($obj->getNumEntete());
        $this->assertNull($obj->getNumLigne());
    }
}
