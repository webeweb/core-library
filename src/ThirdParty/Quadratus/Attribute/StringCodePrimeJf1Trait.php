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
 * Code prime jf1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodePrimeJf1Trait {

    /**
     * Code prime jf1.
     *
     * @var string
     */
    private $codePrimeJf1;

    /**
     * Get the code prime jf1.
     *
     * @return string Returns the code prime jf1.
     */
    public function getCodePrimeJf1() {
        return $this->codePrimeJf1;
    }

    /**
     * Set the code prime jf1.
     *
     * @param string $codePrimeJf1 The code prime jf1.
     */
    public function setCodePrimeJf1($codePrimeJf1) {
        $this->codePrimeJf1 = $codePrimeJf1;
        return $this;
    }
}
