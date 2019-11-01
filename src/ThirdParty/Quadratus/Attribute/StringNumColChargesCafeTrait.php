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
 * Num col charges cafe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumColChargesCafeTrait {

    /**
     * Num col charges cafe.
     *
     * @var string
     */
    private $numColChargesCafe;

    /**
     * Get the num col charges cafe.
     *
     * @return string Returns the num col charges cafe.
     */
    public function getNumColChargesCafe() {
        return $this->numColChargesCafe;
    }

    /**
     * Set the num col charges cafe.
     *
     * @param string $numColChargesCafe The num col charges cafe.
     */
    public function setNumColChargesCafe($numColChargesCafe) {
        $this->numColChargesCafe = $numColChargesCafe;
        return $this;
    }
}
