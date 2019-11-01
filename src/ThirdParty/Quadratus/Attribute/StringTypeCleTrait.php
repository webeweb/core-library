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
 * Type cle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeCleTrait {

    /**
     * Type cle.
     *
     * @var string
     */
    private $typeCle;

    /**
     * Get the type cle.
     *
     * @return string Returns the type cle.
     */
    public function getTypeCle() {
        return $this->typeCle;
    }

    /**
     * Set the type cle.
     *
     * @param string $typeCle The type cle.
     */
    public function setTypeCle($typeCle) {
        $this->typeCle = $typeCle;
        return $this;
    }
}
