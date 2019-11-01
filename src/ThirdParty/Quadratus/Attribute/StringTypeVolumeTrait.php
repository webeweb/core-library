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
 * Type volume trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeVolumeTrait {

    /**
     * Type volume.
     *
     * @var string
     */
    private $typeVolume;

    /**
     * Get the type volume.
     *
     * @return string Returns the type volume.
     */
    public function getTypeVolume() {
        return $this->typeVolume;
    }

    /**
     * Set the type volume.
     *
     * @param string $typeVolume The type volume.
     */
    public function setTypeVolume($typeVolume) {
        $this->typeVolume = $typeVolume;
        return $this;
    }
}
