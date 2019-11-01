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
 * Ville mariage trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringVilleMariageTrait {

    /**
     * Ville mariage.
     *
     * @var string
     */
    private $villeMariage;

    /**
     * Get the ville mariage.
     *
     * @return string Returns the ville mariage.
     */
    public function getVilleMariage() {
        return $this->villeMariage;
    }

    /**
     * Set the ville mariage.
     *
     * @param string $villeMariage The ville mariage.
     */
    public function setVilleMariage($villeMariage) {
        $this->villeMariage = $villeMariage;
        return $this;
    }
}
