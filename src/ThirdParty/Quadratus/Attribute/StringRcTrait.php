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
 * Rc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRcTrait {

    /**
     * Rc.
     *
     * @var string
     */
    private $rc;

    /**
     * Get the rc.
     *
     * @return string Returns the rc.
     */
    public function getRc() {
        return $this->rc;
    }

    /**
     * Set the rc.
     *
     * @param string $rc The rc.
     */
    public function setRc($rc) {
        $this->rc = $rc;
        return $this;
    }
}
