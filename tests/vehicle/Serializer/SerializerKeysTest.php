<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Vehicle\Tests\Serializer;

use WBW\Library\Vehicle\Serializer\SerializerKeys;
use WBW\Library\Vehicle\Tests\AbstractTestCase;

/**
 * Serializer keys test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Vehicle\Tests\Serializer
 */
class SerializerKeysTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("a", SerializerKeys::A);
        $this->assertEquals("a1", SerializerKeys::A1);
        $this->assertEquals("b", SerializerKeys::B);
        $this->assertEquals("c1", SerializerKeys::C1);
        $this->assertEquals("c3", SerializerKeys::C3);
        $this->assertEquals("c41", SerializerKeys::C41);
        $this->assertEquals("c4a", SerializerKeys::C4A);
        $this->assertEquals("d1", SerializerKeys::D1);
        $this->assertEquals("d2", SerializerKeys::D2);
        $this->assertEquals("d21", SerializerKeys::D21);
        $this->assertEquals("d3", SerializerKeys::D3);
        $this->assertEquals("e", SerializerKeys::E);
        $this->assertEquals("f1", SerializerKeys::F1);
        $this->assertEquals("f2", SerializerKeys::F2);
        $this->assertEquals("f3", SerializerKeys::F3);
        $this->assertEquals("g", SerializerKeys::G);
        $this->assertEquals("g1", SerializerKeys::G1);
        $this->assertEquals("h", SerializerKeys::H);
        $this->assertEquals("i", SerializerKeys::I);
        $this->assertEquals("i1", SerializerKeys::I1);
        $this->assertEquals("j", SerializerKeys::J);
        $this->assertEquals("j1", SerializerKeys::J1);
        $this->assertEquals("j2", SerializerKeys::J2);
        $this->assertEquals("j3", SerializerKeys::J3);
        $this->assertEquals("k", SerializerKeys::K);
        $this->assertEquals("p1", SerializerKeys::P1);
        $this->assertEquals("p2", SerializerKeys::P2);
        $this->assertEquals("p3", SerializerKeys::P3);
        $this->assertEquals("p6", SerializerKeys::P6);
        $this->assertEquals("s1", SerializerKeys::S1);
        $this->assertEquals("s2", SerializerKeys::S2);
        $this->assertEquals("u1", SerializerKeys::U1);
        $this->assertEquals("u2", SerializerKeys::U2);
        $this->assertEquals("v7", SerializerKeys::V7);
        $this->assertEquals("v9", SerializerKeys::V9);
        $this->assertEquals("x1", SerializerKeys::X1);
        $this->assertEquals("y1", SerializerKeys::Y1);
        $this->assertEquals("y2", SerializerKeys::Y2);
        $this->assertEquals("y3", SerializerKeys::Y3);
        $this->assertEquals("y4", SerializerKeys::Y4);
        $this->assertEquals("y5", SerializerKeys::Y5);
        $this->assertEquals("y6", SerializerKeys::Y6);
        $this->assertEquals("z1", SerializerKeys::Z1);
        $this->assertEquals("z2", SerializerKeys::Z2);
        $this->assertEquals("z3", SerializerKeys::Z3);
        $this->assertEquals("z4", SerializerKeys::Z4);
    }
}
