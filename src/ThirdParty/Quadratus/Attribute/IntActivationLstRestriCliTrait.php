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
 * Activation lst restri cli trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntActivationLstRestriCliTrait {

    /**
     * Activation lst restri cli.
     *
     * @var int
     */
    private $activationLstRestriCli;

    /**
     * Get the activation lst restri cli.
     *
     * @return int Returns the activation lst restri cli.
     */
    public function getActivationLstRestriCli() {
        return $this->activationLstRestriCli;
    }

    /**
     * Set the activation lst restri cli.
     *
     * @param int $activationLstRestriCli The activation lst restri cli.
     */
    public function setActivationLstRestriCli($activationLstRestriCli) {
        $this->activationLstRestriCli = $activationLstRestriCli;
        return $this;
    }
}
