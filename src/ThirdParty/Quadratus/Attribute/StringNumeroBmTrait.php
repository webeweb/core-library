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
 * Numero bm trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumeroBmTrait {

    /**
     * Numero bm.
     *
     * @var string
     */
    private $numeroBm;

    /**
     * Get the numero bm.
     *
     * @return string Returns the numero bm.
     */
    public function getNumeroBm() {
        return $this->numeroBm;
    }

    /**
     * Set the numero bm.
     *
     * @param string $numeroBm The numero bm.
     */
    public function setNumeroBm($numeroBm) {
        $this->numeroBm = $numeroBm;
        return $this;
    }
}
