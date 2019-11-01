<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\DecTvaGroupe;

/**
 * Dec tva groupe test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class DecTvaGroupeTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DecTvaGroupe();

        $this->assertNull($obj->getAz0990b());
        $this->assertNull($obj->getAz1010b());
        $this->assertNull($obj->getAz1020b());
        $this->assertNull($obj->getAz1030b());
        $this->assertNull($obj->getAz1040b());
        $this->assertNull($obj->getAz1050b());
        $this->assertNull($obj->getAz1080b());
        $this->assertNull($obj->getAz1090b());
        $this->assertNull($obj->getAz1100b());
        $this->assertNull($obj->getAz1110b());
        $this->assertNull($obj->getAz1120b());
        $this->assertNull($obj->getAz3240());
        $this->assertNull($obj->getAz3510());
        $this->assertNull($obj->getAz3520());
        $this->assertNull($obj->getAz38Code());
        $this->assertNull($obj->getAz38Lib());
        $this->assertNull($obj->getAz38b());
        $this->assertNull($obj->getAz4200());
        $this->assertNull($obj->getAz4201());
        $this->assertNull($obj->getAz4204());
        $this->assertNull($obj->getAz4206());
        $this->assertNull($obj->getAz4207());
        $this->assertNull($obj->getAz4213());
        $this->assertNull($obj->getAz4215());
        $this->assertNull($obj->getAz4220());
        $this->assertNull($obj->getAz4222());
        $this->assertNull($obj->getAz4223());
        $this->assertNull($obj->getAz4228Mtt());
        $this->assertNull($obj->getAz4230());
        $this->assertNull($obj->getAz4231());
        $this->assertNull($obj->getAz4232());
        $this->assertNull($obj->getAz4233());
        $this->assertNull($obj->getAz4234());
        $this->assertNull($obj->getAz4235());
        $this->assertNull($obj->getAz59Mtt());
        $this->assertNull($obj->getAzEsMtt());
        $this->assertNull($obj->getAzEuMtt());
        $this->assertNull($obj->getAzEzCode());
        $this->assertNull($obj->getAzEzLib());
        $this->assertNull($obj->getAzEzMtt());
        $this->assertNull($obj->getAzGaCode());
        $this->assertNull($obj->getAzGaLib());
        $this->assertNull($obj->getAzGaMtt());
        $this->assertNull($obj->getAzGcMtt());
        $this->assertNull($obj->getAzHi());
        $this->assertNull($obj->getAzJb());
        $this->assertNull($obj->getAzJc());
        $this->assertNull($obj->getAzTotalB());
        $this->assertNull($obj->getAz1081b());
        $this->assertNull($obj->getAz4236());
        $this->assertNull($obj->getAz4237());
        $this->assertNull($obj->getAz4238());
        $this->assertNull($obj->getAz4239());
        $this->assertNull($obj->getAz4240());
        $this->assertNull($obj->getAz4241());
        $this->assertNull($obj->getAz4242());
        $this->assertNull($obj->getAz4243());
        $this->assertNull($obj->getAz4244());
        $this->assertNull($obj->getAz4245());
        $this->assertNull($obj->getAz4246());
        $this->assertNull($obj->getAz4247());
        $this->assertNull($obj->getAz4248());
        $this->assertNull($obj->getAz4249());
        $this->assertNull($obj->getAz4250());
        $this->assertNull($obj->getAz4251());
        $this->assertNull($obj->getAz4252());
        $this->assertNull($obj->getAz4254());
        $this->assertNull($obj->getAz4255());
        $this->assertNull($obj->getAz4256());
        $this->assertNull($obj->getAz4257());
        $this->assertNull($obj->getAz4258());
        $this->assertNull($obj->getAz4259());
        $this->assertNull($obj->getAz4260());
        $this->assertNull($obj->getAz4261());
        $this->assertNull($obj->getAz4262());
        $this->assertNull($obj->getAz4263());
        $this->assertNull($obj->getAz4264());
        $this->assertNull($obj->getAz4265());
        $this->assertNull($obj->getAz4266());
        $this->assertNull($obj->getAz4267());
        $this->assertNull($obj->getAz4268());
        $this->assertNull($obj->getAz4268Base());
        $this->assertNull($obj->getAz4269());
        $this->assertNull($obj->getAz4269Base());
        $this->assertNull($obj->getAz4270());
        $this->assertNull($obj->getAz4270Base());
        $this->assertNull($obj->getAz4271());
        $this->assertNull($obj->getAz4271Base());
        $this->assertNull($obj->getAz4272());
        $this->assertNull($obj->getAz4274());
        $this->assertNull($obj->getAz4276());
        $this->assertNull($obj->getAz4276Base());
        $this->assertNull($obj->getAz4277());
        $this->assertNull($obj->getAz4277Base());
        $this->assertNull($obj->getAz4278());
        $this->assertNull($obj->getAz4279());
        $this->assertNull($obj->getAz4280());
        $this->assertNull($obj->getAz4281());
        $this->assertNull($obj->getAz4282());
        $this->assertNull($obj->getAz4283());
        $this->assertNull($obj->getAz4284());
        $this->assertNull($obj->getAz4285());
        $this->assertNull($obj->getAz4288());
        $this->assertNull($obj->getAz4289());
        $this->assertNull($obj->getAz4290());
        $this->assertNull($obj->getCorres1());
        $this->assertNull($obj->getCorres2());
        $this->assertNull($obj->getCorres3());
        $this->assertNull($obj->getCorres4());
        $this->assertNull($obj->getCorres5());
        $this->assertNull($obj->getDateDec());
        $this->assertNull($obj->getDebutExo());
        $this->assertNull($obj->getFinExo());
        $this->assertNull($obj->getLibDoss());
        $this->assertNull($obj->getMentionExpresse());
        $this->assertNull($obj->getNoDoss());
        $this->assertNull($obj->getNoLotEcritures());
        $this->assertNull($obj->getNumUniq());
        $this->assertNull($obj->getPaiementImputation());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getSelAdresseDest());
        $this->assertNull($obj->getTotal());
        $this->assertNull($obj->getTypeDec());
        $this->assertNull($obj->getVille());
        $this->assertNull($obj->getZ0100b());
        $this->assertNull($obj->getZ0121b());
        $this->assertNull($obj->getZ0705());
        $this->assertNull($obj->getZ0920b());
        $this->assertNull($obj->getZ12Code());
        $this->assertNull($obj->getZ12Lib());
        $this->assertNull($obj->getZ12Taxe());
        $this->assertNull($obj->getZ14());
        $this->assertNull($obj->getZ196b());
        $this->assertNull($obj->getZ21());
        $this->assertNull($obj->getZ25());
        $this->assertNull($obj->getZ4227());
        $this->assertNull($obj->getZ8001());
        $this->assertNull($obj->getZ8002());
        $this->assertNull($obj->getZ8003());
        $this->assertNull($obj->getZ8005());
        $this->assertNull($obj->getZ8006());
        $this->assertNull($obj->getZ9979());
        $this->assertNull($obj->getZ9989());
        $this->assertNull($obj->getZ9991());
        $this->assertNull($obj->getZ9999());
        $this->assertNull($obj->getZ9BTaxe());
        $this->assertNull($obj->getiLock());
        $this->assertNull($obj->getz0151b());
        $this->assertNull($obj->getz0207b());
        $this->assertNull($obj->getZ0600());
        $this->assertNull($obj->getZ0900b());
    }
}
