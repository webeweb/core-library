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
 * X fer msg hist cli trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerMsgHistCliTrait {

    /**
     * X fer msg hist cli.
     *
     * @var bool
     */
    private $xFerMsgHistCli;

    /**
     * Get the x fer msg hist cli.
     *
     * @return bool Returns the x fer msg hist cli.
     */
    public function getXFerMsgHistCli() {
        return $this->xFerMsgHistCli;
    }

    /**
     * Set the x fer msg hist cli.
     *
     * @param bool $xFerMsgHistCli The x fer msg hist cli.
     */
    public function setXFerMsgHistCli($xFerMsgHistCli) {
        $this->xFerMsgHistCli = $xFerMsgHistCli;
        return $this;
    }
}
