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
 * Det ta2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDetTa2Trait {

    /**
     * Det ta2.
     *
     * @var string
     */
    private $detTa2;

    /**
     * Get the det ta2.
     *
     * @return string Returns the det ta2.
     */
    public function getDetTa2() {
        return $this->detTa2;
    }

    /**
     * Set the det ta2.
     *
     * @param string $detTa2 The det ta2.
     */
    public function setDetTa2($detTa2) {
        $this->detTa2 = $detTa2;
        return $this;
    }
}
