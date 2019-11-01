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
 * Cotisation csg trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCotisationCsgTrait {

    /**
     * Cotisation csg.
     *
     * @var bool
     */
    private $cotisationCsg;

    /**
     * Get the cotisation csg.
     *
     * @return bool Returns the cotisation csg.
     */
    public function getCotisationCsg() {
        return $this->cotisationCsg;
    }

    /**
     * Set the cotisation csg.
     *
     * @param bool $cotisationCsg The cotisation csg.
     */
    public function setCotisationCsg($cotisationCsg) {
        $this->cotisationCsg = $cotisationCsg;
        return $this;
    }
}
