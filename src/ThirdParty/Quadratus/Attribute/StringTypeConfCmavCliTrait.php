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
 * Type conf cmav cli trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeConfCmavCliTrait {

    /**
     * Type conf cmav cli.
     *
     * @var string
     */
    private $typeConfCmavCli;

    /**
     * Get the type conf cmav cli.
     *
     * @return string Returns the type conf cmav cli.
     */
    public function getTypeConfCmavCli() {
        return $this->typeConfCmavCli;
    }

    /**
     * Set the type conf cmav cli.
     *
     * @param string $typeConfCmavCli The type conf cmav cli.
     */
    public function setTypeConfCmavCli($typeConfCmavCli) {
        $this->typeConfCmavCli = $typeConfCmavCli;
        return $this;
    }
}
