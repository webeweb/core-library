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
 * Exo h mnt deduc cot pat tot trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatExoHMntDeducCotPatTotTrait {

    /**
     * Exo h mnt deduc cot pat tot.
     *
     * @var float
     */
    private $exoHMntDeducCotPatTot;

    /**
     * Get the exo h mnt deduc cot pat tot.
     *
     * @return float Returns the exo h mnt deduc cot pat tot.
     */
    public function getExoHMntDeducCotPatTot() {
        return $this->exoHMntDeducCotPatTot;
    }

    /**
     * Set the exo h mnt deduc cot pat tot.
     *
     * @param float $exoHMntDeducCotPatTot The exo h mnt deduc cot pat tot.
     */
    public function setExoHMntDeducCotPatTot($exoHMntDeducCotPatTot) {
        $this->exoHMntDeducCotPatTot = $exoHMntDeducCotPatTot;
        return $this;
    }
}
