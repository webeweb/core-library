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
 * Non concerne tp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolNonConcerneTpTrait {

    /**
     * Non concerne tp.
     *
     * @var bool
     */
    private $nonConcerneTp;

    /**
     * Get the non concerne tp.
     *
     * @return bool Returns the non concerne tp.
     */
    public function getNonConcerneTp() {
        return $this->nonConcerneTp;
    }

    /**
     * Set the non concerne tp.
     *
     * @param bool $nonConcerneTp The non concerne tp.
     */
    public function setNonConcerneTp($nonConcerneTp) {
        $this->nonConcerneTp = $nonConcerneTp;
        return $this;
    }
}
