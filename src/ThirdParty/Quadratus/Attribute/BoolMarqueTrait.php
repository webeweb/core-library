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
 * Marque trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMarqueTrait {

    /**
     * Marque.
     *
     * @var bool
     */
    private $marque;

    /**
     * Get the marque.
     *
     * @return bool Returns the marque.
     */
    public function getMarque() {
        return $this->marque;
    }

    /**
     * Set the marque.
     *
     * @param bool $marque The marque.
     */
    public function setMarque($marque) {
        $this->marque = $marque;
        return $this;
    }
}
