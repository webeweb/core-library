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
 * Nationalite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNationaliteTrait {

    /**
     * Nationalite.
     *
     * @var int
     */
    private $nationalite;

    /**
     * Get the nationalite.
     *
     * @return int Returns the nationalite.
     */
    public function getNationalite() {
        return $this->nationalite;
    }

    /**
     * Set the nationalite.
     *
     * @param int $nationalite The nationalite.
     */
    public function setNationalite($nationalite) {
        $this->nationalite = $nationalite;
        return $this;
    }
}
