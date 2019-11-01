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
 * Cde frn prefixe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCdeFrnPrefixeTrait {

    /**
     * Cde frn prefixe.
     *
     * @var string
     */
    private $cdeFrnPrefixe;

    /**
     * Get the cde frn prefixe.
     *
     * @return string Returns the cde frn prefixe.
     */
    public function getCdeFrnPrefixe() {
        return $this->cdeFrnPrefixe;
    }

    /**
     * Set the cde frn prefixe.
     *
     * @param string $cdeFrnPrefixe The cde frn prefixe.
     */
    public function setCdeFrnPrefixe($cdeFrnPrefixe) {
        $this->cdeFrnPrefixe = $cdeFrnPrefixe;
        return $this;
    }
}
