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
 * Ean frn trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEanFrnTrait {

    /**
     * Ean frn.
     *
     * @var string
     */
    private $eanFrn;

    /**
     * Get the ean frn.
     *
     * @return string Returns the ean frn.
     */
    public function getEanFrn() {
        return $this->eanFrn;
    }

    /**
     * Set the ean frn.
     *
     * @param string $eanFrn The ean frn.
     */
    public function setEanFrn($eanFrn) {
        $this->eanFrn = $eanFrn;
        return $this;
    }
}
