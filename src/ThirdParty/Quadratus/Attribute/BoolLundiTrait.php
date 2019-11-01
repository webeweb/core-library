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
 * Lundi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolLundiTrait {

    /**
     * Lundi.
     *
     * @var bool
     */
    private $lundi;

    /**
     * Get the lundi.
     *
     * @return bool Returns the lundi.
     */
    public function getLundi() {
        return $this->lundi;
    }

    /**
     * Set the lundi.
     *
     * @param bool $lundi The lundi.
     */
    public function setLundi($lundi) {
        $this->lundi = $lundi;
        return $this;
    }
}
