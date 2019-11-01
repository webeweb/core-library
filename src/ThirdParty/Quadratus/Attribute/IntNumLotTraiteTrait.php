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
 * Num lot traite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumLotTraiteTrait {

    /**
     * Num lot traite.
     *
     * @var int
     */
    private $numLotTraite;

    /**
     * Get the num lot traite.
     *
     * @return int Returns the num lot traite.
     */
    public function getNumLotTraite() {
        return $this->numLotTraite;
    }

    /**
     * Set the num lot traite.
     *
     * @param int $numLotTraite The num lot traite.
     */
    public function setNumLotTraite($numLotTraite) {
        $this->numLotTraite = $numLotTraite;
        return $this;
    }
}
