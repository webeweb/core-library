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
 * Effectif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEffectifTrait {

    /**
     * Effectif.
     *
     * @var bool
     */
    private $effectif;

    /**
     * Get the effectif.
     *
     * @return bool Returns the effectif.
     */
    public function getEffectif() {
        return $this->effectif;
    }

    /**
     * Set the effectif.
     *
     * @param bool $effectif The effectif.
     */
    public function setEffectif($effectif) {
        $this->effectif = $effectif;
        return $this;
    }
}
