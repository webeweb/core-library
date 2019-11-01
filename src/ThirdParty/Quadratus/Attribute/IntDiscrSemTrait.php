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
 * Discr sem trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntDiscrSemTrait {

    /**
     * Discr sem.
     *
     * @var int
     */
    private $discrSem;

    /**
     * Get the discr sem.
     *
     * @return int Returns the discr sem.
     */
    public function getDiscrSem() {
        return $this->discrSem;
    }

    /**
     * Set the discr sem.
     *
     * @param int $discrSem The discr sem.
     */
    public function setDiscrSem($discrSem) {
        $this->discrSem = $discrSem;
        return $this;
    }
}
