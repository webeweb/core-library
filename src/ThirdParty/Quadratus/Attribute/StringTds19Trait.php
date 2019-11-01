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
 * Tds19 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTds19Trait {

    /**
     * Tds19.
     *
     * @var string
     */
    private $tds19;

    /**
     * Get the tds19.
     *
     * @return string Returns the tds19.
     */
    public function getTds19() {
        return $this->tds19;
    }

    /**
     * Set the tds19.
     *
     * @param string $tds19 The tds19.
     */
    public function setTds19($tds19) {
        $this->tds19 = $tds19;
        return $this;
    }
}
