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
 * Lettre pvaut bo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolLettrePvautBoTrait {

    /**
     * Lettre pvaut bo.
     *
     * @var bool
     */
    private $lettrePvautBo;

    /**
     * Get the lettre pvaut bo.
     *
     * @return bool Returns the lettre pvaut bo.
     */
    public function getLettrePvautBo() {
        return $this->lettrePvautBo;
    }

    /**
     * Set the lettre pvaut bo.
     *
     * @param bool $lettrePvautBo The lettre pvaut bo.
     */
    public function setLettrePvautBo($lettrePvautBo) {
        $this->lettrePvautBo = $lettrePvautBo;
        return $this;
    }
}
