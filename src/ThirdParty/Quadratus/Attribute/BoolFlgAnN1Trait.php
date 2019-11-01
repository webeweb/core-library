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
 * Flg an n1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFlgAnN1Trait {

    /**
     * Flg an n1.
     *
     * @var bool
     */
    private $flgAnN1;

    /**
     * Get the flg an n1.
     *
     * @return bool Returns the flg an n1.
     */
    public function getFlgAnN1() {
        return $this->flgAnN1;
    }

    /**
     * Set the flg an n1.
     *
     * @param bool $flgAnN1 The flg an n1.
     */
    public function setFlgAnN1($flgAnN1) {
        $this->flgAnN1 = $flgAnN1;
        return $this;
    }
}
