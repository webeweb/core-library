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
 * Type dat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeDatTrait {

    /**
     * Type dat.
     *
     * @var string
     */
    private $typeDat;

    /**
     * Get the type dat.
     *
     * @return string Returns the type dat.
     */
    public function getTypeDat() {
        return $this->typeDat;
    }

    /**
     * Set the type dat.
     *
     * @param string $typeDat The type dat.
     */
    public function setTypeDat($typeDat) {
        $this->typeDat = $typeDat;
        return $this;
    }
}
