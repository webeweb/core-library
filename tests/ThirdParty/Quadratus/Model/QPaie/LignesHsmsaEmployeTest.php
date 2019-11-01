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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\LignesHsmsaEmploye;

/**
 * Lignes hsmsa employe test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class LignesHsmsaEmployeTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new LignesHsmsaEmploye();

        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeUnite());
        $this->assertNull($obj->getMtHs());
        $this->assertNull($obj->getNbHs());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getNumeroEmploye2());
        $this->assertNull($obj->getPerDeb());
        $this->assertNull($obj->getPeriodeDecla());
        $this->assertNull($obj->getTauxHs());
        $this->assertNull($obj->getTypeRemunHs());
    }
}
