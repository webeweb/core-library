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
 * Intitule all trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIntituleAllTrait {

    /**
     * Intitule all.
     *
     * @var string
     */
    private $intituleAll;

    /**
     * Get the intitule all.
     *
     * @return string Returns the intitule all.
     */
    public function getIntituleAll() {
        return $this->intituleAll;
    }

    /**
     * Set the intitule all.
     *
     * @param string $intituleAll The intitule all.
     */
    public function setIntituleAll($intituleAll) {
        $this->intituleAll = $intituleAll;
        return $this;
    }
}
