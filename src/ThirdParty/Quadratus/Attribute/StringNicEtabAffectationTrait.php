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
 * Nic etab affectation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNicEtabAffectationTrait {

    /**
     * Nic etab affectation.
     *
     * @var string
     */
    private $nicEtabAffectation;

    /**
     * Get the nic etab affectation.
     *
     * @return string Returns the nic etab affectation.
     */
    public function getNicEtabAffectation() {
        return $this->nicEtabAffectation;
    }

    /**
     * Set the nic etab affectation.
     *
     * @param string $nicEtabAffectation The nic etab affectation.
     */
    public function setNicEtabAffectation($nicEtabAffectation) {
        $this->nicEtabAffectation = $nicEtabAffectation;
        return $this;
    }
}
