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
 * Realise par fcq trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRealiseParFcqTrait {

    /**
     * Realise par fcq.
     *
     * @var bool
     */
    private $realiseParFcq;

    /**
     * Get the realise par fcq.
     *
     * @return bool Returns the realise par fcq.
     */
    public function getRealiseParFcq() {
        return $this->realiseParFcq;
    }

    /**
     * Set the realise par fcq.
     *
     * @param bool $realiseParFcq The realise par fcq.
     */
    public function setRealiseParFcq($realiseParFcq) {
        $this->realiseParFcq = $realiseParFcq;
        return $this;
    }
}
