<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\AbsencesCpPrevisionnel;

/**
 * Absences cp previsionnel test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class AbsencesCpPrevisionnelTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AbsencesCpPrevisionnel();

        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getCollaborateur());
        $this->assertNull($obj->getCommentaire());
        $this->assertNull($obj->getDateDebutCp());
        $this->assertNull($obj->getDateDemande());
        $this->assertNull($obj->getDateEtatCp());
        $this->assertNull($obj->getDateFinCp());
        $this->assertNull($obj->getDepuisWeb());
        $this->assertNull($obj->getEtatCp());
        $this->assertNull($obj->getIndice());
    }
}
