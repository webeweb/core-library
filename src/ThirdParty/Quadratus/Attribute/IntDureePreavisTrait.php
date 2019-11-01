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
 * Duree preavis trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntDureePreavisTrait {

    /**
     * Duree preavis.
     *
     * @var int
     */
    private $dureePreavis;

    /**
     * Get the duree preavis.
     *
     * @return int Returns the duree preavis.
     */
    public function getDureePreavis() {
        return $this->dureePreavis;
    }

    /**
     * Set the duree preavis.
     *
     * @param int $dureePreavis The duree preavis.
     */
    public function setDureePreavis($dureePreavis) {
        $this->dureePreavis = $dureePreavis;
        return $this;
    }
}
