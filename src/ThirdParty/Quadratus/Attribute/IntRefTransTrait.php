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
 * Ref trans trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntRefTransTrait {

    /**
     * Ref trans.
     *
     * @var int
     */
    private $refTrans;

    /**
     * Get the ref trans.
     *
     * @return int Returns the ref trans.
     */
    public function getRefTrans() {
        return $this->refTrans;
    }

    /**
     * Set the ref trans.
     *
     * @param int $refTrans The ref trans.
     */
    public function setRefTrans($refTrans) {
        $this->refTrans = $refTrans;
        return $this;
    }
}
