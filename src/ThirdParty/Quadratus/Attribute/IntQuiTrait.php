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
 * Qui trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntQuiTrait {

    /**
     * Qui.
     *
     * @var int
     */
    private $qui;

    /**
     * Get the qui.
     *
     * @return int Returns the qui.
     */
    public function getQui() {
        return $this->qui;
    }

    /**
     * Set the qui.
     *
     * @param int $qui The qui.
     */
    public function setQui($qui) {
        $this->qui = $qui;
        return $this;
    }
}
