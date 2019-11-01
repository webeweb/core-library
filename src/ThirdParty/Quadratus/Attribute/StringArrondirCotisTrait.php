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
 * Arrondir cotis trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringArrondirCotisTrait {

    /**
     * Arrondir cotis.
     *
     * @var string
     */
    private $arrondirCotis;

    /**
     * Get the arrondir cotis.
     *
     * @return string Returns the arrondir cotis.
     */
    public function getArrondirCotis() {
        return $this->arrondirCotis;
    }

    /**
     * Set the arrondir cotis.
     *
     * @param string $arrondirCotis The arrondir cotis.
     */
    public function setArrondirCotis($arrondirCotis) {
        $this->arrondirCotis = $arrondirCotis;
        return $this;
    }
}
