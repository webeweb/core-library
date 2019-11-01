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
 * Signe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSigneTrait {

    /**
     * Signe.
     *
     * @var bool
     */
    private $signe;

    /**
     * Get the signe.
     *
     * @return bool Returns the signe.
     */
    public function getSigne() {
        return $this->signe;
    }

    /**
     * Set the signe.
     *
     * @param bool $signe The signe.
     */
    public function setSigne($signe) {
        $this->signe = $signe;
        return $this;
    }
}
