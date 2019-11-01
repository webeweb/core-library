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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\BoniMali;

/**
 * Boni mali test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class BoniMaliTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new BoniMali();

        $this->assertNull($obj->getBmCalcule());
        $this->assertNull($obj->getBonus());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeMission());
        $this->assertNull($obj->getDateBm());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getMalus());
        $this->assertNull($obj->getMonnaie());
        $this->assertNull($obj->getNumeroBm());
        $this->assertNull($obj->getNumeroLigne());
    }
}
