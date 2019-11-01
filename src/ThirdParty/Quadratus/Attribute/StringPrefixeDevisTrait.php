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
 * Prefixe devis trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPrefixeDevisTrait {

    /**
     * Prefixe devis.
     *
     * @var string
     */
    private $prefixeDevis;

    /**
     * Get the prefixe devis.
     *
     * @return string Returns the prefixe devis.
     */
    public function getPrefixeDevis() {
        return $this->prefixeDevis;
    }

    /**
     * Set the prefixe devis.
     *
     * @param string $prefixeDevis The prefixe devis.
     */
    public function setPrefixeDevis($prefixeDevis) {
        $this->prefixeDevis = $prefixeDevis;
        return $this;
    }
}
