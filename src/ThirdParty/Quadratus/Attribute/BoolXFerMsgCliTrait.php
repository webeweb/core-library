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
 * X fer msg cli trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerMsgCliTrait {

    /**
     * X fer msg cli.
     *
     * @var bool
     */
    private $xFerMsgCli;

    /**
     * Get the x fer msg cli.
     *
     * @return bool Returns the x fer msg cli.
     */
    public function getXFerMsgCli() {
        return $this->xFerMsgCli;
    }

    /**
     * Set the x fer msg cli.
     *
     * @param bool $xFerMsgCli The x fer msg cli.
     */
    public function setXFerMsgCli($xFerMsgCli) {
        $this->xFerMsgCli = $xFerMsgCli;
        return $this;
    }
}
