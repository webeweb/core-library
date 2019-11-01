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
 * Mail bulletin pj trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMailBulletinPjTrait {

    /**
     * Mail bulletin pj.
     *
     * @var string
     */
    private $mailBulletinPj;

    /**
     * Get the mail bulletin pj.
     *
     * @return string Returns the mail bulletin pj.
     */
    public function getMailBulletinPj() {
        return $this->mailBulletinPj;
    }

    /**
     * Set the mail bulletin pj.
     *
     * @param string $mailBulletinPj The mail bulletin pj.
     */
    public function setMailBulletinPj($mailBulletinPj) {
        $this->mailBulletinPj = $mailBulletinPj;
        return $this;
    }
}
