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
 * Societe mere trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSocieteMereTrait {

    /**
     * Societe mere.
     *
     * @var bool
     */
    private $societeMere;

    /**
     * Get the societe mere.
     *
     * @return bool Returns the societe mere.
     */
    public function getSocieteMere() {
        return $this->societeMere;
    }

    /**
     * Set the societe mere.
     *
     * @param bool $societeMere The societe mere.
     */
    public function setSocieteMere($societeMere) {
        $this->societeMere = $societeMere;
        return $this;
    }
}
