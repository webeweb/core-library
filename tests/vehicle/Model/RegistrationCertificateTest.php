<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Vehicle\Tests\Model;

use DateTime;
use WBW\Library\Vehicle\Model\RegistrationCertificate;
use WBW\Library\Vehicle\Model\RegistrationCertificateInterface;
use WBW\Library\Vehicle\Tests\AbstractTestCase;

/**
 * Registration certificate test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Vehicle\Tests\Model
 */
class RegistrationCertificateTest extends AbstractTestCase {

    /**
     * Tests the setA() method.
     *
     * @return void
     */
    public function testSetA(): void {

        $obj = new RegistrationCertificate();

        $obj->setA("a");
        $this->assertEquals("a", $obj->getA());
    }

    /**
     * Tests the setA1() method.
     *
     * @return void
     */
    public function testSetA1(): void {

        $obj = new RegistrationCertificate();

        $obj->setA1("a1");
        $this->assertEquals("a1", $obj->getA1());
    }

    /**
     * Tests the setB() method.
     *
     * @return void
     */
    public function testSetB(): void {

        // Set a B mock.
        $b = new DateTime();

        $obj = new RegistrationCertificate();

        $obj->setB($b);
        $this->assertEquals($b, $obj->getB());
    }

    /**
     * Tests the setC1() method.
     *
     * @return void
     */
    public function testSetC1(): void {

        $obj = new RegistrationCertificate();

        $obj->setC1("c1");
        $this->assertEquals("c1", $obj->getC1());
    }

    /**
     * Tests the setC3() method.
     *
     * @return void
     */
    public function testSetC3(): void {

        $obj = new RegistrationCertificate();

        $obj->setC3("c3");
        $this->assertEquals("c3", $obj->getC3());
    }

    /**
     * Tests the setC41() method.
     *
     * @return void
     */
    public function testSetC41(): void {

        $obj = new RegistrationCertificate();

        $obj->setC41("c41");
        $this->assertEquals("c41", $obj->getC41());
    }

    /**
     * Tests the setC4a() method.
     *
     * @return void
     */
    public function testSetC4a(): void {

        $obj = new RegistrationCertificate();

        $obj->setC4a("c4a");
        $this->assertEquals("c4a", $obj->getC4a());
    }

    /**
     * Tests the setD1() method.
     *
     * @return void
     */
    public function testSetD1(): void {

        $obj = new RegistrationCertificate();

        $obj->setD1("d1");
        $this->assertEquals("d1", $obj->getD1());
    }

    /**
     * Tests the setD2() method.
     *
     * @return void
     */
    public function testSetD2(): void {

        $obj = new RegistrationCertificate();

        $obj->setD2("d2");
        $this->assertEquals("d2", $obj->getD2());
    }

    /**
     * Tests the setD21() method.
     *
     * @return void
     */
    public function testSetD21(): void {

        $obj = new RegistrationCertificate();

        $obj->setD21("d21");
        $this->assertEquals("d21", $obj->getD21());
    }

    /**
     * Tests the setD3() method.
     *
     * @return void
     */
    public function testSetD3(): void {

        $obj = new RegistrationCertificate();

        $obj->setD3("d3");
        $this->assertEquals("d3", $obj->getD3());
    }

    /**
     * Tests the setE() method.
     *
     * @return void
     */
    public function testSetE(): void {

        $obj = new RegistrationCertificate();

        $obj->setE("e");
        $this->assertEquals("e", $obj->getE());
    }

    /**
     * Tests the setF1() method.
     *
     * @return void
     */
    public function testSetF1(): void {

        $obj = new RegistrationCertificate();

        $obj->setF1(1);
        $this->assertEquals(1, $obj->getF1());
    }

    /**
     * Tests the setF2() method.
     *
     * @return void
     */
    public function testSetF2(): void {

        $obj = new RegistrationCertificate();

        $obj->setF2(1);
        $this->assertEquals(1, $obj->getF2());
    }

    /**
     * Tests the setF3() method.
     *
     * @return void
     */
    public function testSetF3(): void {

        $obj = new RegistrationCertificate();

        $obj->setF3(1);
        $this->assertEquals(1, $obj->getF3());
    }

    /**
     * Tests the setG() method.
     *
     * @return void
     */
    public function testSetG(): void {

        $obj = new RegistrationCertificate();

        $obj->setG(1);
        $this->assertEquals(1, $obj->getG());
    }

    /**
     * Tests the setG1() method.
     *
     * @return void
     */
    public function testSetG1(): void {

        $obj = new RegistrationCertificate();

        $obj->setG1(1);
        $this->assertEquals(1, $obj->getG1());
    }

    /**
     * Tests the setH() method.
     *
     * @return void
     */
    public function testSetH(): void {

        $obj = new RegistrationCertificate();

        $obj->setH("h");
        $this->assertEquals("h", $obj->getH());
    }

