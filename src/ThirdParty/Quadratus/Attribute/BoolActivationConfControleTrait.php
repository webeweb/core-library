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
 * Activation conf controle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolActivationConfControleTrait {

    /**
     * Activation conf controle.
     *
     * @var bool
     */
    private $activationConfControle;

    /**
     * Get the activation conf controle.
     *
     * @return bool Returns the activation conf controle.
     */
    public function getActivationConfControle() {
        return $this->activationConfControle;
    }

    /**
     * Set the activation conf controle.
     *
     * @param bool $activationConfControle The activation conf controle.
     */
    public function setActivationConfControle($activationConfControle) {
        $this->activationConfControle = $activationConfControle;
        return $this;
    }
}
