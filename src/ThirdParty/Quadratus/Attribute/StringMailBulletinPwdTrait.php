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
 * Mail bulletin pwd trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMailBulletinPwdTrait {

    /**
     * Mail bulletin pwd.
     *
     * @var string
     */
    private $mailBulletinPwd;

    /**
     * Get the mail bulletin pwd.
     *
     * @return string Returns the mail bulletin pwd.
     */
    public function getMailBulletinPwd() {
        return $this->mailBulletinPwd;
    }

    /**
     * Set the mail bulletin pwd.
     *
     * @param string $mailBulletinPwd The mail bulletin pwd.
     */
    public function setMailBulletinPwd($mailBulletinPwd) {
        $this->mailBulletinPwd = $mailBulletinPwd;
        return $this;
    }
}
