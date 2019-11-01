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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\FiltreEntetes;

/**
 * Filtre entetes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class FiltreEntetesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new FiltreEntetes();

        $this->assertNull($obj->getCodeFiltre());
        $this->assertNull($obj->getCollaborateur());
        $this->assertNull($obj->getCommercialFacture());
        $this->assertNull($obj->getFonctionnalite());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getTypeFiltre());
        $this->assertNull($obj->getUniqId());
    }
}
