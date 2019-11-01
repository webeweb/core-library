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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\LignesMsaPenibilite;

/**
 * Lignes msa penibilite test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class LignesMsaPenibiliteTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new LignesMsaPenibilite();

        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeRisque1());
        $this->assertNull($obj->getCodeRisque10());
        $this->assertNull($obj->getCodeRisque2());
        $this->assertNull($obj->getCodeRisque3());
        $this->assertNull($obj->getCodeRisque4());
        $this->assertNull($obj->getCodeRisque5());
        $this->assertNull($obj->getCodeRisque6());
        $this->assertNull($obj->getCodeRisque7());
        $this->assertNull($obj->getCodeRisque8());
        $this->assertNull($obj->getCodeRisque9());
        $this->assertNull($obj->getCodeUnite());
        $this->assertNull($obj->getDtDebPenibilite());
        $this->assertNull($obj->getDtDebPer());
        $this->assertNull($obj->getDtFinPenibilite());
        $this->assertNull($obj->getDtFinPer());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPeriodeDecla());
    }
}
