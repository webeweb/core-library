<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Sorter\Tests\Fixtures;

use WBW\Library\Sorter\Tests\Fixtures\Model\TestNode;

/**
 * Test fixtures.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Sorter\Tests\Fixtures
 */
class TestFixtures {

    /**
     * Get the TestNode fixtures.
     *
     * @return TestNode[] Returns the TestNode fixtures.
     */
    public static function getTestNodes(): array {

        $nodes = [
            new TestNode("id01"),
            new TestNode("id02"),
            new TestNode("id03"),
            new TestNode("id04"),
            new TestNode("id05"),
            new TestNode("id06"),
            new TestNode("id07"),
            new TestNode("id08"),
            new TestNode("id09"),
            new TestNode("id10"),
        ];

        $nodes[0]->addNode($nodes[9]);
        $nodes[0]->addNode($nodes[8]);
        $nodes[0]->addNode($nodes[7]);

        $nodes[1]->addNode($nodes[6]);
        $nodes[1]->addNode($nodes[5]);
        $nodes[1]->addNode($nodes[4]);

        $nodes[4]->addNode($nodes[3]);
        $nodes[4]->addNode($nodes[2]);

        return $nodes;
    }
}
