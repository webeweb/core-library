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
 * Participation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatParticipationTrait {

    /**
     * Participation.
     *
     * @var float
     */
    private $participation;

    /**
     * Get the participation.
     *
     * @return float Returns the participation.
     */
    public function getParticipation() {
        return $this->participation;
    }

    /**
     * Set the participation.
     *
     * @param float $participation The participation.
     */
    public function setParticipation($participation) {
        $this->participation = $participation;
        return $this;
    }
}
