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
 * Previsionnel trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPrevisionnelTrait {

    /**
     * Previsionnel.
     *
     * @var string
     */
    private $previsionnel;

    /**
     * Get the previsionnel.
     *
     * @return string Returns the previsionnel.
     */
    public function getPrevisionnel() {
        return $this->previsionnel;
    }

    /**
     * Set the previsionnel.
     *
     * @param string $previsionnel The previsionnel.
     */
    public function setPrevisionnel($previsionnel) {
        $this->previsionnel = $previsionnel;
        return $this;
    }
}
