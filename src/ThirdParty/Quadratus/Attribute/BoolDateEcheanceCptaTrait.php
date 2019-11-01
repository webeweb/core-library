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
 * Date echeance cpta trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDateEcheanceCptaTrait {

    /**
     * Date echeance cpta.
     *
     * @var bool
     */
    private $dateEcheanceCpta;

    /**
     * Get the date echeance cpta.
     *
     * @return bool Returns the date echeance cpta.
     */
    public function getDateEcheanceCpta() {
        return $this->dateEcheanceCpta;
    }

    /**
     * Set the date echeance cpta.
     *
     * @param bool $dateEcheanceCpta The date echeance cpta.
     */
    public function setDateEcheanceCpta($dateEcheanceCpta) {
        $this->dateEcheanceCpta = $dateEcheanceCpta;
        return $this;
    }
}
