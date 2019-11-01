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
 * Det ta1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDetTa1Trait {

    /**
     * Det ta1.
     *
     * @var string
     */
    private $detTa1;

    /**
     * Get the det ta1.
     *
     * @return string Returns the det ta1.
     */
    public function getDetTa1() {
        return $this->detTa1;
    }

    /**
     * Set the det ta1.
     *
     * @param string $detTa1 The det ta1.
     */
    public function setDetTa1($detTa1) {
        $this->detTa1 = $detTa1;
        return $this;
    }
}
