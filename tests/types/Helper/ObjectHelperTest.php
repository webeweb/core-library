<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Types\Tests\Helper;

use Closure;
use DateTime;
use WBW\Library\Types\Helper\ObjectHelper;
use WBW\Library\Types\Tests\AbstractTestCase;
use WBW\Library\Types\Tests\Fixtures\TestObject;

/**
 * Object helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Types\Tests\Helper
 */
class ObjectHelperTest extends AbstractTestCase {

    /**
     * Object.
     *
     * @var TestObject
     */
    private $object1;

    /**
     * Object.
     *
     * @var TestObject
     */
    private $object2;

    protected function setUp(): void {
        parent::setUp();

        // Set the object mocks.
        $this->object1 = new TestObject("a", false, 0.1, 1);
        $this->object2 = new TestObject("b", true, 0.2, 2);
    }

    /**
     * Tests coalesce()
     *
     * @return void
     */
    public function testCoalesce(): void {

        $this->assertSame($this, ObjectHelper::coalesce($this, null));
        $this->assertSame($this, ObjectHelper::coalesce(null, $this));

        $this->assertNull(ObjectHelper::coalesce(null, null));
    }

    /**
     * Tests compare()
     *
     * @return void
     */
    public function testCompare(): void {

        // Set a Date/time mock.
        $arg = new DateTime();

        $this->assertEquals(null, ObjectHelper::compare(null, null));

        $this->assertEquals(-1, ObjectHelper::compare($arg, null));
        $this->assertEquals(0, ObjectHelper::compare($arg, $arg));
        $this->assertEquals(1, ObjectHelper::compare(null, $arg));
    }

    /**
     * Tests usortClosureByBoolean()
     *
     * @return void
     */
    public function testUsortClosureByBoolean(): void {

        $a = $this->object1;
        $b = $this->object2;

        $obj = ObjectHelper::usortClosureByBoolean("getBool");
        $this->assertInstanceOf(Closure::class, $obj);

        $this->assertEquals(-1, $obj($a, $b));
        $this->assertEquals(0, $obj($b, $b));
        $this->assertEquals(1, $obj($b, $a));

        $this->assertEquals(-1, $obj(null, $b));
        $this->assertEquals(0, $obj(null, null));
        $this->assertEquals(1, $obj($b, null));
    }

    /**
     * Tests usortClosureByBoolean()
     *
     * @return void
     */
    public function testUsortClosureByBooleanWithAsc(): void {

        $a = $this->object1;
        $b = $this->object2;

        $obj = ObjectHelper::usortClosureByBoolean("getBool", false);
        $this->assertInstanceOf(Closure::class, $obj);

        $this->assertEquals(1, $obj($a, $b));
        $this->assertEquals(0, $obj($b, $b));
        $this->assertEquals(-1, $obj($b, $a));

        $this->assertEquals(1, $obj(null, $b));
        $this->assertEquals(0, $obj(null, null));
        $this->assertEquals(-1, $obj($b, null));
    }

    /**
     * Tests usortClosureByFloat()
     *
     * @return void
     */
    public function testUsortClosureByFloat(): void {

        $a = $this->object1;
        $b = $this->object2;

        $obj = ObjectHelper::usortClosureByFloat("getFloat");
        $this->assertInstanceOf(Closure::class, $obj);

        $this->assertEquals(-1, $obj($a, $b));
        $this->assertEquals(0, $obj($b, $b));
        $this->assertEquals(1, $obj($b, $a));

        $this->assertEquals(-1, $obj(null, $b));
        $this->assertEquals(0, $obj(null, null));
        $this->assertEquals(1, $obj($b, null));
    }

    /**
     * Tests usortClosureByFloat()
     *
     * @return void
     */
    public function testUsortClosureByFloatWithAsc(): void {

        $a = $this->object1;
        $b = $this->object2;

        $obj = ObjectHelper::usortClosureByFloat("getFloat", false);
        $this->assertInstanceOf(Closure::class, $obj);

        $this->assertEquals(1, $obj($a, $b));
        $this->assertEquals(0, $obj($b, $b));
        $this->assertEquals(-1, $obj($b, $a));

        $this->assertEquals(1, $obj(null, $b));
        $this->assertEquals(0, $obj(null, null));
        $this->assertEquals(-1, $obj($b, null));
    }

    /**
     * Tests usortClosureByInteger()
     *
     * @return void
     */
    public function testUsortClosureByInteger(): void {

        $a = $this->object1;
        $b = $this->object2;

        $obj = ObjectHelper::usortClosureByInteger("getInt");
        $this->assertInstanceOf(Closure::class, $obj);

        $this->assertEquals(-1, $obj($a, $b));
        $this->assertEquals(0, $obj($b, $b));
        $this->assertEquals(1, $obj($b, $a));

        $this->assertEquals(-1, $obj(null, $b));
        $this->assertEquals(0, $obj(null, null));
        $this->assertEquals(1, $obj($b, null));
    }

    /**
     * Tests usortClosureByInteger()
     *
     * @return void
     */
    public function testUsortClosureByIntegerWithAsc(): void {

        $a = $this->object1;
        $b = $this->object2;

        $obj = ObjectHelper::usortClosureByInteger("getInt", false);
        $this->assertInstanceOf(Closure::class, $obj);

        $this->assertEquals(1, $obj($a, $b));
        $this->assertEquals(0, $obj($b, $b));
        $this->assertEquals(-1, $obj($b, $a));

        $this->assertEquals(1, $obj(null, $b));
        $this->assertEquals(0, $obj(null, null));
        $this->assertEquals(-1, $obj($b, null));
    }

    /**
     * Tests usortClosureByString()
     *
     * @return void
     */
    public function testUsortClosureByString(): void {

        $a = $this->object1;
        $b = $this->object2;

        $obj = ObjectHelper::usortClosureByString("getString");
        $this->assertInstanceOf(Closure::class, $obj);

        $this->assertEquals(-1, $obj($a, $b));
        $this->assertEquals(0, $obj($b, $b));
        $this->assertEquals(1, $obj($b, $a));

        $this->assertEquals(-1, $obj(null, $b));
        $this->assertEquals(0, $obj(null, null));
        $this->assertEquals(1, $obj($b, null));
    }

    /**
     * Tests usortClosureByString()
     *
     * @return void
     */
    public function testUsortClosureByStringWithAsc(): void {

        $a = $this->object1;
        $b = $this->object2;

        $obj = ObjectHelper::usortClosureByString("getString", false);
        $this->assertInstanceOf(Closure::class, $obj);

        $this->assertEquals(1, $obj($a, $b));
        $this->assertEquals(0, $obj($b, $b));
        $this->assertEquals(-1, $obj($b, $a));

        $this->assertEquals(1, $obj(null, $b));
        $this->assertEquals(0, $obj(null, null));
        $this->assertEquals(-1, $obj($b, null));
    }
}
