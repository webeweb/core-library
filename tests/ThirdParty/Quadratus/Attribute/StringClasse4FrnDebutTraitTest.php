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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringClasse4FrnDebutTrait;

/**
 * Classe4 frn debut trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringClasse4FrnDebutTraitTest extends AbstractTestCase {

    /**
     * Tests the setClasse4FrnDebut() method.
     *
     * @return void
     */
    public function testSetClasse4FrnDebut() {

        $obj = new TestStringClasse4FrnDebutTrait();

        $obj->setClasse4FrnDebut("classe4FrnDebut");
        $this->assertEquals("classe4FrnDebut", $obj->getClasse4FrnDebut());
    }
}
