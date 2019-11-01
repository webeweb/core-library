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
 * Tds somme exo taxe sal trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTdsSommeExoTaxeSalTrait {

    /**
     * Tds somme exo taxe sal.
     *
     * @var float
     */
    private $tdsSommeExoTaxeSal;

    /**
     * Get the tds somme exo taxe sal.
     *
     * @return float Returns the tds somme exo taxe sal.
     */
    public function getTdsSommeExoTaxeSal() {
        return $this->tdsSommeExoTaxeSal;
    }

    /**
     * Set the tds somme exo taxe sal.
     *
     * @param float $tdsSommeExoTaxeSal The tds somme exo taxe sal.
     */
    public function setTdsSommeExoTaxeSal($tdsSommeExoTaxeSal) {
        $this->tdsSommeExoTaxeSal = $tdsSommeExoTaxeSal;
        return $this;
    }
}
