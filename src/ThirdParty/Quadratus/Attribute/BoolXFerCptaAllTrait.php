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
 * X fer cpta all trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerCptaAllTrait {

    /**
     * X fer cpta all.
     *
     * @var bool
     */
    private $xFerCptaAll;

    /**
     * Get the x fer cpta all.
     *
     * @return bool Returns the x fer cpta all.
     */
    public function getXFerCptaAll() {
        return $this->xFerCptaAll;
    }

    /**
     * Set the x fer cpta all.
     *
     * @param bool $xFerCptaAll The x fer cpta all.
     */
    public function setXFerCptaAll($xFerCptaAll) {
        $this->xFerCptaAll = $xFerCptaAll;
        return $this;
    }
}
