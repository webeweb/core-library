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
 * Prochain num arr trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntProchainNumArrTrait {

    /**
     * Prochain num arr.
     *
     * @var int
     */
    private $prochainNumArr;

    /**
     * Get the prochain num arr.
     *
     * @return int Returns the prochain num arr.
     */
    public function getProchainNumArr() {
        return $this->prochainNumArr;
    }

    /**
     * Set the prochain num arr.
     *
     * @param int $prochainNumArr The prochain num arr.
     */
    public function setProchainNumArr($prochainNumArr) {
        $this->prochainNumArr = $prochainNumArr;
        return $this;
    }
}
