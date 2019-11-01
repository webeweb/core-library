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
 * X fer cli trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerCliTrait {

    /**
     * X fer cli.
     *
     * @var bool
     */
    private $xFerCli;

    /**
     * Get the x fer cli.
     *
     * @return bool Returns the x fer cli.
     */
    public function getXFerCli() {
        return $this->xFerCli;
    }

    /**
     * Set the x fer cli.
     *
     * @param bool $xFerCli The x fer cli.
     */
    public function setXFerCli($xFerCli) {
        $this->xFerCli = $xFerCli;
        return $this;
    }
}
