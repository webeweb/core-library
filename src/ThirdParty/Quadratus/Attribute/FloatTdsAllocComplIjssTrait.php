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
 * Tds alloc compl ijss trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTdsAllocComplIjssTrait {

    /**
     * Tds alloc compl ijss.
     *
     * @var float
     */
    private $tdsAllocComplIjss;

    /**
     * Get the tds alloc compl ijss.
     *
     * @return float Returns the tds alloc compl ijss.
     */
    public function getTdsAllocComplIjss() {
        return $this->tdsAllocComplIjss;
    }

    /**
     * Set the tds alloc compl ijss.
     *
     * @param float $tdsAllocComplIjss The tds alloc compl ijss.
     */
    public function setTdsAllocComplIjss($tdsAllocComplIjss) {
        $this->tdsAllocComplIjss = $tdsAllocComplIjss;
        return $this;
    }
}
