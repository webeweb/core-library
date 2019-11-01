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
 * Date fin reelle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateFinReelleTrait {

    /**
     * Date fin reelle.
     *
     * @var DateTime|null
     */
    private $dateFinReelle;

    /**
     * Get the date fin reelle.
     *
     * @return DateTime|null Returns the date fin reelle.
     */
    public function getDateFinReelle() {
        return $this->dateFinReelle;
    }

    /**
     * Set the date fin reelle.
     *
     * @param DateTime|null $dateFinReelle The date fin reelle.
     */
    public function setDateFinReelle(DateTime $dateFinReelle = null) {
        $this->dateFinReelle = $dateFinReelle;
        return $this;
    }
}
