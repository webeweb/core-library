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
 * Code ventil fourn trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeVentilFournTrait {

    /**
     * Code ventil fourn.
     *
     * @var string
     */
    private $codeVentilFourn;

    /**
     * Get the code ventil fourn.
     *
     * @return string Returns the code ventil fourn.
     */
    public function getCodeVentilFourn() {
        return $this->codeVentilFourn;
    }

    /**
     * Set the code ventil fourn.
     *
     * @param string $codeVentilFourn The code ventil fourn.
     */
    public function setCodeVentilFourn($codeVentilFourn) {
        $this->codeVentilFourn = $codeVentilFourn;
        return $this;
    }
}
