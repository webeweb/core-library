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
 * Niv tri site trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNivTriSiteTrait {

    /**
     * Niv tri site.
     *
     * @var string
     */
    private $nivTriSite;

    /**
     * Get the niv tri site.
     *
     * @return string Returns the niv tri site.
     */
    public function getNivTriSite() {
        return $this->nivTriSite;
    }

    /**
     * Set the niv tri site.
     *
     * @param string $nivTriSite The niv tri site.
     */
    public function setNivTriSite($nivTriSite) {
        $this->nivTriSite = $nivTriSite;
        return $this;
    }
}
