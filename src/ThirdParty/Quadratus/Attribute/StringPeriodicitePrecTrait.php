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
 * Periodicite prec trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPeriodicitePrecTrait {

    /**
     * Periodicite prec.
     *
     * @var string
     */
    private $periodicitePrec;

    /**
     * Get the periodicite prec.
     *
     * @return string Returns the periodicite prec.
     */
    public function getPeriodicitePrec() {
        return $this->periodicitePrec;
    }

    /**
     * Set the periodicite prec.
     *
     * @param string $periodicitePrec The periodicite prec.
     */
    public function setPeriodicitePrec($periodicitePrec) {
        $this->periodicitePrec = $periodicitePrec;
        return $this;
    }
}
