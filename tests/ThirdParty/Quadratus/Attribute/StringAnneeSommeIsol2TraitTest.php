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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringAnneeSommeIsol2Trait;

/**
 * Annee somme isol2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringAnneeSommeIsol2TraitTest extends AbstractTestCase {

    /**
     * Tests the setAnneeSommeIsol2() method.
     *
     * @return void
     */
    public function testSetAnneeSommeIsol2() {

        $obj = new TestStringAnneeSommeIsol2Trait();

        $obj->setAnneeSommeIsol2("anneeSommeIsol2");
        $this->assertEquals("anneeSommeIsol2", $obj->getAnneeSommeIsol2());
    }
}
