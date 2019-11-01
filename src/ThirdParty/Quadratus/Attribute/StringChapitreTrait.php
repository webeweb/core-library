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
 * Chapitre trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChapitreTrait {

    /**
     * Chapitre.
     *
     * @var string
     */
    private $chapitre;

    /**
     * Get the chapitre.
     *
     * @return string Returns the chapitre.
     */
    public function getChapitre() {
        return $this->chapitre;
    }

    /**
     * Set the chapitre.
     *
     * @param string $chapitre The chapitre.
     */
    public function setChapitre($chapitre) {
        $this->chapitre = $chapitre;
        return $this;
    }
}
