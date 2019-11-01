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
 * Etbl nature activite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEtblNatureActiviteTrait {

    /**
     * Etbl nature activite.
     *
     * @var string
     */
    private $etblNatureActivite;

    /**
     * Get the etbl nature activite.
     *
     * @return string Returns the etbl nature activite.
     */
    public function getEtblNatureActivite() {
        return $this->etblNatureActivite;
    }

    /**
     * Set the etbl nature activite.
     *
     * @param string $etblNatureActivite The etbl nature activite.
     */
    public function setEtblNatureActivite($etblNatureActivite) {
        $this->etblNatureActivite = $etblNatureActivite;
        return $this;
    }
}
