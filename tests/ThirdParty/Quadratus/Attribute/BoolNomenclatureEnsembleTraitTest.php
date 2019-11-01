<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolNomenclatureEnsembleTrait;

/**
 * Nomenclature ensemble trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolNomenclatureEnsembleTraitTest extends AbstractTestCase {

    /**
     * Tests the setNomenclatureEnsemble() method.
     *
     * @return void
     */
    public function testSetNomenclatureEnsemble() {

        $obj = new TestBoolNomenclatureEnsembleTrait();

        $obj->setNomenclatureEnsemble(true);
        $this->assertEquals(true, $obj->getNomenclatureEnsemble());
    }
}
