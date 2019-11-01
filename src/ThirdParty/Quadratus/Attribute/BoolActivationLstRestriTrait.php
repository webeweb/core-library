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
 * Activation lst restri trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolActivationLstRestriTrait {

    /**
     * Activation lst restri.
     *
     * @var bool
     */
    private $activationLstRestri;

    /**
     * Get the activation lst restri.
     *
     * @return bool Returns the activation lst restri.
     */
    public function getActivationLstRestri() {
        return $this->activationLstRestri;
    }

    /**
     * Set the activation lst restri.
     *
     * @param bool $activationLstRestri The activation lst restri.
     */
    public function setActivationLstRestri($activationLstRestri) {
        $this->activationLstRestri = $activationLstRestri;
        return $this;
    }
}
