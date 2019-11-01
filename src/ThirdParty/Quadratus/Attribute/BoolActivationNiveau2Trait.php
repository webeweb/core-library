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
 * Activation niveau2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolActivationNiveau2Trait {

    /**
     * Activation niveau2.
     *
     * @var bool
     */
    private $activationNiveau2;

    /**
     * Get the activation niveau2.
     *
     * @return bool Returns the activation niveau2.
     */
    public function getActivationNiveau2() {
        return $this->activationNiveau2;
    }

    /**
     * Set the activation niveau2.
     *
     * @param bool $activationNiveau2 The activation niveau2.
     */
    public function setActivationNiveau2($activationNiveau2) {
        $this->activationNiveau2 = $activationNiveau2;
        return $this;
    }
}
