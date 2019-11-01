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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringModeleCodeBarreFTrait;

/**
 * Modele code barre f trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringModeleCodeBarreFTraitTest extends AbstractTestCase {

    /**
     * Tests the setModeleCodeBarreF() method.
     *
     * @return void
     */
    public function testSetModeleCodeBarreF() {

        $obj = new TestStringModeleCodeBarreFTrait();

        $obj->setModeleCodeBarreF("modeleCodeBarreF");
        $this->assertEquals("modeleCodeBarreF", $obj->getModeleCodeBarreF());
    }
}
