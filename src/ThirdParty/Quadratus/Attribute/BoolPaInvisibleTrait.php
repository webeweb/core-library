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
 * Pa invisible trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPaInvisibleTrait {

    /**
     * Pa invisible.
     *
     * @var bool
     */
    private $paInvisible;

    /**
     * Get the pa invisible.
     *
     * @return bool Returns the pa invisible.
     */
    public function getPaInvisible() {
        return $this->paInvisible;
    }

    /**
     * Set the pa invisible.
     *
     * @param bool $paInvisible The pa invisible.
     */
    public function setPaInvisible($paInvisible) {
        $this->paInvisible = $paInvisible;
        return $this;
    }
}
