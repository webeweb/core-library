<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Fixtures;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\Fixtures\Model\TestNode;

/**
 * Test fixtures.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Fixtures
 */
class TestFixtures {

    /**
     * Get the images.
     *
     * @return string[]
     */
    public static function getImages() {
        return [
            getcwd() . "/tests/Fixtures/Utility/TestImage_1920x1037.jpg",
            getcwd() . "/tests/Fixtures/Utility/TestImage_1920x1037.png",
            getcwd() . "/tests/Fixtures/Utility/TestImage_1920x1920.png",
            getcwd() . "/tests/Fixtures/Utility/TestImage_1920x3554.png",
        ];
    }

    /**
     * Get the TestNode fixtures.
     *
     * @return TestNode[] Returns the TestNode fixtures.
     */
    public static function getTestNodes() {

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

    /**
     * Get the time slot date/times.
     *
     * @return DateTime[] Returns the time slot date/times.
     * @throws Exception Throws an exception if an error occurs.
     */
    public static function getTimeSlotDateTimes() {
        return [
            new DateTime("2018-08-22 08:00:00"),
            new DateTime("2018-08-22 11:00:00"),
            new DateTime("2018-08-22 15:00:00"),
            new DateTime("2018-08-22 18:00:00"),
        ];
    }
}
