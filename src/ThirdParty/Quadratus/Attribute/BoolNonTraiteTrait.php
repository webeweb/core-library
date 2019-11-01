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
 * Non traite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolNonTraiteTrait {

    /**
     * Non traite.
     *
     * @var bool
     */
    private $nonTraite;

    /**
     * Get the non traite.
     *
     * @return bool Returns the non traite.
     */
    public function getNonTraite() {
        return $this->nonTraite;
    }

    /**
     * Set the non traite.
     *
     * @param bool $nonTraite The non traite.
     */
    public function setNonTraite($nonTraite) {
        $this->nonTraite = $nonTraite;
        return $this;
    }
}
