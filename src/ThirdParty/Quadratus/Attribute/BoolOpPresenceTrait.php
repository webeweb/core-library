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
 * Op presence trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolOpPresenceTrait {

    /**
     * Op presence.
     *
     * @var bool
     */
    private $opPresence;

    /**
     * Get the op presence.
     *
     * @return bool Returns the op presence.
     */
    public function getOpPresence() {
        return $this->opPresence;
    }

    /**
     * Set the op presence.
     *
     * @param bool $opPresence The op presence.
     */
    public function setOpPresence($opPresence) {
        $this->opPresence = $opPresence;
        return $this;
    }
}
