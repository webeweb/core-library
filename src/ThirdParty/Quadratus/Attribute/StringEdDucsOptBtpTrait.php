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
 * Ed ducs opt btp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEdDucsOptBtpTrait {

    /**
     * Ed ducs opt btp.
     *
     * @var string
     */
    private $edDucsOptBtp;

    /**
     * Get the ed ducs opt btp.
     *
     * @return string Returns the ed ducs opt btp.
     */
    public function getEdDucsOptBtp() {
        return $this->edDucsOptBtp;
    }

    /**
     * Set the ed ducs opt btp.
     *
     * @param string $edDucsOptBtp The ed ducs opt btp.
     */
    public function setEdDucsOptBtp($edDucsOptBtp) {
        $this->edDucsOptBtp = $edDucsOptBtp;
        return $this;
    }
}
