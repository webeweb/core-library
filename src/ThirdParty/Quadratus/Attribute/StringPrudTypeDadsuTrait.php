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
 * Prud type dadsu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPrudTypeDadsuTrait {

    /**
     * Prud type dadsu.
     *
     * @var string
     */
    private $prudTypeDadsu;

    /**
     * Get the prud type dadsu.
     *
     * @return string Returns the prud type dadsu.
     */
    public function getPrudTypeDadsu() {
        return $this->prudTypeDadsu;
    }

    /**
     * Set the prud type dadsu.
     *
     * @param string $prudTypeDadsu The prud type dadsu.
     */
    public function setPrudTypeDadsu($prudTypeDadsu) {
        $this->prudTypeDadsu = $prudTypeDadsu;
        return $this;
    }
}
