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
 * Exclure chom cdd trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolExclureChomCddTrait {

    /**
     * Exclure chom cdd.
     *
     * @var bool
     */
    private $exclureChomCdd;

    /**
     * Get the exclure chom cdd.
     *
     * @return bool Returns the exclure chom cdd.
     */
    public function getExclureChomCdd() {
        return $this->exclureChomCdd;
    }

    /**
     * Set the exclure chom cdd.
     *
     * @param bool $exclureChomCdd The exclure chom cdd.
     */
    public function setExclureChomCdd($exclureChomCdd) {
        $this->exclureChomCdd = $exclureChomCdd;
        return $this;
    }
}
