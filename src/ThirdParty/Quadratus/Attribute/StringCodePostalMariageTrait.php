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
 * Code postal mariage trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodePostalMariageTrait {

    /**
     * Code postal mariage.
     *
     * @var string
     */
    private $codePostalMariage;

    /**
     * Get the code postal mariage.
     *
     * @return string Returns the code postal mariage.
     */
    public function getCodePostalMariage() {
        return $this->codePostalMariage;
    }

    /**
     * Set the code postal mariage.
     *
     * @param string $codePostalMariage The code postal mariage.
     */
    public function setCodePostalMariage($codePostalMariage) {
        $this->codePostalMariage = $codePostalMariage;
        return $this;
    }
}
