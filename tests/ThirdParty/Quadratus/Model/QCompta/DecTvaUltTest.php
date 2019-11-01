<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\DecTvaUlt;

/**
 * Dec tva ult test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class DecTvaUltTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DecTvaUlt();

        $this->assertNull($obj->getCodeJournal());
        $this->assertNull($obj->getCodeTva());
        $this->assertNull($obj->getCompteur());
        $this->assertNull($obj->getFolio());
        $this->assertNull($obj->getLibelleEcr());
        $this->assertNull($obj->getLigneFolio());
        $this->assertNull($obj->getMontantHt());
        $this->assertNull($obj->getMontantTva());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumUniqEcr());
        $this->assertNull($obj->getPerDec());
        $this->assertNull($obj->getPerDecUlt());
        $this->assertNull($obj->getPeriodeEcriture());
    }
}
