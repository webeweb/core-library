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
 * Accepte depuis qp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAccepteDepuisQpTrait {

    /**
     * Accepte depuis qp.
     *
     * @var bool
     */
    private $accepteDepuisQp;

    /**
     * Get the accepte depuis qp.
     *
     * @return bool Returns the accepte depuis qp.
     */
    public function getAccepteDepuisQp() {
        return $this->accepteDepuisQp;
    }

    /**
     * Set the accepte depuis qp.
     *
     * @param bool $accepteDepuisQp The accepte depuis qp.
     */
    public function setAccepteDepuisQp($accepteDepuisQp) {
        $this->accepteDepuisQp = $accepteDepuisQp;
        return $this;
    }
}
