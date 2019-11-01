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
 * Organisme ass chom trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringOrganismeAssChomTrait {

    /**
     * Organisme ass chom.
     *
     * @var string
     */
    private $organismeAssChom;

    /**
     * Get the organisme ass chom.
     *
     * @return string Returns the organisme ass chom.
     */
    public function getOrganismeAssChom() {
        return $this->organismeAssChom;
    }

    /**
     * Set the organisme ass chom.
     *
     * @param string $organismeAssChom The organisme ass chom.
     */
    public function setOrganismeAssChom($organismeAssChom) {
        $this->organismeAssChom = $organismeAssChom;
        return $this;
    }
}
