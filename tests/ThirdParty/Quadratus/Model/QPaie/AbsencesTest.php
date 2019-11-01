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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\Absences;

/**
 * Absences test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class AbsencesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Absences();

        $this->assertNull($obj->getAbsJour());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeUser());
        $this->assertNull($obj->getCongesPayes());
        $this->assertNull($obj->getDateAdded());
        $this->assertNull($obj->getDateAddedColl());
        $this->assertNull($obj->getInBul());
        $this->assertNull($obj->getIndicePeriode());
        $this->assertNull($obj->getNb30());
        $this->assertNull($obj->getNbHAbCpCalcule());
        $this->assertNull($obj->getNbHAbCpSaisi());
        $this->assertNull($obj->getNbJh());
        $this->assertNull($obj->getNbJhCalcule());
        $this->assertNull($obj->getNumEvenement());
        $this->assertNull($obj->getNumUniq());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPeriodeBul());
        $this->assertNull($obj->getPeriodeDeb());
        $this->assertNull($obj->getPeriodeFin());
        $this->assertNull($obj->getProlongation());
        $this->assertNull($obj->getReprise());
        $this->assertNull($obj->getTypeAbs());
    }
}
