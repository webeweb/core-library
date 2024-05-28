<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Model\Vehicle;

use DateTime;
use JsonSerializable;
use Throwable;
use WBW\Library\Common\Model\Vehicle\RegistrationCertificate;
use WBW\Library\Common\Model\Vehicle\RegistrationCertificateInterface;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Registration certificate test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Model\Vehicle
 */
class RegistrationCertificateTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testJsonSerialize(): void {

        $obj = new RegistrationCertificate();

        $this->assertIsArray($obj->jsonSerialize());
    }

    /**
     * Test setA()
     *
     * @return void
     */
    public function testSetA(): void {

        $obj = new RegistrationCertificate();

        $obj->setA("a");
        $this->assertEquals("a", $obj->getA());
    }

    /**
     * Test setA1()
     *
     * @return void
     */
    public function testSetA1(): void {

        $obj = new RegistrationCertificate();

        $obj->setA1("a1");
        $this->assertEquals("a1", $obj->getA1());
    }

    /**
     * Test setB()
     *
     * @return void
     */
    public function testSetB(): void {

        // Set a B mock.
        $b = new DateTime();

        $obj = new RegistrationCertificate();

        $obj->setB($b);
        $this->assertSame($b, $obj->getB());
    }

    /**
     * Test setC1()
     *
     * @return void
     */
    public function testSetC1(): void {

        $obj = new RegistrationCertificate();

        $obj->setC1("c1");
        $this->assertEquals("c1", $obj->getC1());
    }

    /**
     * Test setC3()
     *
     * @return void
     */
    public function testSetC3(): void {

        $obj = new RegistrationCertificate();

        $obj->setC3("c3");
        $this->assertEquals("c3", $obj->getC3());
    }

    /**
     * Test setC41()
     *
     * @return void
     */
    public function testSetC41(): void {

        $obj = new RegistrationCertificate();

        $obj->setC41("c41");
        $this->assertEquals("c41", $obj->getC41());
    }

    /**
     * Test setC4a()
     *
     * @return void
     */
    public function testSetC4a(): void {

        $obj = new RegistrationCertificate();

        $obj->setC4a("c4a");
        $this->assertEquals("c4a", $obj->getC4a());
    }

    /**
     * Test setD1()
     *
     * @return void
     */
    public function testSetD1(): void {

        $obj = new RegistrationCertificate();

        $obj->setD1("d1");
        $this->assertEquals("d1", $obj->getD1());
    }

    /**
     * Test setD2()
     *
     * @return void
     */
    public function testSetD2(): void {

        $obj = new RegistrationCertificate();

        $obj->setD2("d2");
        $this->assertEquals("d2", $obj->getD2());
    }

    /**
     * Test setD21()
     *
     * @return void
     */
    public function testSetD21(): void {

        $obj = new RegistrationCertificate();

        $obj->setD21("d21");
        $this->assertEquals("d21", $obj->getD21());
    }

    /**
     * Test setD3()
     *
     * @return void
     */
    public function testSetD3(): void {

        $obj = new RegistrationCertificate();

        $obj->setD3("d3");
        $this->assertEquals("d3", $obj->getD3());
    }

    /**
     * Test setE()
     *
     * @return void
     */
    public function testSetE(): void {

        $obj = new RegistrationCertificate();

        $obj->setE("e");
        $this->assertEquals("e", $obj->getE());
    }

    /**
     * Test setF1()
     *
     * @return void
     */
    public function testSetF1(): void {

        $obj = new RegistrationCertificate();

        $obj->setF1(1);
        $this->assertEquals(1, $obj->getF1());
    }

    /**
     * Test setF2()
     *
     * @return void
     */
    public function testSetF2(): void {

        $obj = new RegistrationCertificate();

        $obj->setF2(1);
        $this->assertEquals(1, $obj->getF2());
    }

    /**
     * Test setF3()
     *
     * @return void
     */
    public function testSetF3(): void {

        $obj = new RegistrationCertificate();

        $obj->setF3(1);
        $this->assertEquals(1, $obj->getF3());
    }

    /**
     * Test setG()
     *
     * @return void
     */
    public function testSetG(): void {

        $obj = new RegistrationCertificate();

        $obj->setG(1);
        $this->assertEquals(1, $obj->getG());
    }

    /**
     * Test setG1()
     *
     * @return void
     */
    public function testSetG1(): void {

        $obj = new RegistrationCertificate();

        $obj->setG1(1);
        $this->assertEquals(1, $obj->getG1());
    }

    /**
     * Test setH()
     *
     * @return void
     */
    public function testSetH(): void {

        $obj = new RegistrationCertificate();

        $obj->setH("h");
        $this->assertEquals("h", $obj->getH());
    }

    /**
     * Test setI()
     *
     * @return void
     */
    public function testSetI(): void {

        // Set the I mock.
        $i = new DateTime();

        $obj = new RegistrationCertificate();

        $obj->setI($i);
        $this->assertSame($i, $obj->getI());
    }

    /**
     * Test setI1()
     *
     * @return void
     */
    public function testSetI1(): void {

        // Set the I.1 mock.
        $i1 = new DateTime();

        $obj = new RegistrationCertificate();

        $obj->setI1($i1);
        $this->assertSame($i1, $obj->getI1());
    }

    /**
     * Test setJ()
     *
     * @return void
     */
    public function testSetJ(): void {

        $obj = new RegistrationCertificate();

        $obj->setJ("j");
        $this->assertEquals("j", $obj->getJ());
    }

    /**
     * Test setJ1()
     *
     * @return void
     */
    public function testSetJ1(): void {

        $obj = new RegistrationCertificate();

        $obj->setJ1("j1");
        $this->assertEquals("j1", $obj->getJ1());
    }

    /**
     * Test setJ2()
     *
     * @return void
     */
    public function testSetJ2(): void {

        $obj = new RegistrationCertificate();

        $obj->setJ2("j2");
        $this->assertEquals("j2", $obj->getJ2());
    }

    /**
     * Test setJ3()
     *
     * @return void
     */
    public function testSetJ3(): void {

        $obj = new RegistrationCertificate();

        $obj->setJ3("j3");
        $this->assertEquals("j3", $obj->getJ3());
    }

    /**
     * Test setK()
     *
     * @return void
     */
    public function testSetK(): void {

        $obj = new RegistrationCertificate();

        $obj->setK("K");
        $this->assertEquals("K", $obj->getK());
    }

    /**
     * Test setP1()
     *
     * @return void
     */
    public function testSetP1(): void {

        $obj = new RegistrationCertificate();

        $obj->setP1(1);
        $this->assertEquals(1, $obj->getP1());
    }

    /**
     * Test setP2()
     *
     * @return void
     */
    public function testSetP2(): void {

        $obj = new RegistrationCertificate();

        $obj->setP2(1);
        $this->assertEquals(1, $obj->getP2());
    }

    /**
     * Test setP3()
     *
     * @return void
     */
    public function testSetP3(): void {

        $obj = new RegistrationCertificate();

        $obj->setP3("p3");
        $this->assertEquals("p3", $obj->getP3());
    }

    /**
     * Test setP6()
     *
     * @return void
     */
    public function testSetP6(): void {

        $obj = new RegistrationCertificate();

        $obj->setP6(1);
        $this->assertEquals(1, $obj->getP6());
    }

    /**
     * Test setQ()
     *
     * @return void
     */
    public function testSetQ(): void {

        $obj = new RegistrationCertificate();

        $obj->setQ(1.5);
        $this->assertEquals(1.5, $obj->getQ());
    }

    /**
     * Test setS1()
     *
     * @return void
     */
    public function testSetS1(): void {

        $obj = new RegistrationCertificate();

        $obj->setS1(1);
        $this->assertEquals(1, $obj->getS1());
    }

    /**
     * Test setS2()
     *
     * @return void
     */
    public function testSetS2(): void {

        $obj = new RegistrationCertificate();

        $obj->setS2(1);
        $this->assertEquals(1, $obj->getS2());
    }

    /**
     * Test setU1()
     *
     * @return void
     */
    public function testSetU1(): void {

        $obj = new RegistrationCertificate();

        $obj->setU1(1);
        $this->assertEquals(1, $obj->getU1());
    }

    /**
     * Test setU2()
     *
     * @return void
     */
    public function testSetU2(): void {

        $obj = new RegistrationCertificate();

        $obj->setU2(1);
        $this->assertEquals(1, $obj->getU2());
    }

    /**
     * Test setV7()
     *
     * @return void
     */
    public function testSetV7(): void {

        $obj = new RegistrationCertificate();

        $obj->setV7(1);
        $this->assertEquals(1, $obj->getV7());
    }

    /**
     * Test setV9()
     *
     * @return void
     */
    public function testSetV9(): void {

        $obj = new RegistrationCertificate();

        $obj->setV9("v9");
        $this->assertEquals("v9", $obj->getV9());
    }

    /**
     * Test setX1()
     *
     * @return void
     */
    public function testSetX1(): void {

        // Set the X.1 mock.
        $x1 = new DateTime();

        $obj = new RegistrationCertificate();

        $obj->setX1($x1);
        $this->assertSame($x1, $obj->getX1());
    }

    /**
     * Test setY1()
     *
     * @return void
     */
    public function testSetY1(): void {

        $obj = new RegistrationCertificate();

        $obj->setY1(1.5);
        $this->assertEquals(1.5, $obj->getY1());
    }

    /**
     * Test setY2()
     *
     * @return void
     */
    public function testSetY2(): void {

        $obj = new RegistrationCertificate();

        $obj->setY2(1.5);
        $this->assertEquals(1.5, $obj->getY2());
    }

    /**
     * Test setY3()
     *
     * @return void
     */
    public function testSetY3(): void {

        $obj = new RegistrationCertificate();

        $obj->setY3(1.5);
        $this->assertEquals(1.5, $obj->getY3());
    }

    /**
     * Test setY4()
     *
     * @return void
     */
    public function testSetY4(): void {

        $obj = new RegistrationCertificate();

        $obj->setY4(1.5);
        $this->assertEquals(1.5, $obj->getY4());
    }

    /**
     * Test setY5()
     *
     * @return void
     */
    public function testSetY5(): void {

        $obj = new RegistrationCertificate();

        $obj->setY5(1.5);
        $this->assertEquals(1.5, $obj->getY5());
    }

    /**
     * Test setY6()
     *
     * @return void
     */
    public function testSetY6(): void {

        $obj = new RegistrationCertificate();

        $obj->setY6(1.5);
        $this->assertEquals(1.5, $obj->getY6());
    }

    /**
     * Test setZ1()
     *
     * @return void
     */
    public function testSetZ1(): void {

        $obj = new RegistrationCertificate();

        $obj->setZ1("z1");
        $this->assertEquals("z1", $obj->getZ1());
    }

    /**
     * Test setZ2()
     *
     * @return void
     */
    public function testSetZ2(): void {

        $obj = new RegistrationCertificate();

        $obj->setZ2("z2");
        $this->assertEquals("z2", $obj->getZ2());
    }

    /**
     * Test setZ3()
     *
     * @return void
     */
    public function testSetZ3(): void {

        $obj = new RegistrationCertificate();

        $obj->setZ3("z3");
        $this->assertEquals("z3", $obj->getZ3());
    }

    /**
     * Test setZ4()
     *
     * @return void
     */
    public function testSetZ4(): void {

        $obj = new RegistrationCertificate();

        $obj->setZ4("z4");
        $this->assertEquals("z4", $obj->getZ4());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new RegistrationCertificate();

        $this->assertInstanceOf(JsonSerializable::class, $obj);
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
