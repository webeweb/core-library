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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\AbsencesExcelHisto;

/**
 * Absences excel histo test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class AbsencesExcelHistoTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AbsencesExcelHisto();

        $this->assertNull($obj->getDateAdded());
        $this->assertNull($obj->getId());
        $this->assertNull($obj->getNbhSais());
        $this->assertNull($obj->getNbhSaisCorr());
        $this->assertNull($obj->getNbjSais());
        $this->assertNull($obj->getNbjSaisCorr());
        $this->assertNull($obj->getNumEvenement());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPerPaie());
        $this->assertNull($obj->getPeriodeDeb());
        $this->assertNull($obj->getPeriodeDebCorr());
        $this->assertNull($obj->getPeriodeFin());
        $this->assertNull($obj->getPeriodeFinCorr());
        $this->assertNull($obj->getTransfertAbs());
        $this->assertNull($obj->getTypeAbsCp());
        $this->assertNull($obj->getTypeAbsCpCorr());
    }
}
