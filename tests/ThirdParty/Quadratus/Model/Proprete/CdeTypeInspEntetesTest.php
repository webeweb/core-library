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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\CdeTypeInspEntetes;

/**
 * Cde type insp entetes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class CdeTypeInspEntetesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new CdeTypeInspEntetes();

        $this->assertNull($obj->getCodeInspecteur());
        $this->assertNull($obj->getDtValiditeDebut());
        $this->assertNull($obj->getDtValiditeFin());
        $this->assertNull($obj->getMontantBudget());
        $this->assertNull($obj->getMontantHtCde());
    }
}
