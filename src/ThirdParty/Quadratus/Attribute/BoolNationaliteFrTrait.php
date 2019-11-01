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
 * Nationalite fr trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolNationaliteFrTrait {

    /**
     * Nationalite fr.
     *
     * @var bool
     */
    private $nationaliteFr;

    /**
     * Get the nationalite fr.
     *
     * @return bool Returns the nationalite fr.
     */
    public function getNationaliteFr() {
        return $this->nationaliteFr;
    }

    /**
     * Set the nationalite fr.
     *
     * @param bool $nationaliteFr The nationalite fr.
     */
    public function setNationaliteFr($nationaliteFr) {
        $this->nationaliteFr = $nationaliteFr;
        return $this;
    }
}
