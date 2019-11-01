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
 * Site trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSiteTrait {

    /**
     * Site.
     *
     * @var string
     */
    private $site;

    /**
     * Get the site.
     *
     * @return string Returns the site.
     */
    public function getSite() {
        return $this->site;
    }

    /**
     * Set the site.
     *
     * @param string $site The site.
     */
    public function setSite($site) {
        $this->site = $site;
        return $this;
    }
}
