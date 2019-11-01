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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\Confidentialite;

/**
 * Confidentialite test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class ConfidentialiteTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Confidentialite();

        $this->assertNull($obj->getActivationLstRestriArt());
        $this->assertNull($obj->getActivationLstRestriCli());
        $this->assertNull($obj->getActivationLstRestriFrn());
        $this->assertNull($obj->getActiveConfMenusQb());
        $this->assertNull($obj->getActiveConfMenusQb2());
        $this->assertNull($obj->getActiveConfMenusQc());
        $this->assertNull($obj->getActiveConfMenusQfact());
        $this->assertNull($obj->getActiveConfMenusQgi());
        $this->assertNull($obj->getActiveConfMenusQp());
        $this->assertNull($obj->getActiveConfMenusQprop());
        $this->assertNull($obj->getActiveConfMenusQtrs());
        $this->assertNull($obj->getMasquerBaseAccess());
        $this->assertNull($obj->getSelLstRestriArtDef());
        $this->assertNull($obj->getSelLstRestriCliDef());
        $this->assertNull($obj->getSelLstRestriFrnDef());
    }
}
