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
 * Type liaison trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeLiaisonTrait {

    /**
     * Type liaison.
     *
     * @var string
     */
    private $typeLiaison;

    /**
     * Get the type liaison.
     *
     * @return string Returns the type liaison.
     */
    public function getTypeLiaison() {
        return $this->typeLiaison;
    }

    /**
     * Set the type liaison.
     *
     * @param string $typeLiaison The type liaison.
     */
    public function setTypeLiaison($typeLiaison) {
        $this->typeLiaison = $typeLiaison;
        return $this;
    }
}
