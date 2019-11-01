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
 * Email rr active trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEmailRrActiveTrait {

    /**
     * Email rr active.
     *
     * @var bool
     */
    private $emailRrActive;

    /**
     * Get the email rr active.
     *
     * @return bool Returns the email rr active.
     */
    public function getEmailRrActive() {
        return $this->emailRrActive;
    }

    /**
     * Set the email rr active.
     *
     * @param bool $emailRrActive The email rr active.
     */
    public function setEmailRrActive($emailRrActive) {
        $this->emailRrActive = $emailRrActive;
        return $this;
    }
}
