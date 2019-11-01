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
 * Avenant signe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAvenantSigneTrait {

    /**
     * Avenant signe.
     *
     * @var bool
     */
    private $avenantSigne;

    /**
     * Get the avenant signe.
     *
     * @return bool Returns the avenant signe.
     */
    public function getAvenantSigne() {
        return $this->avenantSigne;
    }

    /**
     * Set the avenant signe.
     *
     * @param bool $avenantSigne The avenant signe.
     */
    public function setAvenantSigne($avenantSigne) {
        $this->avenantSigne = $avenantSigne;
        return $this;
    }
}
