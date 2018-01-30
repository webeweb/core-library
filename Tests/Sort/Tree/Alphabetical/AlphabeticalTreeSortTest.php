<?php

/**
 * Disclaimer: This source code is protected by copyright law and by
 * international conventions.
 *
 * Any reproduction or partial or total distribution of the source code, by any
 * means whatsoever, is strictly forbidden.
 *
 * Anyone not complying with these provisions will be guilty of the offense of
 * infringement and the penal sanctions provided for by law.
 *
 * © 2017 All rights reserved.
 */

namespace WBW\Library\Core\Tests\Sort\Tree\Alphabetical;

use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Navigation\Node\NavigationNode;
use WBW\Library\Core\Sort\Tree\Alphabetical\AlphabeticalTreeSort;

/**
 * Alphabetical tree sort test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Sort\Tree\Alphabetical
 * @final
 */
final class AlphabeticalTreeSortTest extends PHPUnit_Framework_TestCase {

    /**
     * Nodes.
     *
     * @var AlphabeticalTreeSortInterface[]
     */
    private $nodes;

    /**
     * {@inheritdoc}
     */
    protected function setUp() {

        // Initialize the nodes.
        $this->nodes = [
            new NavigationNode("id01"),
            new NavigationNode("id02"),
            new NavigationNode("id03"),
            new NavigationNode("id04"),
            new NavigationNode("id05"),
            new NavigationNode("id06"),
            new NavigationNode("id07"),
            new NavigationNode("id08"),
            new NavigationNode("id09"),
            new NavigationNode("id10"),
        ];

        // Imbricate the nodes.
        $this->nodes[0]->addNode($this->nodes[9]);
        $this->nodes[0]->addNode($this->nodes[8]);
        $this->nodes[0]->addNode($this->nodes[7]);

        $this->nodes[1]->addNode($this->nodes[6]);
        $this->nodes[1]->addNode($this->nodes[5]);
        $this->nodes[1]->addNode($this->nodes[4]);

        $this->nodes[4]->addNode($this->nodes[3]);
        $this->nodes[4]->addNode($this->nodes[2]);
    }

    /**
     * Tests the createChoices() method.
     *
     * @return void.
     */
    public function testCreateChoices() {

        $res = AlphabeticalTreeSort::createChoices($this->nodes);
        $this->assertCount(3, $res["id01"]);
        $this->assertEquals($this->nodes[7], $res["id01"][0]);
        $this->assertEquals($this->nodes[8], $res["id01"][1]);
        $this->assertEquals($this->nodes[9], $res["id01"][2]);
        $this->assertCount(5, $res["id02"]);
        $this->assertEquals($this->nodes[4], $res["id02"][0]);
        $this->assertEquals($this->nodes[2], $res["id02"][1]);
        $this->assertEquals($this->nodes[3], $res["id02"][2]);
        $this->assertEquals($this->nodes[5], $res["id02"][3]);
        $this->assertEquals($this->nodes[6], $res["id02"][4]);
    }

    /**
     * Tests the getLevel() method.
     *
     * @return void
     */
    public function testGetLevel() {

        $this->assertEquals(0, AlphabeticalTreeSort::getLevel($this->nodes[0]));
        $this->assertEquals(0, AlphabeticalTreeSort::getLevel($this->nodes[1]));
        $this->assertEquals(2, AlphabeticalTreeSort::getLevel($this->nodes[2]));
        $this->assertEquals(2, AlphabeticalTreeSort::getLevel($this->nodes[3]));
        $this->assertEquals(1, AlphabeticalTreeSort::getLevel($this->nodes[4]));
        $this->assertEquals(1, AlphabeticalTreeSort::getLevel($this->nodes[5]));
        $this->assertEquals(1, AlphabeticalTreeSort::getLevel($this->nodes[6]));
        $this->assertEquals(1, AlphabeticalTreeSort::getLevel($this->nodes[7]));
        $this->assertEquals(1, AlphabeticalTreeSort::getLevel($this->nodes[8]));
        $this->assertEquals(1, AlphabeticalTreeSort::getLevel($this->nodes[9]));
    }

    /**
     * Tests the removeOrphan() method.
     *
     * @return void
     */
    public function testRemoveOrphan() {

        AlphabeticalTreeSort::removeOrphan($this->nodes);
        $this->assertCount(10, $this->nodes);

        $this->nodes[1]->removeNode($this->nodes[4]);
        (new NavigationNode("id11"))->addNode($this->nodes[4]); // Set a new parent that is not in the initial array.

        AlphabeticalTreeSort::removeOrphan($this->nodes);
        $this->assertCount(7, $this->nodes);
    }

    /**
     * Tests the sort() method.
     *
     * @return void
     */
    public function testSort() {

        $res = AlphabeticalTreeSort::sort(array_values($this->nodes));
        $this->assertEquals($this->nodes[0]->getAlphabeticalTreeSortLabel(), $res[0]->getAlphabeticalTreeSortLabel());
        $this->assertEquals($this->nodes[7]->getAlphabeticalTreeSortLabel(), $res[1]->getAlphabeticalTreeSortLabel());
        $this->assertEquals($this->nodes[8]->getAlphabeticalTreeSortLabel(), $res[2]->getAlphabeticalTreeSortLabel());
        $this->assertEquals($this->nodes[9]->getAlphabeticalTreeSortLabel(), $res[3]->getAlphabeticalTreeSortLabel());
        $this->assertEquals($this->nodes[1]->getAlphabeticalTreeSortLabel(), $res[4]->getAlphabeticalTreeSortLabel());
        $this->assertEquals($this->nodes[4]->getAlphabeticalTreeSortLabel(), $res[5]->getAlphabeticalTreeSortLabel());
        $this->assertEquals($this->nodes[2]->getAlphabeticalTreeSortLabel(), $res[6]->getAlphabeticalTreeSortLabel());
        $this->assertEquals($this->nodes[3]->getAlphabeticalTreeSortLabel(), $res[7]->getAlphabeticalTreeSortLabel());
        $this->assertEquals($this->nodes[5]->getAlphabeticalTreeSortLabel(), $res[8]->getAlphabeticalTreeSortLabel());
        $this->assertEquals($this->nodes[6]->getAlphabeticalTreeSortLabel(), $res[9]->getAlphabeticalTreeSortLabel());
    }

}
