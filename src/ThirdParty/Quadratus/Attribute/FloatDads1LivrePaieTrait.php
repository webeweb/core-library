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
 * Dads1 livre paie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDads1LivrePaieTrait {

    /**
     * Dads1 livre paie.
     *
     * @var float
     */
    private $dads1LivrePaie;

    /**
     * Get the dads1 livre paie.
     *
     * @return float Returns the dads1 livre paie.
     */
    public function getDads1LivrePaie() {
        return $this->dads1LivrePaie;
    }

    /**
     * Set the dads1 livre paie.
     *
     * @param float $dads1LivrePaie The dads1 livre paie.
     */
    public function setDads1LivrePaie($dads1LivrePaie) {
        $this->dads1LivrePaie = $dads1LivrePaie;
        return $this;
    }
}
