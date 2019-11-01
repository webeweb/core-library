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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\AbsencesCpPrevRempl;

/**
 * Absences cp prev rempl test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class AbsencesCpPrevRemplTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AbsencesCpPrevRempl();

        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getCodeRemplacant());
        $this->assertNull($obj->getDateDebutCp());
        $this->assertNull($obj->getDateDebutRempl());
        $this->assertNull($obj->getDateFinRempl());
        $this->assertNull($obj->getIndice());
        $this->assertNull($obj->getTypeRempl());
    }
}
