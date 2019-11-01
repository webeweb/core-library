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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\TachesDureeBudgetee;

/**
 * Taches duree budgetee test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class TachesDureeBudgeteeTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TachesDureeBudgetee();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeTache());
        $this->assertNull($obj->getDureeBudgetee1());
        $this->assertNull($obj->getDureeBudgetee10());
        $this->assertNull($obj->getDureeBudgetee11());
        $this->assertNull($obj->getDureeBudgetee12());
        $this->assertNull($obj->getDureeBudgetee2());
        $this->assertNull($obj->getDureeBudgetee3());
        $this->assertNull($obj->getDureeBudgetee4());
        $this->assertNull($obj->getDureeBudgetee5());
        $this->assertNull($obj->getDureeBudgetee6());
        $this->assertNull($obj->getDureeBudgetee7());
        $this->assertNull($obj->getDureeBudgetee8());
        $this->assertNull($obj->getDureeBudgetee9());
        $this->assertNull($obj->getNumBt());
        $this->assertNull($obj->getPeriode());
    }
}