    /**
     * Tests the setI() method.
     *
     * @return void
     */
    public function testSetI(): void {

        // Set the I mock.
        $i = new DateTime();

        $obj = new RegistrationCertificate();

        $obj->setI($i);
        $this->assertEquals($i, $obj->getI());
    }

    /**
     * Tests the setI1() method.
     *
     * @return void
     */
    public function testSetI1(): void {

        // Set the I.1 mock.
        $i1 = new DateTime();

        $obj = new RegistrationCertificate();

        $obj->setI1($i1);
        $this->assertEquals($i1, $obj->getI1());
    }

    /**
     * Tests the setJ() method.
     *
     * @return void
     */
    public function testSetJ(): void {

        $obj = new RegistrationCertificate();

        $obj->setJ("j");
        $this->assertEquals("j", $obj->getJ());
    }

    /**
     * Tests the setJ1() method.
     *
     * @return void
     */
    public function testSetJ1(): void {

        $obj = new RegistrationCertificate();

        $obj->setJ1("j1");
        $this->assertEquals("j1", $obj->getJ1());
    }

    /**
     * Tests the setJ2() method.
     *
     * @return void
     */
    public function testSetJ2(): void {

        $obj = new RegistrationCertificate();

        $obj->setJ2("j2");
        $this->assertEquals("j2", $obj->getJ2());
    }

    /**
     * Tests the setJ3() method.
     *
     * @return void
     */
    public function testSetJ3(): void {

        $obj = new RegistrationCertificate();

        $obj->setJ3("j3");
        $this->assertEquals("j3", $obj->getJ3());
    }

    /**
     * Tests the setK() method.
     *
     * @return void
     */
    public function testSetK(): void {

        $obj = new RegistrationCertificate();

        $obj->setK("K");
        $this->assertEquals("K", $obj->getK());
    }

    /**
     * Tests the setP1() method.
     *
     * @return void
     */
    public function testSetP1(): void {

        $obj = new RegistrationCertificate();

        $obj->setP1(1);
        $this->assertEquals(1, $obj->getP1());
    }

    /**
     * Tests the setP2() method.
     *
     * @return void
     */
    public function testSetP2(): void {

        $obj = new RegistrationCertificate();

        $obj->setP2(1);
        $this->assertEquals(1, $obj->getP2());
    }

    /**
     * Tests the setP3() method.
     *
     * @return void
     */
    public function testSetP3(): void {

        $obj = new RegistrationCertificate();

        $obj->setP3("p3");
        $this->assertEquals("p3", $obj->getP3());
    }

    /**
     * Tests the setP6() method.
     *
     * @return void
     */
    public function testSetP6(): void {

        $obj = new RegistrationCertificate();

        $obj->setP6(1);
        $this->assertEquals(1, $obj->getP6());
    }

    /**
     * Tests the setQ() method.
     *
     * @return void
     */
    public function testSetQ(): void {

        $obj = new RegistrationCertificate();

        $obj->setQ(1.5);
        $this->assertEquals(1.5, $obj->getQ());
    }

    /**
     * Tests the setS1() method.
     *
     * @return void
     */
    public function testSetS1(): void {

        $obj = new RegistrationCertificate();

        $obj->setS1(1);
        $this->assertEquals(1, $obj->getS1());
    }

    /**
     * Tests the setS2() method.
     *
     * @return void
     */
    public function testSetS2(): void {

        $obj = new RegistrationCertificate();

        $obj->setS2(1);
        $this->assertEquals(1, $obj->getS2());
    }

    /**
     * Tests the setU1() method.
     *
     * @return void
     */
    public function testSetU1(): void {

        $obj = new RegistrationCertificate();

        $obj->setU1(1);
        $this->assertEquals(1, $obj->getU1());
    }

    /**
     * Tests the setU2() method.
     *
     * @return void
     */
    public function testSetU2(): void {

        $obj = new RegistrationCertificate();

        $obj->setU2(1);
        $this->assertEquals(1, $obj->getU2());
    }

    /**
     * Tests the setV7() method.
     *
     * @return void
     */
    public function testSetV7(): void {

        $obj = new RegistrationCertificate();

        $obj->setV7(1);
        $this->assertEquals(1, $obj->getV7());
    }

    /**
     * Tests the setV9() method.
     *
     * @return void
     */
    public function testSetV9(): void {

        $obj = new RegistrationCertificate();

        $obj->setV9("v9");
        $this->assertEquals("v9", $obj->getV9());
    }

    /**
     * Tests the setX1() method.
     *
     * @return void
     */
    public function testSetX1(): void {

        // Set the X.1 mock.
        $x1 = new DateTime();

        $obj = new RegistrationCertificate();

        $obj->setX1($x1);
        $this->assertEquals($x1, $obj->getX1());
    }

