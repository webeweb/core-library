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
 * Fonction commercial trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFonctionCommercialTrait {

    /**
     * Fonction commercial.
     *
     * @var string
     */
    private $fonctionCommercial;

    /**
     * Get the fonction commercial.
     *
     * @return string Returns the fonction commercial.
     */
    public function getFonctionCommercial() {
        return $this->fonctionCommercial;
    }

    /**
     * Set the fonction commercial.
     *
     * @param string $fonctionCommercial The fonction commercial.
     */
    public function setFonctionCommercial($fonctionCommercial) {
        $this->fonctionCommercial = $fonctionCommercial;
        return $this;
    }
}
