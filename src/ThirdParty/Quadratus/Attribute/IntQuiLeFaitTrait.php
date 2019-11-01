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
 * Qui le fait trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntQuiLeFaitTrait {

    /**
     * Qui le fait.
     *
     * @var int
     */
    private $quiLeFait;

    /**
     * Get the qui le fait.
     *
     * @return int Returns the qui le fait.
     */
    public function getQuiLeFait() {
        return $this->quiLeFait;
    }

    /**
     * Set the qui le fait.
     *
     * @param int $quiLeFait The qui le fait.
     */
    public function setQuiLeFait($quiLeFait) {
        $this->quiLeFait = $quiLeFait;
        return $this;
    }
}
