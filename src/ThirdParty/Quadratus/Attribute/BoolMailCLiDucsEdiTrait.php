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
 * Mail c li ducs edi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMailCLiDucsEdiTrait {

    /**
     * Mail c li ducs edi.
     *
     * @var bool
     */
    private $mailCLiDucsEdi;

    /**
     * Get the mail c li ducs edi.
     *
     * @return bool Returns the mail c li ducs edi.
     */
    public function getMailCLiDucsEdi() {
        return $this->mailCLiDucsEdi;
    }

    /**
     * Set the mail c li ducs edi.
     *
     * @param bool $mailCLiDucsEdi The mail c li ducs edi.
     */
    public function setMailCLiDucsEdi($mailCLiDucsEdi) {
        $this->mailCLiDucsEdi = $mailCLiDucsEdi;
        return $this;
    }
}
