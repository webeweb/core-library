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
 * Code prime jf2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodePrimeJf2Trait {

    /**
     * Code prime jf2.
     *
     * @var string
     */
    private $codePrimeJf2;

    /**
     * Get the code prime jf2.
     *
     * @return string Returns the code prime jf2.
     */
    public function getCodePrimeJf2() {
        return $this->codePrimeJf2;
    }

    /**
     * Set the code prime jf2.
     *
     * @param string $codePrimeJf2 The code prime jf2.
     */
    public function setCodePrimeJf2($codePrimeJf2) {
        $this->codePrimeJf2 = $codePrimeJf2;
        return $this;
    }
}
