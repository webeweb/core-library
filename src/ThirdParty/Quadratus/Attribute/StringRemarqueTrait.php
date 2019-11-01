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
 * Remarque trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRemarqueTrait {

    /**
     * Remarque.
     *
     * @var string
     */
    private $remarque;

    /**
     * Get the remarque.
     *
     * @return string Returns the remarque.
     */
    public function getRemarque() {
        return $this->remarque;
    }

    /**
     * Set the remarque.
     *
     * @param string $remarque The remarque.
     */
    public function setRemarque($remarque) {
        $this->remarque = $remarque;
        return $this;
    }
}
