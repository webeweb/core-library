<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Sorter;

use WBW\Library\Common\Sorter\AlphabeticalNodeInterface;
use WBW\Library\Common\Sorter\AlphabeticalTreeSort;
use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\TestFixtures;

/**
 * Alphabetical tree sort test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Sorter
 */
class AlphabeticalTreeSortTest extends AbstractTestCase {

    /**
     * Nodes.
     *
     * @var AlphabeticalNodeInterface[]|null
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
     * Test sort()
     *
     * @return void
     */
    public function testSort(): void {

        $obj = new AlphabeticalTreeSort($this->nodes);

        $obj->sort();

        $res = $obj->getNodes();
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
