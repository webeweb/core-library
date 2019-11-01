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
 * Code prime nuit1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodePrimeNuit1Trait {

    /**
     * Code prime nuit1.
     *
     * @var string
     */
    private $codePrimeNuit1;

    /**
     * Get the code prime nuit1.
     *
     * @return string Returns the code prime nuit1.
     */
    public function getCodePrimeNuit1() {
        return $this->codePrimeNuit1;
    }

    /**
     * Set the code prime nuit1.
     *
     * @param string $codePrimeNuit1 The code prime nuit1.
     */
    public function setCodePrimeNuit1($codePrimeNuit1) {
        $this->codePrimeNuit1 = $codePrimeNuit1;
        return $this;
    }
}
