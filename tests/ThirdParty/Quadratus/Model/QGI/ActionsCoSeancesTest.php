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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\ActionsCoSeances;

/**
 * Actions co seances test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class ActionsCoSeancesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ActionsCoSeances();

        $this->assertNull($obj->getCodeAction());
        $this->assertNull($obj->getCodeManif());
        $this->assertNull($obj->getDateSeance());
        $this->assertNull($obj->getHeureDeb());
        $this->assertNull($obj->getHeureFin());
        $this->assertNull($obj->getLibelleSeance());
        $this->assertNull($obj->getNumSeance());
    }
}
