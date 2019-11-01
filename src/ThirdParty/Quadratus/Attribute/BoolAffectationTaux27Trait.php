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
 * Affectation taux27 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAffectationTaux27Trait {

    /**
     * Affectation taux27.
     *
     * @var bool
     */
    private $affectationTaux27;

    /**
     * Get the affectation taux27.
     *
     * @return bool Returns the affectation taux27.
     */
    public function getAffectationTaux27() {
        return $this->affectationTaux27;
    }

    /**
     * Set the affectation taux27.
     *
     * @param bool $affectationTaux27 The affectation taux27.
     */
    public function setAffectationTaux27($affectationTaux27) {
        $this->affectationTaux27 = $affectationTaux27;
        return $this;
    }
}
