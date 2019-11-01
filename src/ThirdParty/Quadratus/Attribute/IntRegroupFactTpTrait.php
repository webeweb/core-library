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
 * Regroup fact tp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntRegroupFactTpTrait {

    /**
     * Regroup fact tp.
     *
     * @var int
     */
    private $regroupFactTp;

    /**
     * Get the regroup fact tp.
     *
     * @return int Returns the regroup fact tp.
     */
    public function getRegroupFactTp() {
        return $this->regroupFactTp;
    }

    /**
     * Set the regroup fact tp.
     *
     * @param int $regroupFactTp The regroup fact tp.
     */
    public function setRegroupFactTp($regroupFactTp) {
        $this->regroupFactTp = $regroupFactTp;
        return $this;
    }
}
