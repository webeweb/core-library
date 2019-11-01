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
 * Az4206 nb trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntAz4206NbTrait {

    /**
     * Az4206 nb.
     *
     * @var int
     */
    private $az4206Nb;

    /**
     * Get the az4206 nb.
     *
     * @return int Returns the az4206 nb.
     */
    public function getAz4206Nb() {
        return $this->az4206Nb;
    }

    /**
     * Set the az4206 nb.
     *
     * @param int $az4206Nb The az4206 nb.
     */
    public function setAz4206Nb($az4206Nb) {
        $this->az4206Nb = $az4206Nb;
        return $this;
    }
}
