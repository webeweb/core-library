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
 * Det ta3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDetTa3Trait {

    /**
     * Det ta3.
     *
     * @var string
     */
    private $detTa3;

    /**
     * Get the det ta3.
     *
     * @return string Returns the det ta3.
     */
    public function getDetTa3() {
        return $this->detTa3;
    }

    /**
     * Set the det ta3.
     *
     * @param string $detTa3 The det ta3.
     */
    public function setDetTa3($detTa3) {
        $this->detTa3 = $detTa3;
        return $this;
    }
}
