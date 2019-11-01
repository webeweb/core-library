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
 * Type cotis trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeCotisTrait {

    /**
     * Type cotis.
     *
     * @var string
     */
    private $typeCotis;

    /**
     * Get the type cotis.
     *
     * @return string Returns the type cotis.
     */
    public function getTypeCotis() {
        return $this->typeCotis;
    }

    /**
     * Set the type cotis.
     *
     * @param string $typeCotis The type cotis.
     */
    public function setTypeCotis($typeCotis) {
        $this->typeCotis = $typeCotis;
        return $this;
    }
}
