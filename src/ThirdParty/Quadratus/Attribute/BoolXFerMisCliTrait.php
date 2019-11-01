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
 * X fer mis cli trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerMisCliTrait {

    /**
     * X fer mis cli.
     *
     * @var bool
     */
    private $xFerMisCli;

    /**
     * Get the x fer mis cli.
     *
     * @return bool Returns the x fer mis cli.
     */
    public function getXFerMisCli() {
        return $this->xFerMisCli;
    }

    /**
     * Set the x fer mis cli.
     *
     * @param bool $xFerMisCli The x fer mis cli.
     */
    public function setXFerMisCli($xFerMisCli) {
        $this->xFerMisCli = $xFerMisCli;
        return $this;
    }
}
