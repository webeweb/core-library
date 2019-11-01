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
 * Type cpt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeCptTrait {

    /**
     * Type cpt.
     *
     * @var string
     */
    private $typeCpt;

    /**
     * Get the type cpt.
     *
     * @return string Returns the type cpt.
     */
    public function getTypeCpt() {
        return $this->typeCpt;
    }

    /**
     * Set the type cpt.
     *
     * @param string $typeCpt The type cpt.
     */
    public function setTypeCpt($typeCpt) {
        $this->typeCpt = $typeCpt;
        return $this;
    }
}
