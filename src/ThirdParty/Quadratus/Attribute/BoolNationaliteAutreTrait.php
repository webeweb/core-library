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
 * Nationalite autre trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolNationaliteAutreTrait {

    /**
     * Nationalite autre.
     *
     * @var bool
     */
    private $nationaliteAutre;

    /**
     * Get the nationalite autre.
     *
     * @return bool Returns the nationalite autre.
     */
    public function getNationaliteAutre() {
        return $this->nationaliteAutre;
    }

    /**
     * Set the nationalite autre.
     *
     * @param bool $nationaliteAutre The nationalite autre.
     */
    public function setNationaliteAutre($nationaliteAutre) {
        $this->nationaliteAutre = $nationaliteAutre;
        return $this;
    }
}
