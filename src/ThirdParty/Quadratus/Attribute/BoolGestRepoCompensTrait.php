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
 * Gest repo compens trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGestRepoCompensTrait {

    /**
     * Gest repo compens.
     *
     * @var bool
     */
    private $gestRepoCompens;

    /**
     * Get the gest repo compens.
     *
     * @return bool Returns the gest repo compens.
     */
    public function getGestRepoCompens() {
        return $this->gestRepoCompens;
    }

    /**
     * Set the gest repo compens.
     *
     * @param bool $gestRepoCompens The gest repo compens.
     */
    public function setGestRepoCompens($gestRepoCompens) {
        $this->gestRepoCompens = $gestRepoCompens;
        return $this;
    }
}
