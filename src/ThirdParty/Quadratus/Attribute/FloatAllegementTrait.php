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
 * Allegement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAllegementTrait {

    /**
     * Allegement.
     *
     * @var float
     */
    private $allegement;

    /**
     * Get the allegement.
     *
     * @return float Returns the allegement.
     */
    public function getAllegement() {
        return $this->allegement;
    }

    /**
     * Set the allegement.
     *
     * @param float $allegement The allegement.
     */
    public function setAllegement($allegement) {
        $this->allegement = $allegement;
        return $this;
    }
}
