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
 * Presence min trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPresenceMinTrait {

    /**
     * Presence min.
     *
     * @var string
     */
    private $presenceMin;

    /**
     * Get the presence min.
     *
     * @return string Returns the presence min.
     */
    public function getPresenceMin() {
        return $this->presenceMin;
    }

    /**
     * Set the presence min.
     *
     * @param string $presenceMin The presence min.
     */
    public function setPresenceMin($presenceMin) {
        $this->presenceMin = $presenceMin;
        return $this;
    }
}
