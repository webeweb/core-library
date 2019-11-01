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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringAnneeSommeIsol5Trait;

/**
 * Annee somme isol5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringAnneeSommeIsol5TraitTest extends AbstractTestCase {

    /**
     * Tests the setAnneeSommeIsol5() method.
     *
     * @return void
     */
    public function testSetAnneeSommeIsol5() {

        $obj = new TestStringAnneeSommeIsol5Trait();

        $obj->setAnneeSommeIsol5("anneeSommeIsol5");
        $this->assertEquals("anneeSommeIsol5", $obj->getAnneeSommeIsol5());
    }
}
