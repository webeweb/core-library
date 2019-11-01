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
 * Ed bul last mail trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEdBulLastMailTrait {

    /**
     * Ed bul last mail.
     *
     * @var string
     */
    private $edBulLastMail;

    /**
     * Get the ed bul last mail.
     *
     * @return string Returns the ed bul last mail.
     */
    public function getEdBulLastMail() {
        return $this->edBulLastMail;
    }

    /**
     * Set the ed bul last mail.
     *
     * @param string $edBulLastMail The ed bul last mail.
     */
    public function setEdBulLastMail($edBulLastMail) {
        $this->edBulLastMail = $edBulLastMail;
        return $this;
    }
}
