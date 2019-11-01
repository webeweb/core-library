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
 * X fer pre fact cli trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerPreFactCliTrait {

    /**
     * X fer pre fact cli.
     *
     * @var bool
     */
    private $xFerPreFactCli;

    /**
     * Get the x fer pre fact cli.
     *
     * @return bool Returns the x fer pre fact cli.
     */
    public function getXFerPreFactCli() {
        return $this->xFerPreFactCli;
    }

    /**
     * Set the x fer pre fact cli.
     *
     * @param bool $xFerPreFactCli The x fer pre fact cli.
     */
    public function setXFerPreFactCli($xFerPreFactCli) {
        $this->xFerPreFactCli = $xFerPreFactCli;
        return $this;
    }
}
