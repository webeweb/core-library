<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Sorter;

use WBW\Library\Common\Sorter\AlphabeticalNodeHelper;
use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Sorter\TestAlphabeticalNode;
use WBW\Library\Common\Tests\Fixtures\TestFixtures;

/**
 * Alphabetical node helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Sorter
 */
class AlphabeticalNodeHelperTest extends AbstractTestCase {

    /**
     * Nodes.
     *
     * @var TestAlphabeticalNode[]|null
     */
    private $nodes;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set the node mocks.
        $this->nodes = TestFixtures::getAlphabeticalNodes();
    }

    /**
     * Test createChoices()
     *
     * @return void
     */
    public function testCreateChoices(): void {

        $res = AlphabeticalNodeHelper::createChoices($this->nodes);
        $this->assertCount(3, $res["id01"]);
        $this->assertSame($this->nodes[7], $res["id01"][0]);
        $this->assertSame($this->nodes[8], $res["id01"][1]);
        $this->assertSame($this->nodes[9], $res["id01"][2]);
        $this->assertCount(5, $res["id02"]);
        $this->assertSame($this->nodes[4], $res["id02"][0]);
        $this->assertSame($this->nodes[2], $res["id02"][1]);
        $this->assertSame($this->nodes[3], $res["id02"][2]);
        $this->assertSame($this->nodes[5], $res["id02"][3]);
        $this->assertSame($this->nodes[6], $res["id02"][4]);
    }

    /**
     * Test getLevel()
     *
     * @return void
     */
    public function testGetLevel(): void {

        $this->assertEquals(0, AlphabeticalNodeHelper::getLevel($this->nodes[0]));
        $this->assertEquals(0, AlphabeticalNodeHelper::getLevel($this->nodes[1]));
        $this->assertEquals(2, AlphabeticalNodeHelper::getLevel($this->nodes[2]));
        $this->assertEquals(2, AlphabeticalNodeHelper::getLevel($this->nodes[3]));
        $this->assertEquals(1, AlphabeticalNodeHelper::getLevel($this->nodes[4]));
        $this->assertEquals(1, AlphabeticalNodeHelper::getLevel($this->nodes[5]));
        $this->assertEquals(1, AlphabeticalNodeHelper::getLevel($this->nodes[6]));
        $this->assertEquals(1, AlphabeticalNodeHelper::getLevel($this->nodes[7]));
        $this->assertEquals(1, AlphabeticalNodeHelper::getLevel($this->nodes[8]));
        $this->assertEquals(1, AlphabeticalNodeHelper::getLevel($this->nodes[9]));
    }

    /**
     * Test removeOrphan()
     *
     * @return void
     */
    public function testRemoveOrphan(): void {

        AlphabeticalNodeHelper::removeOrphan($this->nodes);
        $this->assertCount(10, $this->nodes);

        $this->nodes[1]->removeNode($this->nodes[4]);
        (new TestAlphabeticalNode("id11"))->addNode($this->nodes[4]); // Set a new parent that is not in the initial array.

        AlphabeticalNodeHelper::removeOrphan($this->nodes);
        $this->assertCount(7, $this->nodes);
    }

    /**
     * Test sort()
     *
     * @return void
     */
    public function testSort(): void {

        $res = AlphabeticalNodeHelper::sort($this->nodes);
        $this->assertEquals($this->nodes[0]->getAlphabeticalNodeLabel(), $res[0]->getAlphabeticalNodeLabel());
        $this->assertEquals($this->nodes[7]->getAlphabeticalNodeLabel(), $res[1]->getAlphabeticalNodeLabel());
        $this->assertEquals($this->nodes[8]->getAlphabeticalNodeLabel(), $res[2]->getAlphabeticalNodeLabel());
        $this->assertEquals($this->nodes[9]->getAlphabeticalNodeLabel(), $res[3]->getAlphabeticalNodeLabel());
        $this->assertEquals($this->nodes[1]->getAlphabeticalNodeLabel(), $res[4]->getAlphabeticalNodeLabel());
        $this->assertEquals($this->nodes[4]->getAlphabeticalNodeLabel(), $res[5]->getAlphabeticalNodeLabel());
        $this->assertEquals($this->nodes[2]->getAlphabeticalNodeLabel(), $res[6]->getAlphabeticalNodeLabel());
        $this->assertEquals($this->nodes[3]->getAlphabeticalNodeLabel(), $res[7]->getAlphabeticalNodeLabel());
        $this->assertEquals($this->nodes[5]->getAlphabeticalNodeLabel(), $res[8]->getAlphabeticalNodeLabel());
        $this->assertEquals($this->nodes[6]->getAlphabeticalNodeLabel(), $res[9]->getAlphabeticalNodeLabel());
    }
}
