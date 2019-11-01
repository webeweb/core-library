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
trait StringNationaliteTrait {

    /**
     * Nationalite.
     *
     * @var string
     */
    private $nationalite;

    /**
     * Get the nationalite.
     *
     * @return string Returns the nationalite.
     */
    public function getNationalite() {
        return $this->nationalite;
    }

    /**
     * Set the nationalite.
     *
     * @param string $nationalite The nationalite.
     */
    public function setNationalite($nationalite) {
        $this->nationalite = $nationalite;
        return $this;
    }
}
