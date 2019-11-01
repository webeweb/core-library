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
 * Ed bord type imp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEdBordTypeImpTrait {

    /**
     * Ed bord type imp.
     *
     * @var string
     */
    private $edBordTypeImp;

    /**
     * Get the ed bord type imp.
     *
     * @return string Returns the ed bord type imp.
     */
    public function getEdBordTypeImp() {
        return $this->edBordTypeImp;
    }

    /**
     * Set the ed bord type imp.
     *
     * @param string $edBordTypeImp The ed bord type imp.
     */
    public function setEdBordTypeImp($edBordTypeImp) {
        $this->edBordTypeImp = $edBordTypeImp;
        return $this;
    }
}
