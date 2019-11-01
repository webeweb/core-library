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
 * Liaison bu cpta trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolLiaisonBuCptaTrait {

    /**
     * Liaison bu cpta.
     *
     * @var bool
     */
    private $liaisonBuCpta;

    /**
     * Get the liaison bu cpta.
     *
     * @return bool Returns the liaison bu cpta.
     */
    public function getLiaisonBuCpta() {
        return $this->liaisonBuCpta;
    }

    /**
     * Set the liaison bu cpta.
     *
     * @param bool $liaisonBuCpta The liaison bu cpta.
     */
    public function setLiaisonBuCpta($liaisonBuCpta) {
        $this->liaisonBuCpta = $liaisonBuCpta;
        return $this;
    }
}
