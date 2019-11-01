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
 * Activation lst restri frn trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntActivationLstRestriFrnTrait {

    /**
     * Activation lst restri frn.
     *
     * @var int
     */
    private $activationLstRestriFrn;

    /**
     * Get the activation lst restri frn.
     *
     * @return int Returns the activation lst restri frn.
     */
    public function getActivationLstRestriFrn() {
        return $this->activationLstRestriFrn;
    }

    /**
     * Set the activation lst restri frn.
     *
     * @param int $activationLstRestriFrn The activation lst restri frn.
     */
    public function setActivationLstRestriFrn($activationLstRestriFrn) {
        $this->activationLstRestriFrn = $activationLstRestriFrn;
        return $this;
    }
}
