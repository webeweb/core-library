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
 * Suivi messages trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSuiviMessagesTrait {

    /**
     * Suivi messages.
     *
     * @var bool
     */
    private $suiviMessages;

    /**
     * Get the suivi messages.
     *
     * @return bool Returns the suivi messages.
     */
    public function getSuiviMessages() {
        return $this->suiviMessages;
    }

    /**
     * Set the suivi messages.
     *
     * @param bool $suiviMessages The suivi messages.
     */
    public function setSuiviMessages($suiviMessages) {
        $this->suiviMessages = $suiviMessages;
        return $this;
    }
}
