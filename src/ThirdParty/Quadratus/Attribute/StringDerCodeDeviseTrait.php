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
 * Der code devise trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDerCodeDeviseTrait {

    /**
     * Der code devise.
     *
     * @var string
     */
    private $derCodeDevise;

    /**
     * Get the der code devise.
     *
     * @return string Returns the der code devise.
     */
    public function getDerCodeDevise() {
        return $this->derCodeDevise;
    }

    /**
     * Set the der code devise.
     *
     * @param string $derCodeDevise The der code devise.
     */
    public function setDerCodeDevise($derCodeDevise) {
        $this->derCodeDevise = $derCodeDevise;
        return $this;
    }
}
