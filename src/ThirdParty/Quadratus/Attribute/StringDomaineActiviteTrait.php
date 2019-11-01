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
 * Domaine activite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDomaineActiviteTrait {

    /**
     * Domaine activite.
     *
     * @var string
     */
    private $domaineActivite;

    /**
     * Get the domaine activite.
     *
     * @return string Returns the domaine activite.
     */
    public function getDomaineActivite() {
        return $this->domaineActivite;
    }

    /**
     * Set the domaine activite.
     *
     * @param string $domaineActivite The domaine activite.
     */
    public function setDomaineActivite($domaineActivite) {
        $this->domaineActivite = $domaineActivite;
        return $this;
    }
}
