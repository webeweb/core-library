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
 * Date debut reelle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateDebutReelleTrait {

    /**
     * Date debut reelle.
     *
     * @var DateTime|null
     */
    private $dateDebutReelle;

    /**
     * Get the date debut reelle.
     *
     * @return DateTime|null Returns the date debut reelle.
     */
    public function getDateDebutReelle() {
        return $this->dateDebutReelle;
    }

    /**
     * Set the date debut reelle.
     *
     * @param DateTime|null $dateDebutReelle The date debut reelle.
     */
    public function setDateDebutReelle(DateTime $dateDebutReelle = null) {
        $this->dateDebutReelle = $dateDebutReelle;
        return $this;
    }
}
