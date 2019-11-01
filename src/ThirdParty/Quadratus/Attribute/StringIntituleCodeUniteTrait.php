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
 * Intitule code unite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIntituleCodeUniteTrait {

    /**
     * Intitule code unite.
     *
     * @var string
     */
    private $intituleCodeUnite;

    /**
     * Get the intitule code unite.
     *
     * @return string Returns the intitule code unite.
     */
    public function getIntituleCodeUnite() {
        return $this->intituleCodeUnite;
    }

    /**
     * Set the intitule code unite.
     *
     * @param string $intituleCodeUnite The intitule code unite.
     */
    public function setIntituleCodeUnite($intituleCodeUnite) {
        $this->intituleCodeUnite = $intituleCodeUnite;
        return $this;
    }
}
