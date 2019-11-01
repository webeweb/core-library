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
 * Det ta4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDetTa4Trait {

    /**
     * Det ta4.
     *
     * @var string
     */
    private $detTa4;

    /**
     * Get the det ta4.
     *
     * @return string Returns the det ta4.
     */
    public function getDetTa4() {
        return $this->detTa4;
    }

    /**
     * Set the det ta4.
     *
     * @param string $detTa4 The det ta4.
     */
    public function setDetTa4($detTa4) {
        $this->detTa4 = $detTa4;
        return $this;
    }
}
