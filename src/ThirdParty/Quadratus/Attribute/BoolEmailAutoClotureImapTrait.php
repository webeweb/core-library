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
 * Email auto cloture imap trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEmailAutoClotureImapTrait {

    /**
     * Email auto cloture imap.
     *
     * @var bool
     */
    private $emailAutoClotureImap;

    /**
     * Get the email auto cloture imap.
     *
     * @return bool Returns the email auto cloture imap.
     */
    public function getEmailAutoClotureImap() {
        return $this->emailAutoClotureImap;
    }

    /**
     * Set the email auto cloture imap.
     *
     * @param bool $emailAutoClotureImap The email auto cloture imap.
     */
    public function setEmailAutoClotureImap($emailAutoClotureImap) {
        $this->emailAutoClotureImap = $emailAutoClotureImap;
        return $this;
    }
}
