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
 * Prud type dadsu derogatoire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPrudTypeDadsuDerogatoireTrait {

    /**
     * Prud type dadsu derogatoire.
     *
     * @var string
     */
    private $prudTypeDadsuDerogatoire;

    /**
     * Get the prud type dadsu derogatoire.
     *
     * @return string Returns the prud type dadsu derogatoire.
     */
    public function getPrudTypeDadsuDerogatoire() {
        return $this->prudTypeDadsuDerogatoire;
    }

    /**
     * Set the prud type dadsu derogatoire.
     *
     * @param string $prudTypeDadsuDerogatoire The prud type dadsu derogatoire.
     */
    public function setPrudTypeDadsuDerogatoire($prudTypeDadsuDerogatoire) {
        $this->prudTypeDadsuDerogatoire = $prudTypeDadsuDerogatoire;
        return $this;
    }
}
