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
 * Type fich bilat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeFichBilatTrait {

    /**
     * Type fich bilat.
     *
     * @var string
     */
    private $typeFichBilat;

    /**
     * Get the type fich bilat.
     *
     * @return string Returns the type fich bilat.
     */
    public function getTypeFichBilat() {
        return $this->typeFichBilat;
    }

    /**
     * Set the type fich bilat.
     *
     * @param string $typeFichBilat The type fich bilat.
     */
    public function setTypeFichBilat($typeFichBilat) {
        $this->typeFichBilat = $typeFichBilat;
        return $this;
    }
}
