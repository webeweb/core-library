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
 * Organisme retraite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringOrganismeRetraiteTrait {

    /**
     * Organisme retraite.
     *
     * @var string
     */
    private $organismeRetraite;

    /**
     * Get the organisme retraite.
     *
     * @return string Returns the organisme retraite.
     */
    public function getOrganismeRetraite() {
        return $this->organismeRetraite;
    }

    /**
     * Set the organisme retraite.
     *
     * @param string $organismeRetraite The organisme retraite.
     */
    public function setOrganismeRetraite($organismeRetraite) {
        $this->organismeRetraite = $organismeRetraite;
        return $this;
    }
}
