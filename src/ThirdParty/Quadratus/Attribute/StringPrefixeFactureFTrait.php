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
 * Prefixe facture f trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPrefixeFactureFTrait {

    /**
     * Prefixe facture f.
     *
     * @var string
     */
    private $prefixeFactureF;

    /**
     * Get the prefixe facture f.
     *
     * @return string Returns the prefixe facture f.
     */
    public function getPrefixeFactureF() {
        return $this->prefixeFactureF;
    }

    /**
     * Set the prefixe facture f.
     *
     * @param string $prefixeFactureF The prefixe facture f.
     */
    public function setPrefixeFactureF($prefixeFactureF) {
        $this->prefixeFactureF = $prefixeFactureF;
        return $this;
    }
}
