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
 * Activation niveau3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolActivationNiveau3Trait {

    /**
     * Activation niveau3.
     *
     * @var bool
     */
    private $activationNiveau3;

    /**
     * Get the activation niveau3.
     *
     * @return bool Returns the activation niveau3.
     */
    public function getActivationNiveau3() {
        return $this->activationNiveau3;
    }

    /**
     * Set the activation niveau3.
     *
     * @param bool $activationNiveau3 The activation niveau3.
     */
    public function setActivationNiveau3($activationNiveau3) {
        $this->activationNiveau3 = $activationNiveau3;
        return $this;
    }
}
