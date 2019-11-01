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
 * Etbl naf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEtblNafTrait {

    /**
     * Etbl naf.
     *
     * @var string
     */
    private $etblNaf;

    /**
     * Get the etbl naf.
     *
     * @return string Returns the etbl naf.
     */
    public function getEtblNaf() {
        return $this->etblNaf;
    }

    /**
     * Set the etbl naf.
     *
     * @param string $etblNaf The etbl naf.
     */
    public function setEtblNaf($etblNaf) {
        $this->etblNaf = $etblNaf;
        return $this;
    }
}
