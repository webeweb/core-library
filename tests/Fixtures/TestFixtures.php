<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Fixtures;

use DateTime;
use Throwable;
use WBW\Library\Common\Tests\Fixtures\Sorter\TestAlphabeticalNode;

/**
 * Test fixtures.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Fixtures
 */
class TestFixtures {

    /**
     * Get the alphabetical nodes.
     *
     * @return TestAlphabeticalNode[] Returns the alphabetical nodes.
     */
    public static function getAlphabeticalNodes(): array {

        $fixtures = [
            new TestAlphabeticalNode("id01"),
            new TestAlphabeticalNode("id02"),
            new TestAlphabeticalNode("id03"),
            new TestAlphabeticalNode("id04"),
            new TestAlphabeticalNode("id05"),
            new TestAlphabeticalNode("id06"),
            new TestAlphabeticalNode("id07"),
            new TestAlphabeticalNode("id08"),
            new TestAlphabeticalNode("id09"),
            new TestAlphabeticalNode("id10"),
        ];

        $fixtures[0]->addNode($fixtures[9]);
        $fixtures[0]->addNode($fixtures[8]);
        $fixtures[0]->addNode($fixtures[7]);

        $fixtures[1]->addNode($fixtures[6]);
        $fixtures[1]->addNode($fixtures[5]);
        $fixtures[1]->addNode($fixtures[4]);

        $fixtures[4]->addNode($fixtures[3]);
        $fixtures[4]->addNode($fixtures[2]);

        return $fixtures;
    }

    /**
     * Get the time slot date/times.
     *
     * @return DateTime[] Returns the time slot date/times.
     * @throws Throwable Throws an exception if an error occurs.
     */
    public static function getTimeSlotDateTimes(): array {

        return [
            new DateTime("2018-08-22 08:00:00"),
            new DateTime("2018-08-22 11:00:00"),
            new DateTime("2018-08-22 15:00:00"),
            new DateTime("2018-08-22 18:00:00"),
        ];
    }
}
