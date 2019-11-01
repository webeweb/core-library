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
 * Ean trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEanTrait {

    /**
     * Ean.
     *
     * @var string
     */
    private $ean;

    /**
     * Get the ean.
     *
     * @return string Returns the ean.
     */
    public function getEan() {
        return $this->ean;
    }

    /**
     * Set the ean.
     *
     * @param string $ean The ean.
     */
    public function setEan($ean) {
        $this->ean = $ean;
        return $this;
    }
}
