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
trait IntEffectifTrait {

    /**
     * Effectif.
     *
     * @var int
     */
    private $effectif;

    /**
     * Get the effectif.
     *
     * @return int Returns the effectif.
     */
    public function getEffectif() {
        return $this->effectif;
    }

    /**
     * Set the effectif.
     *
     * @param int $effectif The effectif.
     */
    public function setEffectif($effectif) {
        $this->effectif = $effectif;
        return $this;
    }
}
