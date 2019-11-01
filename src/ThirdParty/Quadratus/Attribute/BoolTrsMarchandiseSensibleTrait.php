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
 * Trs marchandise sensible trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTrsMarchandiseSensibleTrait {

    /**
     * Trs marchandise sensible.
     *
     * @var bool
     */
    private $trsMarchandiseSensible;

    /**
     * Get the trs marchandise sensible.
     *
     * @return bool Returns the trs marchandise sensible.
     */
    public function getTrsMarchandiseSensible() {
        return $this->trsMarchandiseSensible;
    }

    /**
     * Set the trs marchandise sensible.
     *
     * @param bool $trsMarchandiseSensible The trs marchandise sensible.
     */
    public function setTrsMarchandiseSensible($trsMarchandiseSensible) {
        $this->trsMarchandiseSensible = $trsMarchandiseSensible;
        return $this;
    }
}
