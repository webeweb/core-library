<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QGI;

use WBW\Library\Core\Quadratus\Model\QGI\CollabVisuTaches;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Collab visu taches model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 */
class CollabVisuTachesTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new CollabVisuTaches();

        $this->assertNull($obj->getCodeCollab());
        $this->assertNull($obj->getCodeTacheVisu());
    }

    /**
     * Tests the setCodeCollab() method.
     *
     * @return void
     */
    public function testSetCodeCollab() {

        $obj = new CollabVisuTaches();

        $obj->setCodeCollab("codeCollab");
        $this->assertEquals("codeCollab", $obj->getCodeCollab());
    }

    /**
     * Tests the setCodeTacheVisu() method.
     *
     * @return void
     */
    public function testSetCodeTacheVisu() {

        $obj = new CollabVisuTaches();

        $obj->setCodeTacheVisu("codeTacheVisu");
        $this->assertEquals("codeTacheVisu", $obj->getCodeTacheVisu());
    }

}
