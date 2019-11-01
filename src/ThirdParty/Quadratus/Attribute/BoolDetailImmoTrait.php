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
 * Detail immo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDetailImmoTrait {

    /**
     * Detail immo.
     *
     * @var bool
     */
    private $detailImmo;

    /**
     * Get the detail immo.
     *
     * @return bool Returns the detail immo.
     */
    public function getDetailImmo() {
        return $this->detailImmo;
    }

    /**
     * Set the detail immo.
     *
     * @param bool $detailImmo The detail immo.
     */
    public function setDetailImmo($detailImmo) {
        $this->detailImmo = $detailImmo;
        return $this;
    }
}
