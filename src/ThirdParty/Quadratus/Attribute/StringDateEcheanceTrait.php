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
 * Date echeance trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDateEcheanceTrait {

    /**
     * Date echeance.
     *
     * @var string
     */
    private $dateEcheance;

    /**
     * Get the date echeance.
     *
     * @return string Returns the date echeance.
     */
    public function getDateEcheance() {
        return $this->dateEcheance;
    }

    /**
     * Set the date echeance.
     *
     * @param string $dateEcheance The date echeance.
     */
    public function setDateEcheance($dateEcheance) {
        $this->dateEcheance = $dateEcheance;
        return $this;
    }
}
