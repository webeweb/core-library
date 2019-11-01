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
 * Flg an n2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFlgAnN2Trait {

    /**
     * Flg an n2.
     *
     * @var bool
     */
    private $flgAnN2;

    /**
     * Get the flg an n2.
     *
     * @return bool Returns the flg an n2.
     */
    public function getFlgAnN2() {
        return $this->flgAnN2;
    }

    /**
     * Set the flg an n2.
     *
     * @param bool $flgAnN2 The flg an n2.
     */
    public function setFlgAnN2($flgAnN2) {
        $this->flgAnN2 = $flgAnN2;
        return $this;
    }
}
