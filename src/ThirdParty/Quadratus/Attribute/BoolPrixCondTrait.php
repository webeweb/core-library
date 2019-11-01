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
 * Prix cond trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPrixCondTrait {

    /**
     * Prix cond.
     *
     * @var bool
     */
    private $prixCond;

    /**
     * Get the prix cond.
     *
     * @return bool Returns the prix cond.
     */
    public function getPrixCond() {
        return $this->prixCond;
    }

    /**
     * Set the prix cond.
     *
     * @param bool $prixCond The prix cond.
     */
    public function setPrixCond($prixCond) {
        $this->prixCond = $prixCond;
        return $this;
    }
}
