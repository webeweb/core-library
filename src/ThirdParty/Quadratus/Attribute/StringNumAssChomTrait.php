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
 * Num ass chom trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumAssChomTrait {

    /**
     * Num ass chom.
     *
     * @var string
     */
    private $numAssChom;

    /**
     * Get the num ass chom.
     *
     * @return string Returns the num ass chom.
     */
    public function getNumAssChom() {
        return $this->numAssChom;
    }

    /**
     * Set the num ass chom.
     *
     * @param string $numAssChom The num ass chom.
     */
    public function setNumAssChom($numAssChom) {
        $this->numAssChom = $numAssChom;
        return $this;
    }
}
