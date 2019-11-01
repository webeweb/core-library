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
 * Qws code ipl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringQwsCodeIplTrait {

    /**
     * Qws code ipl.
     *
     * @var string
     */
    private $qwsCodeIpl;

    /**
     * Get the qws code ipl.
     *
     * @return string Returns the qws code ipl.
     */
    public function getQwsCodeIpl() {
        return $this->qwsCodeIpl;
    }

    /**
     * Set the qws code ipl.
     *
     * @param string $qwsCodeIpl The qws code ipl.
     */
    public function setQwsCodeIpl($qwsCodeIpl) {
        $this->qwsCodeIpl = $qwsCodeIpl;
        return $this;
    }
}
