<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\Previsionnel;

/**
 * Previsionnel test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class PrevisionnelTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Previsionnel();

        $this->assertNull($obj->getAnnee());
        $this->assertNull($obj->getDateApplication());
        $this->assertNull($obj->getDebutSemaine());
        $this->assertNull($obj->getHorairePrevu());
        $this->assertNull($obj->getNumeroGrilleType());
        $this->assertNull($obj->getNumeroSemaine());
    }
}
