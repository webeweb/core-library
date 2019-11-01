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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringAnneeSommeIsol3Trait;

/**
 * Annee somme isol3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringAnneeSommeIsol3TraitTest extends AbstractTestCase {

    /**
     * Tests the setAnneeSommeIsol3() method.
     *
     * @return void
     */
    public function testSetAnneeSommeIsol3() {

        $obj = new TestStringAnneeSommeIsol3Trait();

        $obj->setAnneeSommeIsol3("anneeSommeIsol3");
        $this->assertEquals("anneeSommeIsol3", $obj->getAnneeSommeIsol3());
    }
}
