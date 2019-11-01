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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\iSessions;

/**
 * i sessions test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class iSessionsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new iSessions();

        $this->assertNull($obj->getAdresseIp());
        $this->assertNull($obj->getAppli());
        $this->assertNull($obj->getCodeUser());
        $this->assertNull($obj->getDateActive());
        $this->assertNull($obj->getDateAdded());
        $this->assertNull($obj->getDossier());
        $this->assertNull($obj->getId());
    }
}
