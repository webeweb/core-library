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
 * Qualite satisfaction generale trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolQualiteSatisfactionGeneraleTrait {

    /**
     * Qualite satisfaction generale.
     *
     * @var bool
     */
    private $qualiteSatisfactionGenerale;

    /**
     * Get the qualite satisfaction generale.
     *
     * @return bool Returns the qualite satisfaction generale.
     */
    public function getQualiteSatisfactionGenerale() {
        return $this->qualiteSatisfactionGenerale;
    }

    /**
     * Set the qualite satisfaction generale.
     *
     * @param bool $qualiteSatisfactionGenerale The qualite satisfaction generale.
     */
    public function setQualiteSatisfactionGenerale($qualiteSatisfactionGenerale) {
        $this->qualiteSatisfactionGenerale = $qualiteSatisfactionGenerale;
        return $this;
    }
}
