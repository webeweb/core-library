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
 * Messages confidentiels trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMessagesConfidentielsTrait {

    /**
     * Messages confidentiels.
     *
     * @var string
     */
    private $messagesConfidentiels;

    /**
     * Get the messages confidentiels.
     *
     * @return string Returns the messages confidentiels.
     */
    public function getMessagesConfidentiels() {
        return $this->messagesConfidentiels;
    }

    /**
     * Set the messages confidentiels.
     *
     * @param string $messagesConfidentiels The messages confidentiels.
     */
    public function setMessagesConfidentiels($messagesConfidentiels) {
        $this->messagesConfidentiels = $messagesConfidentiels;
        return $this;
    }
}
