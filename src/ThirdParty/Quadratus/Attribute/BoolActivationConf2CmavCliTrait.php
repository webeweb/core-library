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
 * Activation conf2 cmav cli trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolActivationConf2CmavCliTrait {

    /**
     * Activation conf2 cmav cli.
     *
     * @var bool
     */
    private $activationConf2CmavCli;

    /**
     * Get the activation conf2 cmav cli.
     *
     * @return bool Returns the activation conf2 cmav cli.
     */
    public function getActivationConf2CmavCli() {
        return $this->activationConf2CmavCli;
    }

    /**
     * Set the activation conf2 cmav cli.
     *
     * @param bool $activationConf2CmavCli The activation conf2 cmav cli.
     */
    public function setActivationConf2CmavCli($activationConf2CmavCli) {
        $this->activationConf2CmavCli = $activationConf2CmavCli;
        return $this;
    }
}
