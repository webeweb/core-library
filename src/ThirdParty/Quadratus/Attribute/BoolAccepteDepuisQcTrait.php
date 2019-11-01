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
 * Accepte depuis qc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAccepteDepuisQcTrait {

    /**
     * Accepte depuis qc.
     *
     * @var bool
     */
    private $accepteDepuisQc;

    /**
     * Get the accepte depuis qc.
     *
     * @return bool Returns the accepte depuis qc.
     */
    public function getAccepteDepuisQc() {
        return $this->accepteDepuisQc;
    }

    /**
     * Set the accepte depuis qc.
     *
     * @param bool $accepteDepuisQc The accepte depuis qc.
     */
    public function setAccepteDepuisQc($accepteDepuisQc) {
        $this->accepteDepuisQc = $accepteDepuisQc;
        return $this;
    }
}
