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
 * Mail bulletin cle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMailBulletinCleTrait {

    /**
     * Mail bulletin cle.
     *
     * @var string
     */
    private $mailBulletinCle;

    /**
     * Get the mail bulletin cle.
     *
     * @return string Returns the mail bulletin cle.
     */
    public function getMailBulletinCle() {
        return $this->mailBulletinCle;
    }

    /**
     * Set the mail bulletin cle.
     *
     * @param string $mailBulletinCle The mail bulletin cle.
     */
    public function setMailBulletinCle($mailBulletinCle) {
        $this->mailBulletinCle = $mailBulletinCle;
        return $this;
    }
}
