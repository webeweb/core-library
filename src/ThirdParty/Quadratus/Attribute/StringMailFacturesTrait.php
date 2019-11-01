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
 * Mail factures trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMailFacturesTrait {

    /**
     * Mail factures.
     *
     * @var string
     */
    private $mailFactures;

    /**
     * Get the mail factures.
     *
     * @return string Returns the mail factures.
     */
    public function getMailFactures() {
        return $this->mailFactures;
    }

    /**
     * Set the mail factures.
     *
     * @param string $mailFactures The mail factures.
     */
    public function setMailFactures($mailFactures) {
        $this->mailFactures = $mailFactures;
        return $this;
    }
}
