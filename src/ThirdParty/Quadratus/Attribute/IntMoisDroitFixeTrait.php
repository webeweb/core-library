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
 * Mois droit fixe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntMoisDroitFixeTrait {

    /**
     * Mois droit fixe.
     *
     * @var int
     */
    private $moisDroitFixe;

    /**
     * Get the mois droit fixe.
     *
     * @return int Returns the mois droit fixe.
     */
    public function getMoisDroitFixe() {
        return $this->moisDroitFixe;
    }

    /**
     * Set the mois droit fixe.
     *
     * @param int $moisDroitFixe The mois droit fixe.
     */
    public function setMoisDroitFixe($moisDroitFixe) {
        $this->moisDroitFixe = $moisDroitFixe;
        return $this;
    }
}
