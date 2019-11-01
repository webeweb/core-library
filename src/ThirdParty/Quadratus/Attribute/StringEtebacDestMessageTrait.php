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
 * Etebac dest message trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEtebacDestMessageTrait {

    /**
     * Etebac dest message.
     *
     * @var string
     */
    private $etebacDestMessage;

    /**
     * Get the etebac dest message.
     *
     * @return string Returns the etebac dest message.
     */
    public function getEtebacDestMessage() {
        return $this->etebacDestMessage;
    }

    /**
     * Set the etebac dest message.
     *
     * @param string $etebacDestMessage The etebac dest message.
     */
    public function setEtebacDestMessage($etebacDestMessage) {
        $this->etebacDestMessage = $etebacDestMessage;
        return $this;
    }
}
