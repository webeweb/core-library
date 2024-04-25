<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2024 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Serializer\Vehicle;

use DateTime;
use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Model\Vehicle\RegistrationCertificateInterface;
use WBW\Library\Common\Model\Vehicle\VehicleBrandInterface;
use WBW\Library\Common\Serializer\SerializerKeys;
use WBW\Library\Common\Serializer\Vehicle\JsonSerializer;

/**
 * JSON serializer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Serializer\Vehicle
 */
class JsonSerializerTest extends AbstractTestCase {

    /**
     * Test serializeRegistrationCertificate()
     *
     * @return void
     */
    public function testSerializeRegistrationCertificate(): void {

        // Set the date/time mocks.
        $b  = new DateTime("2024-04-25 08:30:00");
        $i  = new DateTime("2024-04-25 08:30:01");
        $i1 = new DateTime("2024-04-25 08:30:02");
        $x1 = new DateTime("2024-04-25 08:30:03");

        // Set a Registration certificate mock.
        $model = $this->getMockBuilder(RegistrationCertificateInterface::class)->getMock();
        $model->expects($this->any())->method("getA")->willReturn(SerializerKeys::A);
        $model->expects($this->any())->method("getA1")->willReturn(SerializerKeys::A1);
        $model->expects($this->any())->method("getB")->willReturn($b);
        $model->expects($this->any())->method("getC1")->willReturn(SerializerKeys::C1);
        $model->expects($this->any())->method("getC3")->willReturn(SerializerKeys::C3);
        $model->expects($this->any())->method("getC4a")->willReturn(SerializerKeys::C4A);
        $model->expects($this->any())->method("getC41")->willReturn(SerializerKeys::C41);
        $model->expects($this->any())->method("getD1")->willReturn(SerializerKeys::D1);
        $model->expects($this->any())->method("getD2")->willReturn(SerializerKeys::D2);
        $model->expects($this->any())->method("getD21")->willReturn(SerializerKeys::D21);
        $model->expects($this->any())->method("getD3")->willReturn(SerializerKeys::D3);
        $model->expects($this->any())->method("getE")->willReturn(SerializerKeys::E);
        $model->expects($this->any())->method("getF1")->willReturn(1);
        $model->expects($this->any())->method("getF2")->willReturn(2);
        $model->expects($this->any())->method("getF3")->willReturn(3);
        $model->expects($this->any())->method("getG")->willReturn(4);
        $model->expects($this->any())->method("getG1")->willReturn(5);
        $model->expects($this->any())->method("getH")->willReturn(SerializerKeys::H);
        $model->expects($this->any())->method("getI")->willReturn($i);
        $model->expects($this->any())->method("getI1")->willReturn($i1);
        $model->expects($this->any())->method("getJ")->willReturn(SerializerKeys::J);
        $model->expects($this->any())->method("getJ1")->willReturn(SerializerKeys::J1);
        $model->expects($this->any())->method("getJ2")->willReturn(SerializerKeys::J2);
        $model->expects($this->any())->method("getJ3")->willReturn(SerializerKeys::J3);
        $model->expects($this->any())->method("getK")->willReturn(SerializerKeys::K);
        $model->expects($this->any())->method("getP1")->willReturn(6);
        $model->expects($this->any())->method("getP2")->willReturn(7);
        $model->expects($this->any())->method("getP3")->willReturn(SerializerKeys::P3);
        $model->expects($this->any())->method("getP6")->willReturn(8);
        $model->expects($this->any())->method("getQ")->willReturn(0.1);
        $model->expects($this->any())->method("getS1")->willReturn(9);
        $model->expects($this->any())->method("getS2")->willReturn(10);
        $model->expects($this->any())->method("getU1")->willReturn(11);
        $model->expects($this->any())->method("getU2")->willReturn(12);
        $model->expects($this->any())->method("getV7")->willReturn(13);
        $model->expects($this->any())->method("getV9")->willReturn(SerializerKeys::V9);
        $model->expects($this->any())->method("getX1")->willReturn($x1);
        $model->expects($this->any())->method("getY1")->willReturn(0.2);
        $model->expects($this->any())->method("getY2")->willReturn(0.3);
        $model->expects($this->any())->method("getY3")->willReturn(0.4);
        $model->expects($this->any())->method("getY4")->willReturn(0.5);
        $model->expects($this->any())->method("getY5")->willReturn(0.6);
        $model->expects($this->any())->method("getY6")->willReturn(0.7);
        $model->expects($this->any())->method("getZ1")->willReturn(SerializerKeys::Z1);
        $model->expects($this->any())->method("getZ2")->willReturn(SerializerKeys::Z2);
        $model->expects($this->any())->method("getZ3")->willReturn(SerializerKeys::Z3);
        $model->expects($this->any())->method("getZ4")->willReturn(SerializerKeys::Z4);

        $res = JsonSerializer::serializeRegistrationCertificate($model);
        $this->assertCount(47, $res);
        $this->assertEquals($model->getA(), $res[SerializerKeys::A]);
        $this->assertEquals($model->getA1(), $res[SerializerKeys::A1]);
        $this->assertEquals($model->getB(), $res[SerializerKeys::B]);
        $this->assertEquals($model->getC1(), $res[SerializerKeys::C1]);
        $this->assertEquals($model->getC3(), $res[SerializerKeys::C3]);
        $this->assertEquals($model->getC4a(), $res[SerializerKeys::C4A]);
        $this->assertEquals($model->getC41(), $res[SerializerKeys::C41]);
        $this->assertEquals($model->getD1(), $res[SerializerKeys::D1]);
        $this->assertEquals($model->getD2(), $res[SerializerKeys::D2]);
        $this->assertEquals($model->getD21(), $res[SerializerKeys::D21]);
        $this->assertEquals($model->getD3(), $res[SerializerKeys::D3]);
        $this->assertEquals($model->getE(), $res[SerializerKeys::E]);
        $this->assertEquals($model->getF1(), $res[SerializerKeys::F1]);
        $this->assertEquals($model->getF2(), $res[SerializerKeys::F2]);
        $this->assertEquals($model->getF3(), $res[SerializerKeys::F3]);
        $this->assertEquals($model->getG(), $res[SerializerKeys::G]);
        $this->assertEquals($model->getG1(), $res[SerializerKeys::G1]);
        $this->assertEquals($model->getH(), $res[SerializerKeys::H]);
        $this->assertEquals($model->getI(), $res[SerializerKeys::I]);
        $this->assertEquals($model->getI1(), $res[SerializerKeys::I1]);
        $this->assertEquals($model->getJ(), $res[SerializerKeys::J]);
        $this->assertEquals($model->getJ1(), $res[SerializerKeys::J1]);
        $this->assertEquals($model->getJ2(), $res[SerializerKeys::J2]);
        $this->assertEquals($model->getJ3(), $res[SerializerKeys::J3]);
        $this->assertEquals($model->getK(), $res[SerializerKeys::K]);
        $this->assertEquals($model->getP1(), $res[SerializerKeys::P1]);
        $this->assertEquals($model->getP2(), $res[SerializerKeys::P2]);
        $this->assertEquals($model->getP3(), $res[SerializerKeys::P3]);
        $this->assertEquals($model->getP6(), $res[SerializerKeys::P6]);
        $this->assertEquals($model->getQ(), $res[SerializerKeys::Q]);
        $this->assertEquals($model->getS1(), $res[SerializerKeys::S1]);
        $this->assertEquals($model->getS2(), $res[SerializerKeys::S2]);
        $this->assertEquals($model->getU1(), $res[SerializerKeys::U1]);
        $this->assertEquals($model->getU2(), $res[SerializerKeys::U2]);
        $this->assertEquals($model->getV7(), $res[SerializerKeys::V7]);
        $this->assertEquals($model->getV9(), $res[SerializerKeys::V9]);
        $this->assertEquals($model->getX1(), $res[SerializerKeys::X1]);
        $this->assertEquals($model->getY1(), $res[SerializerKeys::Y1]);
        $this->assertEquals($model->getY2(), $res[SerializerKeys::Y2]);
        $this->assertEquals($model->getY3(), $res[SerializerKeys::Y3]);
        $this->assertEquals($model->getY4(), $res[SerializerKeys::Y4]);
        $this->assertEquals($model->getY5(), $res[SerializerKeys::Y5]);
        $this->assertEquals($model->getY6(), $res[SerializerKeys::Y6]);
        $this->assertEquals($model->getZ1(), $res[SerializerKeys::Z1]);
        $this->assertEquals($model->getZ2(), $res[SerializerKeys::Z2]);
        $this->assertEquals($model->getZ3(), $res[SerializerKeys::Z3]);
        $this->assertEquals($model->getZ4(), $res[SerializerKeys::Z4]);
    }

    /**
     * Test serializeVehicleBrand()
     *
     * @return void
     */
    public function testSerializeVehicleBrand(): void {

        // Set a Vehicle brand mock.
        $model = $this->getMockBuilder(VehicleBrandInterface::class)->getMock();
        $model->expects($this->any())->method("getLabel")->willReturn(SerializerKeys::LABEL);

        $res = JsonSerializer::serializeVehicleBrand($model);
        $this->assertCount(1, $res);

        $this->assertEquals($model->getLabel(), $res[SerializerKeys::LABEL]);
    }
}
