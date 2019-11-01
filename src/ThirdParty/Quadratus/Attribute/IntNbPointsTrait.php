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
 * Nb points trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbPointsTrait {

    /**
     * Nb points.
     *
     * @var int
     */
    private $nbPoints;

    /**
     * Get the nb points.
     *
     * @return int Returns the nb points.
     */
    public function getNbPoints() {
        return $this->nbPoints;
    }

    /**
     * Set the nb points.
     *
     * @param int $nbPoints The nb points.
     */
    public function setNbPoints($nbPoints) {
        $this->nbPoints = $nbPoints;
        return $this;
    }
}
