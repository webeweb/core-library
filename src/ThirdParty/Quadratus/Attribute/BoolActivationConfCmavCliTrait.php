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
 * Activation conf cmav cli trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolActivationConfCmavCliTrait {

    /**
     * Activation conf cmav cli.
     *
     * @var bool
     */
    private $activationConfCmavCli;

    /**
     * Get the activation conf cmav cli.
     *
     * @return bool Returns the activation conf cmav cli.
     */
    public function getActivationConfCmavCli() {
        return $this->activationConfCmavCli;
    }

    /**
     * Set the activation conf cmav cli.
     *
     * @param bool $activationConfCmavCli The activation conf cmav cli.
     */
    public function setActivationConfCmavCli($activationConfCmavCli) {
        $this->activationConfCmavCli = $activationConfCmavCli;
        return $this;
    }
}
