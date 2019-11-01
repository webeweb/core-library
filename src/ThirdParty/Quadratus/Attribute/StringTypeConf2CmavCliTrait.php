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
 * Type conf2 cmav cli trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeConf2CmavCliTrait {

    /**
     * Type conf2 cmav cli.
     *
     * @var string
     */
    private $typeConf2CmavCli;

    /**
     * Get the type conf2 cmav cli.
     *
     * @return string Returns the type conf2 cmav cli.
     */
    public function getTypeConf2CmavCli() {
        return $this->typeConf2CmavCli;
    }

    /**
     * Set the type conf2 cmav cli.
     *
     * @param string $typeConf2CmavCli The type conf2 cmav cli.
     */
    public function setTypeConf2CmavCli($typeConf2CmavCli) {
        $this->typeConf2CmavCli = $typeConf2CmavCli;
        return $this;
    }
}
