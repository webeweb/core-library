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
 * Nce conges spectacles trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNceCongesSpectaclesTrait {

    /**
     * Nce conges spectacles.
     *
     * @var int
     */
    private $nceCongesSpectacles;

    /**
     * Get the nce conges spectacles.
     *
     * @return int Returns the nce conges spectacles.
     */
    public function getNceCongesSpectacles() {
        return $this->nceCongesSpectacles;
    }

    /**
     * Set the nce conges spectacles.
     *
     * @param int $nceCongesSpectacles The nce conges spectacles.
     */
    public function setNceCongesSpectacles($nceCongesSpectacles) {
        $this->nceCongesSpectacles = $nceCongesSpectacles;
        return $this;
    }
}
