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
 * Code prime jf1 type2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodePrimeJf1Type2Trait {

    /**
     * Code prime jf1 type2.
     *
     * @var string
     */
    private $codePrimeJf1Type2;

    /**
     * Get the code prime jf1 type2.
     *
     * @return string Returns the code prime jf1 type2.
     */
    public function getCodePrimeJf1Type2() {
        return $this->codePrimeJf1Type2;
    }

    /**
     * Set the code prime jf1 type2.
     *
     * @param string $codePrimeJf1Type2 The code prime jf1 type2.
     */
    public function setCodePrimeJf1Type2($codePrimeJf1Type2) {
        $this->codePrimeJf1Type2 = $codePrimeJf1Type2;
        return $this;
    }
}
