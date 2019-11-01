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
 * Liaison compta win trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolLiaisonComptaWinTrait {

    /**
     * Liaison compta win.
     *
     * @var bool
     */
    private $liaisonComptaWin;

    /**
     * Get the liaison compta win.
     *
     * @return bool Returns the liaison compta win.
     */
    public function getLiaisonComptaWin() {
        return $this->liaisonComptaWin;
    }

    /**
     * Set the liaison compta win.
     *
     * @param bool $liaisonComptaWin The liaison compta win.
     */
    public function setLiaisonComptaWin($liaisonComptaWin) {
        $this->liaisonComptaWin = $liaisonComptaWin;
        return $this;
    }
}
