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
 * Code prime nuit2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodePrimeNuit2Trait {

    /**
     * Code prime nuit2.
     *
     * @var string
     */
    private $codePrimeNuit2;

    /**
     * Get the code prime nuit2.
     *
     * @return string Returns the code prime nuit2.
     */
    public function getCodePrimeNuit2() {
        return $this->codePrimeNuit2;
    }

    /**
     * Set the code prime nuit2.
     *
     * @param string $codePrimeNuit2 The code prime nuit2.
     */
    public function setCodePrimeNuit2($codePrimeNuit2) {
        $this->codePrimeNuit2 = $codePrimeNuit2;
        return $this;
    }
}
