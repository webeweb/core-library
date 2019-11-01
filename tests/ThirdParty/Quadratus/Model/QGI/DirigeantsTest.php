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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\Dirigeants;

/**
 * Dirigeants test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class DirigeantsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Dirigeants();

        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeDirigeant());
        $this->assertNull($obj->getCodeFonction());
        $this->assertNull($obj->getDateNomination());
        $this->assertNull($obj->getDuree());
        $this->assertNull($obj->getId());
        $this->assertNull($obj->getObservations());
    }
}
