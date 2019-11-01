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
 * Gpec mnt exo csgcrds trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatGpecMntExoCsgcrdsTrait {

    /**
     * Gpec mnt exo csgcrds.
     *
     * @var float
     */
    private $gpecMntExoCsgcrds;

    /**
     * Get the gpec mnt exo csgcrds.
     *
     * @return float Returns the gpec mnt exo csgcrds.
     */
    public function getGpecMntExoCsgcrds() {
        return $this->gpecMntExoCsgcrds;
    }

    /**
     * Set the gpec mnt exo csgcrds.
     *
     * @param float $gpecMntExoCsgcrds The gpec mnt exo csgcrds.
     */
    public function setGpecMntExoCsgcrds($gpecMntExoCsgcrds) {
        $this->gpecMntExoCsgcrds = $gpecMntExoCsgcrds;
        return $this;
    }
}
