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
 * Volume trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatVolumeTrait {

    /**
     * Volume.
     *
     * @var float
     */
    private $volume;

    /**
     * Get the volume.
     *
     * @return float Returns the volume.
     */
    public function getVolume() {
        return $this->volume;
    }

    /**
     * Set the volume.
     *
     * @param float $volume The volume.
     */
    public function setVolume($volume) {
        $this->volume = $volume;
        return $this;
    }
}
