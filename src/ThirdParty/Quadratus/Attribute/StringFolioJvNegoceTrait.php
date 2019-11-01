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
 * Folio jv negoce trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFolioJvNegoceTrait {

    /**
     * Folio jv negoce.
     *
     * @var string
     */
    private $folioJvNegoce;

    /**
     * Get the folio jv negoce.
     *
     * @return string Returns the folio jv negoce.
     */
    public function getFolioJvNegoce() {
        return $this->folioJvNegoce;
    }

    /**
     * Set the folio jv negoce.
     *
     * @param string $folioJvNegoce The folio jv negoce.
     */
    public function setFolioJvNegoce($folioJvNegoce) {
        $this->folioJvNegoce = $folioJvNegoce;
        return $this;
    }
}
