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
 * Type suivi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeSuiviTrait {

    /**
     * Type suivi.
     *
     * @var string
     */
    private $typeSuivi;

    /**
     * Get the type suivi.
     *
     * @return string Returns the type suivi.
     */
    public function getTypeSuivi() {
        return $this->typeSuivi;
    }

    /**
     * Set the type suivi.
     *
     * @param string $typeSuivi The type suivi.
     */
    public function setTypeSuivi($typeSuivi) {
        $this->typeSuivi = $typeSuivi;
        return $this;
    }
}
