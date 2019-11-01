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
 * Det code ta trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDetCodeTaTrait {

    /**
     * Det code ta.
     *
     * @var string
     */
    private $detCodeTa;

    /**
     * Get the det code ta.
     *
     * @return string Returns the det code ta.
     */
    public function getDetCodeTa() {
        return $this->detCodeTa;
    }

    /**
     * Set the det code ta.
     *
     * @param string $detCodeTa The det code ta.
     */
    public function setDetCodeTa($detCodeTa) {
        $this->detCodeTa = $detCodeTa;
        return $this;
    }
}
