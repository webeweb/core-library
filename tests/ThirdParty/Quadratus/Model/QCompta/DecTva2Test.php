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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\DecTva2;

/**
 * Dec tva2 test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class DecTva2Test extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DecTva2();

        $this->assertNull($obj->getAs4284Base());
        $this->assertNull($obj->getAz3510Base());
        $this->assertNull($obj->getAz3520Base());
        $this->assertNull($obj->getAz4204Nb());
        $this->assertNull($obj->getAz4206Nb());
        $this->assertNull($obj->getAz4207NbK());
        $this->assertNull($obj->getAz4213Base());
        $this->assertNull($obj->getAz4215Base());
        $this->assertNull($obj->getAz4217Base());
        $this->assertNull($obj->getAz4223Base());
        $this->assertNull($obj->getAz4226Base());
        $this->assertNull($obj->getAz4228Base());
        $this->assertNull($obj->getAz4229Base());
        $this->assertNull($obj->getAz4237Base());
        $this->assertNull($obj->getAz4240Base());
        $this->assertNull($obj->getAz4245Base());
        $this->assertNull($obj->getAz4249NbT());
        $this->assertNull($obj->getAz4250NbE());
        $this->assertNull($obj->getAz4252Base());
        $this->assertNull($obj->getAz4255Base());
        $this->assertNull($obj->getAz4257Base());
        $this->assertNull($obj->getAz4258Base());
        $this->assertNull($obj->getAz4268Base2());
        $this->assertNull($obj->getAz4270Base2());
        $this->assertNull($obj->getAz4278());
        $this->assertNull($obj->getAz4278Base());
        $this->assertNull($obj->getAz4279());
        $this->assertNull($obj->getAz4279NbK());
        $this->assertNull($obj->getAz4279NbV());
        $this->assertNull($obj->getAz4280());
        $this->assertNull($obj->getAz4280NbK());
        $this->assertNull($obj->getAz4280NbV());
        $this->assertNull($obj->getAz4281());
        $this->assertNull($obj->getAz4281Base());
        $this->assertNull($obj->getAz4282());
        $this->assertNull($obj->getAz4282Base());
        $this->assertNull($obj->getAz4283());
        $this->assertNull($obj->getAz4283Base());
        $this->assertNull($obj->getAz4284());
        $this->assertNull($obj->getAz4285());
        $this->assertNull($obj->getAz4285Base());
        $this->assertNull($obj->getAz4288());
        $this->assertNull($obj->getAz4288Base());
        $this->assertNull($obj->getAz4289());
        $this->assertNull($obj->getAz4289Base());
        $this->assertNull($obj->getAz4290());
        $this->assertNull($obj->getAz4290Base());
        $this->assertNull($obj->getPeriode());
    }
}
