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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\ActionsCoSuivi;

/**
 * Actions co suivi test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class ActionsCoSuiviTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ActionsCoSuivi();

        $this->assertNull($obj->getCodeAction());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeManif());
        $this->assertNull($obj->getConfirmes());
        $this->assertNull($obj->getContrat());
        $this->assertNull($obj->getInscrits());
        $this->assertNull($obj->getNumInterlocuteur());
        $this->assertNull($obj->getNumSeance());
        $this->assertNull($obj->getPresents());
        $this->assertNull($obj->getPriseRdv());
        $this->assertNull($obj->getTypeInvite());
    }
}
