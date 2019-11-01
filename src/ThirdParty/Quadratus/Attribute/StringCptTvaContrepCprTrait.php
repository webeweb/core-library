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
 * Cpt tva contrep cpr trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCptTvaContrepCprTrait {

    /**
     * Cpt tva contrep cpr.
     *
     * @var string
     */
    private $cptTvaContrepCpr;

    /**
     * Get the cpt tva contrep cpr.
     *
     * @return string Returns the cpt tva contrep cpr.
     */
    public function getCptTvaContrepCpr() {
        return $this->cptTvaContrepCpr;
    }

    /**
     * Set the cpt tva contrep cpr.
     *
     * @param string $cptTvaContrepCpr The cpt tva contrep cpr.
     */
    public function setCptTvaContrepCpr($cptTvaContrepCpr) {
        $this->cptTvaContrepCpr = $cptTvaContrepCpr;
        return $this;
    }
}
