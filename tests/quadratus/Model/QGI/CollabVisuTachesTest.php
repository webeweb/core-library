<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use WBW\Library\Quadratus\Model\QGI\CollabVisuTaches;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Collab visu taches test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class CollabVisuTachesTest extends AbstractTestCase {

    /**
     * Tests setCodeCollab()
     *
     * @return void
     */
    public function testSetCodeCollab(): void {

        $obj = new CollabVisuTaches();

        $obj->setCodeCollab("codeCollab");
        $this->assertEquals("codeCollab", $obj->getCodeCollab());
    }

    /**
     * Tests setCodeTacheVisu()
     *
     * @return void
     */
    public function testSetCodeTacheVisu(): void {

        $obj = new CollabVisuTaches();

        $obj->setCodeTacheVisu("codeTacheVisu");
        $this->assertEquals("codeTacheVisu", $obj->getCodeTacheVisu());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new CollabVisuTaches();

        $this->assertNull($obj->getCodeCollab());
        $this->assertNull($obj->getCodeTacheVisu());
    }
}
