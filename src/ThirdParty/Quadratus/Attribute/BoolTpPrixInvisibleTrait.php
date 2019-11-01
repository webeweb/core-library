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
 * Tp prix invisible trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTpPrixInvisibleTrait {

    /**
     * Tp prix invisible.
     *
     * @var bool
     */
    private $tpPrixInvisible;

    /**
     * Get the tp prix invisible.
     *
     * @return bool Returns the tp prix invisible.
     */
    public function getTpPrixInvisible() {
        return $this->tpPrixInvisible;
    }

    /**
     * Set the tp prix invisible.
     *
     * @param bool $tpPrixInvisible The tp prix invisible.
     */
    public function setTpPrixInvisible($tpPrixInvisible) {
        $this->tpPrixInvisible = $tpPrixInvisible;
        return $this;
    }
}
