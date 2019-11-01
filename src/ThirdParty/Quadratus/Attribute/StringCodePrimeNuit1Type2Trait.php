<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Attribute;

/**
 * Code prime nuit1 type2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodePrimeNuit1Type2Trait {

    /**
     * Code prime nuit1 type2.
     *
     * @var string
     */
    private $codePrimeNuit1Type2;

    /**
     * Get the code prime nuit1 type2.
     *
     * @return string Returns the code prime nuit1 type2.
     */
    public function getCodePrimeNuit1Type2() {
        return $this->codePrimeNuit1Type2;
    }

    /**
     * Set the code prime nuit1 type2.
     *
     * @param string $codePrimeNuit1Type2 The code prime nuit1 type2.
     */
    public function setCodePrimeNuit1Type2($codePrimeNuit1Type2) {
        $this->codePrimeNuit1Type2 = $codePrimeNuit1Type2;
        return $this;
    }
}
