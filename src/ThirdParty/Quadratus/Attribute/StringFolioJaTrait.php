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
 * Folio ja trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFolioJaTrait {

    /**
     * Folio ja.
     *
     * @var string
     */
    private $folioJa;

    /**
     * Get the folio ja.
     *
     * @return string Returns the folio ja.
     */
    public function getFolioJa() {
        return $this->folioJa;
    }

    /**
     * Set the folio ja.
     *
     * @param string $folioJa The folio ja.
     */
    public function setFolioJa($folioJa) {
        $this->folioJa = $folioJa;
        return $this;
    }
}
