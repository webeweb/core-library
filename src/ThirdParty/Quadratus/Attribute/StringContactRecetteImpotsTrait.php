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
 * Contact recette impots trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringContactRecetteImpotsTrait {

    /**
     * Contact recette impots.
     *
     * @var string
     */
    private $contactRecetteImpots;

    /**
     * Get the contact recette impots.
     *
     * @return string Returns the contact recette impots.
     */
    public function getContactRecetteImpots() {
        return $this->contactRecetteImpots;
    }

    /**
     * Set the contact recette impots.
     *
     * @param string $contactRecetteImpots The contact recette impots.
     */
    public function setContactRecetteImpots($contactRecetteImpots) {
        $this->contactRecetteImpots = $contactRecetteImpots;
        return $this;
    }
}
