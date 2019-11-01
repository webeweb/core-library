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
 * Ouverture par trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringOuvertureParTrait {

    /**
     * Ouverture par.
     *
     * @var string
     */
    private $ouverturePar;

    /**
     * Get the ouverture par.
     *
     * @return string Returns the ouverture par.
     */
    public function getOuverturePar() {
        return $this->ouverturePar;
    }

    /**
     * Set the ouverture par.
     *
     * @param string $ouverturePar The ouverture par.
     */
    public function setOuverturePar($ouverturePar) {
        $this->ouverturePar = $ouverturePar;
        return $this;
    }
}
