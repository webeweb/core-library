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
 * Telephone trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTelephoneTrait {

    /**
     * Telephone.
     *
     * @var string
     */
    private $telephone;

    /**
     * Get the telephone.
     *
     * @return string Returns the telephone.
     */
    public function getTelephone() {
        return $this->telephone;
    }

    /**
     * Set the telephone.
     *
     * @param string $telephone The telephone.
     */
    public function setTelephone($telephone) {
        $this->telephone = $telephone;
        return $this;
    }
}
