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
 * Periode affectation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPeriodeAffectationTrait {

    /**
     * Periode affectation.
     *
     * @var string
     */
    private $periodeAffectation;

    /**
     * Get the periode affectation.
     *
     * @return string Returns the periode affectation.
     */
    public function getPeriodeAffectation() {
        return $this->periodeAffectation;
    }

    /**
     * Set the periode affectation.
     *
     * @param string $periodeAffectation The periode affectation.
     */
    public function setPeriodeAffectation($periodeAffectation) {
        $this->periodeAffectation = $periodeAffectation;
        return $this;
    }
}
