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
 * Dest point irc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDestPointIrcTrait {

    /**
     * Dest point irc.
     *
     * @var string
     */
    private $destPointIrc;

    /**
     * Get the dest point irc.
     *
     * @return string Returns the dest point irc.
     */
    public function getDestPointIrc() {
        return $this->destPointIrc;
    }

    /**
     * Set the dest point irc.
     *
     * @param string $destPointIrc The dest point irc.
     */
    public function setDestPointIrc($destPointIrc) {
        $this->destPointIrc = $destPointIrc;
        return $this;
    }
}
