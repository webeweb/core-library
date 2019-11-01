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
 * Exo h mnt reduc cot sal tot trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatExoHMntReducCotSalTotTrait {

    /**
     * Exo h mnt reduc cot sal tot.
     *
     * @var float
     */
    private $exoHMntReducCotSalTot;

    /**
     * Get the exo h mnt reduc cot sal tot.
     *
     * @return float Returns the exo h mnt reduc cot sal tot.
     */
    public function getExoHMntReducCotSalTot() {
        return $this->exoHMntReducCotSalTot;
    }

    /**
     * Set the exo h mnt reduc cot sal tot.
     *
     * @param float $exoHMntReducCotSalTot The exo h mnt reduc cot sal tot.
     */
    public function setExoHMntReducCotSalTot($exoHMntReducCotSalTot) {
        $this->exoHMntReducCotSalTot = $exoHMntReducCotSalTot;
        return $this;
    }
}
