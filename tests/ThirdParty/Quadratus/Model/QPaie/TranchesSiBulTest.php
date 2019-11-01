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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\TranchesSiBul;

/**
 * Tranches si bul test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class TranchesSiBulTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TranchesSiBul();

        $this->assertNull($obj->getBrutAlSansSi());
        $this->assertNull($obj->getCumBrutAlSansSi());
        $this->assertNull($obj->getCumTotSi());
        $this->assertNull($obj->getCumTranche2Si());
        $this->assertNull($obj->getCumTranche2SansSi());
        $this->assertNull($obj->getCumTrancheAsi());
        $this->assertNull($obj->getCumTrancheASansSi());
        $this->assertNull($obj->getCumTrancheBsi());
        $this->assertNull($obj->getCumTrancheBSansSi());
        $this->assertNull($obj->getCumTrancheCsi());
        $this->assertNull($obj->getCumTrancheCSansSi());
        $this->assertNull($obj->getCumTrancheD1SansSi());
        $this->assertNull($obj->getCumTrancheDSansSi());
        $this->assertNull($obj->getIndicePeriode());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getTotSi());
        $this->assertNull($obj->getTranche2Si());
        $this->assertNull($obj->getTranche2SansSi());
        $this->assertNull($obj->getTrancheAsi());
        $this->assertNull($obj->getTrancheASansSi());
        $this->assertNull($obj->getTrancheBsi());
        $this->assertNull($obj->getTrancheBSansSi());
        $this->assertNull($obj->getTrancheCsi());
        $this->assertNull($obj->getTrancheCSansSi());
        $this->assertNull($obj->getTrancheD1SansSi());
        $this->assertNull($obj->getTrancheDSansSi());
    }
}
