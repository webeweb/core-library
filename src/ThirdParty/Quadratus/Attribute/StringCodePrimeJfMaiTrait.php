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
 * Code prime jf mai trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodePrimeJfMaiTrait {

    /**
     * Code prime jf mai.
     *
     * @var string
     */
    private $codePrimeJfMai;

    /**
     * Get the code prime jf mai.
     *
     * @return string Returns the code prime jf mai.
     */
    public function getCodePrimeJfMai() {
        return $this->codePrimeJfMai;
    }

    /**
     * Set the code prime jf mai.
     *
     * @param string $codePrimeJfMai The code prime jf mai.
     */
    public function setCodePrimeJfMai($codePrimeJfMai) {
        $this->codePrimeJfMai = $codePrimeJfMai;
        return $this;
    }
}
