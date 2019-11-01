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
 * Allegement non proratise trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAllegementNonProratiseTrait {

    /**
     * Allegement non proratise.
     *
     * @var float
     */
    private $allegementNonProratise;

    /**
     * Get the allegement non proratise.
     *
     * @return float Returns the allegement non proratise.
     */
    public function getAllegementNonProratise() {
        return $this->allegementNonProratise;
    }

    /**
     * Set the allegement non proratise.
     *
     * @param float $allegementNonProratise The allegement non proratise.
     */
    public function setAllegementNonProratise($allegementNonProratise) {
        $this->allegementNonProratise = $allegementNonProratise;
        return $this;
    }
}
