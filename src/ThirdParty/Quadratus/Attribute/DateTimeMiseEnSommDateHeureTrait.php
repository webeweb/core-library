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

use DateTime;

/**
 * Mise en somm date heure trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeMiseEnSommDateHeureTrait {

    /**
     * Mise en somm date heure.
     *
     * @var DateTime|null
     */
    private $miseEnSommDateHeure;

    /**
     * Get the mise en somm date heure.
     *
     * @return DateTime|null Returns the mise en somm date heure.
     */
    public function getMiseEnSommDateHeure() {
        return $this->miseEnSommDateHeure;
    }

    /**
     * Set the mise en somm date heure.
     *
     * @param DateTime|null $miseEnSommDateHeure The mise en somm date heure.
     */
    public function setMiseEnSommDateHeure(DateTime $miseEnSommDateHeure = null) {
        $this->miseEnSommDateHeure = $miseEnSommDateHeure;
        return $this;
    }
}
