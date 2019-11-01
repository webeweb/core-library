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
 * Email start mode trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntEmailStartModeTrait {

    /**
     * Email start mode.
     *
     * @var int
     */
    private $emailStartMode;

    /**
     * Get the email start mode.
     *
     * @return int Returns the email start mode.
     */
    public function getEmailStartMode() {
        return $this->emailStartMode;
    }

    /**
     * Set the email start mode.
     *
     * @param int $emailStartMode The email start mode.
     */
    public function setEmailStartMode($emailStartMode) {
        $this->emailStartMode = $emailStartMode;
        return $this;
    }
}
