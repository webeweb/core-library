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
 * Jeudi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolJeudiTrait {

    /**
     * Jeudi.
     *
     * @var bool
     */
    private $jeudi;

    /**
     * Get the jeudi.
     *
     * @return bool Returns the jeudi.
     */
    public function getJeudi() {
        return $this->jeudi;
    }

    /**
     * Set the jeudi.
     *
     * @param bool $jeudi The jeudi.
     */
    public function setJeudi($jeudi) {
        $this->jeudi = $jeudi;
        return $this;
    }
}
