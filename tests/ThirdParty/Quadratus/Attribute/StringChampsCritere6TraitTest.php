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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringChampsCritere6Trait;

/**
 * Champs critere6 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringChampsCritere6TraitTest extends AbstractTestCase {

    /**
     * Tests the setChampsCritere6() method.
     *
     * @return void
     */
    public function testSetChampsCritere6() {

        $obj = new TestStringChampsCritere6Trait();

        $obj->setChampsCritere6("champsCritere6");
        $this->assertEquals("champsCritere6", $obj->getChampsCritere6());
    }
}
