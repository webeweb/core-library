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
 * Mode calcul repart trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringModeCalculRepartTrait {

    /**
     * Mode calcul repart.
     *
     * @var string
     */
    private $modeCalculRepart;

    /**
     * Get the mode calcul repart.
     *
     * @return string Returns the mode calcul repart.
     */
    public function getModeCalculRepart() {
        return $this->modeCalculRepart;
    }

    /**
     * Set the mode calcul repart.
     *
     * @param string $modeCalculRepart The mode calcul repart.
     */
    public function setModeCalculRepart($modeCalculRepart) {
        $this->modeCalculRepart = $modeCalculRepart;
        return $this;
    }
}