    /**
     * Tests the setY1() method.
     *
     * @return void
     */
    public function testSetY1(): void {

        $obj = new RegistrationCertificate();

        $obj->setY1(1.5);
        $this->assertEquals(1.5, $obj->getY1());
    }

    /**
     * Tests the setY2() method.
     *
     * @return void
     */
    public function testSetY2(): void {

        $obj = new RegistrationCertificate();

        $obj->setY2(1.5);
        $this->assertEquals(1.5, $obj->getY2());
    }

    /**
     * Tests the setY3() method.
     *
     * @return void
     */
    public function testSetY3(): void {

        $obj = new RegistrationCertificate();

        $obj->setY3(1.5);
        $this->assertEquals(1.5, $obj->getY3());
    }

    /**
     * Tests the setY4() method.
     *
     * @return void
     */
    public function testSetY4(): void {

        $obj = new RegistrationCertificate();

        $obj->setY4(1.5);
        $this->assertEquals(1.5, $obj->getY4());
    }

    /**
     * Tests the setY5() method.
     *
     * @return void
     */
    public function testSetY5(): void {

        $obj = new RegistrationCertificate();

        $obj->setY5(1.5);
        $this->assertEquals(1.5, $obj->getY5());
    }

    /**
     * Tests the setY6() method.
     *
     * @return void
     */
    public function testSetY6(): void {

        $obj = new RegistrationCertificate();

        $obj->setY6(1.5);
        $this->assertEquals(1.5, $obj->getY6());
    }

    /**
     * Tests the setZ1() method.
     *
     * @return void
     */
    public function testSetZ1(): void {

        $obj = new RegistrationCertificate();

        $obj->setZ1("z1");
        $this->assertEquals("z1", $obj->getZ1());
    }

    /**
     * Tests the setZ2() method.
     *
     * @return void
     */
    public function testSetZ2(): void {

        $obj = new RegistrationCertificate();

        $obj->setZ2("z2");
        $this->assertEquals("z2", $obj->getZ2());
    }

    /**
     * Tests the setZ3() method.
     *
     * @return void
     */
    public function testSetZ3(): void {

        $obj = new RegistrationCertificate();

        $obj->setZ3("z3");
        $this->assertEquals("z3", $obj->getZ3());
    }

    /**
     * Tests the setZ4() method.
     *
     * @return void
     */
    public function testSetZ4(): void {

        $obj = new RegistrationCertificate();

        $obj->setZ4("z4");
        $this->assertEquals("z4", $obj->getZ4());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new RegistrationCertificate();

        $this->assertInstanceOf(RegistrationCertificateInterface::class, $obj);

        $this->assertNull($obj->getA());
        $this->assertNull($obj->getA1());
        $this->assertNull($obj->getB());
        $this->assertNull($obj->getC1());
        $this->assertNull($obj->getC3());
        $this->assertNull($obj->getC4a());
        $this->assertNull($obj->getC41());
        $this->assertNull($obj->getD1());
        $this->assertNull($obj->getD2());
        $this->assertNull($obj->getD21());
        $this->assertNull($obj->getD3());
        $this->assertNull($obj->getE());
        $this->assertNull($obj->getF1());
        $this->assertNull($obj->getF2());
        $this->assertNull($obj->getF3());
        $this->assertNull($obj->getG());
        $this->assertNull($obj->getG1());
        $this->assertNull($obj->getH());
        $this->assertNull($obj->getI());
        $this->assertNull($obj->getI1());
        $this->assertNull($obj->getJ());
        $this->assertNull($obj->getJ1());
        $this->assertNull($obj->getJ2());
        $this->assertNull($obj->getJ3());
        $this->assertNull($obj->getK());
        $this->assertNull($obj->getP1());
        $this->assertNull($obj->getP2());
        $this->assertNull($obj->getP3());
        $this->assertNull($obj->getP6());
        $this->assertNull($obj->getQ());
        $this->assertNull($obj->getS1());
        $this->assertNull($obj->getS2());
        $this->assertNull($obj->getU1());
        $this->assertNull($obj->getU2());
        $this->assertNull($obj->getV7());
        $this->assertNull($obj->getV9());
        $this->assertNull($obj->getX1());
        $this->assertNull($obj->getY1());
        $this->assertNull($obj->getY2());
        $this->assertNull($obj->getY3());
        $this->assertNull($obj->getY4());
        $this->assertNull($obj->getY5());
        $this->assertNull($obj->getY6());
        $this->assertNull($obj->getZ1());
        $this->assertNull($obj->getZ2());
        $this->assertNull($obj->getZ3());
        $this->assertNull($obj->getZ4());
    }
}