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
 * X fer tps cli trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerTpsCliTrait {

    /**
     * X fer tps cli.
     *
     * @var bool
     */
    private $xFerTpsCli;

    /**
     * Get the x fer tps cli.
     *
     * @return bool Returns the x fer tps cli.
     */
    public function getXFerTpsCli() {
        return $this->xFerTpsCli;
    }

    /**
     * Set the x fer tps cli.
     *
     * @param bool $xFerTpsCli The x fer tps cli.
     */
    public function setXFerTpsCli($xFerTpsCli) {
        $this->xFerTpsCli = $xFerTpsCli;
        return $this;
    }
}
