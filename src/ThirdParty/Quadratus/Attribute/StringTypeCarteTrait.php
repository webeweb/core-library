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
 * Type carte trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeCarteTrait {

    /**
     * Type carte.
     *
     * @var string
     */
    private $typeCarte;

    /**
     * Get the type carte.
     *
     * @return string Returns the type carte.
     */
    public function getTypeCarte() {
        return $this->typeCarte;
    }

    /**
     * Set the type carte.
     *
     * @param string $typeCarte The type carte.
     */
    public function setTypeCarte($typeCarte) {
        $this->typeCarte = $typeCarte;
        return $this;
    }
}
