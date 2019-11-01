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
 * Num dat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumDatTrait {

    /**
     * Num dat.
     *
     * @var string
     */
    private $numDat;

    /**
     * Get the num dat.
     *
     * @return string Returns the num dat.
     */
    public function getNumDat() {
        return $this->numDat;
    }

    /**
     * Set the num dat.
     *
     * @param string $numDat The num dat.
     */
    public function setNumDat($numDat) {
        $this->numDat = $numDat;
        return $this;
    }
}
