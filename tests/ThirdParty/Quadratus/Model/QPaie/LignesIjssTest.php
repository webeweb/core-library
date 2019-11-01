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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\LignesIjss;

/**
 * Lignes ijss test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class LignesIjssTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new LignesIjss();

        $this->assertNull($obj->getMontant());
        $this->assertNull($obj->getMontant2());
        $this->assertNull($obj->getMontantEuroOuFranc());
        $this->assertNull($obj->getMotif());
        $this->assertNull($obj->getMtBrutPerteSalaire());
        $this->assertNull($obj->getNbC());
        $this->assertNull($obj->getNbE());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumeroAttestation());
        $this->assertNull($obj->getPeriodeDeb());
        $this->assertNull($obj->getPeriodeFin());
        $this->assertNull($obj->getSalRetEuroOuFranc());
        $this->assertNull($obj->getSalaireRet());
        $this->assertNull($obj->getSommeRegul1());
        $this->assertNull($obj->getSommeRegul2());
    }
}
