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
 * Code collab messages trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeCollabMessagesTrait {

    /**
     * Code collab messages.
     *
     * @var string
     */
    private $codeCollabMessages;

    /**
     * Get the code collab messages.
     *
     * @return string Returns the code collab messages.
     */
    public function getCodeCollabMessages() {
        return $this->codeCollabMessages;
    }

    /**
     * Set the code collab messages.
     *
     * @param string $codeCollabMessages The code collab messages.
     */
    public function setCodeCollabMessages($codeCollabMessages) {
        $this->codeCollabMessages = $codeCollabMessages;
        return $this;
    }
}
