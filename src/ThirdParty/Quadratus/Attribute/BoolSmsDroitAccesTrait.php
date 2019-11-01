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
 * Sms droit acces trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSmsDroitAccesTrait {

    /**
     * Sms droit acces.
     *
     * @var bool
     */
    private $smsDroitAcces;

    /**
     * Get the sms droit acces.
     *
     * @return bool Returns the sms droit acces.
     */
    public function getSmsDroitAcces() {
        return $this->smsDroitAcces;
    }

    /**
     * Set the sms droit acces.
     *
     * @param bool $smsDroitAcces The sms droit acces.
     */
    public function setSmsDroitAcces($smsDroitAcces) {
        $this->smsDroitAcces = $smsDroitAcces;
        return $this;
    }
}
