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
 * Mail bulletin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMailBulletinTrait {

    /**
     * Mail bulletin.
     *
     * @var string
     */
    private $mailBulletin;

    /**
     * Get the mail bulletin.
     *
     * @return string Returns the mail bulletin.
     */
    public function getMailBulletin() {
        return $this->mailBulletin;
    }

    /**
     * Set the mail bulletin.
     *
     * @param string $mailBulletin The mail bulletin.
     */
    public function setMailBulletin($mailBulletin) {
        $this->mailBulletin = $mailBulletin;
        return $this;
    }
}
