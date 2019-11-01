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
 * X fer sui cli trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerSuiCliTrait {

    /**
     * X fer sui cli.
     *
     * @var bool
     */
    private $xFerSuiCli;

    /**
     * Get the x fer sui cli.
     *
     * @return bool Returns the x fer sui cli.
     */
    public function getXFerSuiCli() {
        return $this->xFerSuiCli;
    }

    /**
     * Set the x fer sui cli.
     *
     * @param bool $xFerSuiCli The x fer sui cli.
     */
    public function setXFerSuiCli($xFerSuiCli) {
        $this->xFerSuiCli = $xFerSuiCli;
        return $this;
    }
}
