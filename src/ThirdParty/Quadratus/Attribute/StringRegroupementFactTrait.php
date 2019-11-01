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
 * Regroupement fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRegroupementFactTrait {

    /**
     * Regroupement fact.
     *
     * @var string
     */
    private $regroupementFact;

    /**
     * Get the regroupement fact.
     *
     * @return string Returns the regroupement fact.
     */
    public function getRegroupementFact() {
        return $this->regroupementFact;
    }

    /**
     * Set the regroupement fact.
     *
     * @param string $regroupementFact The regroupement fact.
     */
    public function setRegroupementFact($regroupementFact) {
        $this->regroupementFact = $regroupementFact;
        return $this;
    }
}
