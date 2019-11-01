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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritere6Trait;

/**
 * Lib critere6 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritere6TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritere6() method.
     *
     * @return void
     */
    public function testSetLibCritere6() {

        $obj = new TestStringLibCritere6Trait();

        $obj->setLibCritere6("libCritere6");
        $this->assertEquals("libCritere6", $obj->getLibCritere6());
    }
}
