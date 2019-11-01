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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\Logiciels;

/**
 * Logiciels test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class LogicielsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Logiciels();

        $this->assertNull($obj->getCategorie());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeIntervenant());
        $this->assertNull($obj->getCommentaire());
        $this->assertNull($obj->getDateAchat());
        $this->assertNull($obj->getDateFinMaint());
        $this->assertNull($obj->getIndiceAff());
        $this->assertNull($obj->getMaintenance());
        $this->assertNull($obj->getMontantMaint());
        $this->assertNull($obj->getNomLogiciel());
        $this->assertNull($obj->getNumLicence());
        $this->assertNull($obj->getRefImage());
        $this->assertNull($obj->getSousCategorie());
    }
}
