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
 * Allotissement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAllotissementTrait {

    /**
     * Allotissement.
     *
     * @var bool
     */
    private $allotissement;

    /**
     * Get the allotissement.
     *
     * @return bool Returns the allotissement.
     */
    public function getAllotissement() {
        return $this->allotissement;
    }

    /**
     * Set the allotissement.
     *
     * @param bool $allotissement The allotissement.
     */
    public function setAllotissement($allotissement) {
        $this->allotissement = $allotissement;
        return $this;
    }
}
