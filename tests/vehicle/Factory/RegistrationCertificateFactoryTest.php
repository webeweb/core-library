<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Vehicle\Tests\Factory;

use DateTime;
use DateTimeZone;
use Exception;
use WBW\Library\Vehicle\Factory\RegistrationCertificateFactory;
use WBW\Library\Vehicle\Model\RegistrationCertificate;
use WBW\Library\Vehicle\Tests\AbstractTestCase;

/**
 * Registration certificate factory test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Vehicle\Tests\Factory
 */
class RegistrationCertificateFactoryTest extends AbstractTestCase {

    /**
     * Tests copy()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testCopy(): void {

        // Set the date/time mocks.
        $b  = new DateTime("2021-09-10 09:02:00.00000", new DateTimeZone("UTC"));
        $i  = new DateTime("2021-09-10 09:09:00.00000", new DateTimeZone("UTC"));
        $i1 = new DateTime("2021-09-10 09:09:01.00000", new DateTimeZone("UTC"));
        $x1 = new DateTime("2021-09-10 09:24:01.00000", new DateTimeZone("UTC"));

        $obj = new RegistrationCertificate();
        $obj->setA("a");
        $obj->setA1("a1");
        $obj->setB($b);
        $obj->setC1("c1");
        $obj->setC3("c3");
        $obj->setC41("c41");
        $obj->setC4a("c4a");
        $obj->setD1("d1");
        $obj->setD2("d2");
        $obj->setD21("d21");
        $obj->setD3("d3");
        $obj->setE("e");
        $obj->setF1(61);
        $obj->setF2(62);
        $obj->setF3(63);
        $obj->setG(70);
        $obj->setG1(71);
        $obj->setH("h");
        $obj->setI($i);
        $obj->setI1($i1);
        $obj->setJ("j");
        $obj->setJ1("j1");
        $obj->setJ2("j2");
        $obj->setJ3("j3");
        $obj->setK("K");
        $obj->setP1(161);
        $obj->setP2(162);
        $obj->setP3("p3");
        $obj->setP6(166);
        $obj->setQ(17.123456789);
        $obj->setS1(191);
        $obj->setS2(192);
        $obj->setU1(211);
        $obj->setU2(212);
        $obj->setV7(217);
        $obj->setV9("v9");
        $obj->setX1($x1);
        $obj->setY1(25.1);
        $obj->setY2(25.2);
        $obj->setY3(25.3);
        $obj->setY4(25.4);
        $obj->setY5(25.5);
        $obj->setY6(25.6);
        $obj->setZ1("z1");
        $obj->setZ2("z2");
        $obj->setZ3("z3");
        $obj->setZ4("z4");

        $res = RegistrationCertificateFactory::copy($obj, new RegistrationCertificate());
        $this->assertEquals($obj->getA(), $res->getA());
        $this->assertEquals($obj->getA1(), $res->getA1());
        $this->assertEquals($obj->getB(), $res->getB());
        $this->assertEquals($obj->getC1(), $res->getC1());
        $this->assertEquals($obj->getC3(), $res->getC3());
        $this->assertEquals($obj->getC41(), $res->getC41());
        $this->assertEquals($obj->getC4a(), $res->getC4a());
        $this->assertEquals($obj->getD1(), $res->getD1());
        $this->assertEquals($obj->getD2(), $res->getD2());
        $this->assertEquals($obj->getD21(), $res->getD21());
        $this->assertEquals($obj->getD3(), $res->getD3());
        $this->assertEquals($obj->getE(), $res->getE());
        $this->assertEquals($obj->getF1(), $res->getF1());
        $this->assertEquals($obj->getF2(), $res->getF2());
        $this->assertEquals($obj->getF3(), $res->getF3());
        $this->assertEquals($obj->getG(), $res->getG());
        $this->assertEquals($obj->getG1(), $res->getG1());
        $this->assertEquals($obj->getH(), $res->getH());
        $this->assertEquals($obj->getI(), $res->getI());
        $this->assertEquals($obj->getI1(), $res->getI1());
        $this->assertEquals($obj->getJ(), $res->getJ());
        $this->assertEquals($obj->getJ1(), $res->getJ1());
        $this->assertEquals($obj->getJ2(), $res->getJ2());
        $this->assertEquals($obj->getJ3(), $res->getJ3());
        $this->assertEquals($obj->getK(), $res->getK());
        $this->assertEquals($obj->getP1(), $res->getP1());
        $this->assertEquals($obj->getP2(), $res->getP2());
        $this->assertEquals($obj->getP3(), $res->getP3());
        $this->assertEquals($obj->getP6(), $res->getP6());
        $this->assertEquals($obj->getQ(), $res->getQ());
        $this->assertEquals($obj->getS1(), $res->getS1());
        $this->assertEquals($obj->getS2(), $res->getS2());
        $this->assertEquals($obj->getU1(), $res->getU1());
        $this->assertEquals($obj->getU2(), $res->getU2());
        $this->assertEquals($obj->getV7(), $res->getV7());
        $this->assertEquals($obj->getV9(), $res->getV9());
        $this->assertEquals($obj->getX1(), $res->getX1());
        $this->assertEquals($obj->getY1(), $res->getY1());
        $this->assertEquals($obj->getY2(), $res->getY2());
        $this->assertEquals($obj->getY3(), $res->getY3());
        $this->assertEquals($obj->getY4(), $res->getY4());
        $this->assertEquals($obj->getY5(), $res->getY5());
        $this->assertEquals($obj->getY6(), $res->getY6());
        $this->assertEquals($obj->getZ1(), $res->getZ1());
        $this->assertEquals($obj->getZ2(), $res->getZ2());
        $this->assertEquals($obj->getZ3(), $res->getZ3());
        $this->assertEquals($obj->getZ4(), $res->getZ4());
    }
}
