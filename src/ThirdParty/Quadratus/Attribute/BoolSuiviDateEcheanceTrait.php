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
 * Suivi date echeance trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSuiviDateEcheanceTrait {

    /**
     * Suivi date echeance.
     *
     * @var bool
     */
    private $suiviDateEcheance;

    /**
     * Get the suivi date echeance.
     *
     * @return bool Returns the suivi date echeance.
     */
    public function getSuiviDateEcheance() {
        return $this->suiviDateEcheance;
    }

    /**
     * Set the suivi date echeance.
     *
     * @param bool $suiviDateEcheance The suivi date echeance.
     */
    public function setSuiviDateEcheance($suiviDateEcheance) {
        $this->suiviDateEcheance = $suiviDateEcheance;
        return $this;
    }
}
