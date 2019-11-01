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
 * Nom site trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomSiteTrait {

    /**
     * Nom site.
     *
     * @var string
     */
    private $nomSite;

    /**
     * Get the nom site.
     *
     * @return string Returns the nom site.
     */
    public function getNomSite() {
        return $this->nomSite;
    }

    /**
     * Set the nom site.
     *
     * @param string $nomSite The nom site.
     */
    public function setNomSite($nomSite) {
        $this->nomSite = $nomSite;
        return $this;
    }
}
