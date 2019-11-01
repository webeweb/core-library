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
 * X fer cpta cli trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerCptaCliTrait {

    /**
     * X fer cpta cli.
     *
     * @var bool
     */
    private $xFerCptaCli;

    /**
     * Get the x fer cpta cli.
     *
     * @return bool Returns the x fer cpta cli.
     */
    public function getXFerCptaCli() {
        return $this->xFerCptaCli;
    }

    /**
     * Set the x fer cpta cli.
     *
     * @param bool $xFerCptaCli The x fer cpta cli.
     */
    public function setXFerCptaCli($xFerCptaCli) {
        $this->xFerCptaCli = $xFerCptaCli;
        return $this;
    }
}
