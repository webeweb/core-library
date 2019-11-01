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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\Historique;

/**
 * Historique test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class HistoriqueTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Historique();

        $this->assertNull($obj->getAnnees());
        $this->assertNull($obj->getAnneesPlus());
        $this->assertNull($obj->getCsValide());
        $this->assertNull($obj->getCtValide());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getRub());
        $this->assertNull($obj->getService());
        $this->assertNull($obj->getVisiteMedicale());
    }
}
