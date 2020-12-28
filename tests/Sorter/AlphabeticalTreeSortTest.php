<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Sorter;

use WBW\Library\Core\Sorter\AlphabeticalTreeNodeInterface;
use WBW\Library\Core\Sorter\AlphabeticalTreeSort;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\TestFixtures;

/**
 * Alphabetical tree sort test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Sorter
 */
class AlphabeticalTreeSortTest extends AbstractTestCase {

    /**
     * Nodes.
     *
     * @var AlphabeticalTreeNodeInterface[]
     */
    private $nodes;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set the node mocks.
        $this->nodes = TestFixtures::getTestNodes();
    }

    /**
     * Tests the sort() method.
     *
     * @return void
     */
    public function testSort(): void {

        $obj = new AlphabeticalTreeSort($this->nodes);

        $obj->sort();

        $res = $obj->getNodes();
        $this->assertEquals($this->nodes[0]->getAlphabeticalTreeNodeLabel(), $res[0]->getAlphabeticalTreeNodeLabel());
        $this->assertEquals($this->nodes[7]->getAlphabeticalTreeNodeLabel(), $res[1]->getAlphabeticalTreeNodeLabel());
        $this->assertEquals($this->nodes[8]->getAlphabeticalTreeNodeLabel(), $res[2]->getAlphabeticalTreeNodeLabel());
        $this->assertEquals($this->nodes[9]->getAlphabeticalTreeNodeLabel(), $res[3]->getAlphabeticalTreeNodeLabel());
        $this->assertEquals($this->nodes[1]->getAlphabeticalTreeNodeLabel(), $res[4]->getAlphabeticalTreeNodeLabel());
        $this->assertEquals($this->nodes[4]->getAlphabeticalTreeNodeLabel(), $res[5]->getAlphabeticalTreeNodeLabel());
        $this->assertEquals($this->nodes[2]->getAlphabeticalTreeNodeLabel(), $res[6]->getAlphabeticalTreeNodeLabel());
        $this->assertEquals($this->nodes[3]->getAlphabeticalTreeNodeLabel(), $res[7]->getAlphabeticalTreeNodeLabel());
        $this->assertEquals($this->nodes[5]->getAlphabeticalTreeNodeLabel(), $res[8]->getAlphabeticalTreeNodeLabel());
        $this->assertEquals($this->nodes[6]->getAlphabeticalTreeNodeLabel(), $res[9]->getAlphabeticalTreeNodeLabel());
    }
}
