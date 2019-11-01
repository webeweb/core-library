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
 * Interessement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatInteressementTrait {

    /**
     * Interessement.
     *
     * @var float
     */
    private $interessement;

    /**
     * Get the interessement.
     *
     * @return float Returns the interessement.
     */
    public function getInteressement() {
        return $this->interessement;
    }

    /**
     * Set the interessement.
     *
     * @param float $interessement The interessement.
     */
    public function setInteressement($interessement) {
        $this->interessement = $interessement;
        return $this;
    }
}
