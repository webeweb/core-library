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
 * Indice ligne trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntIndiceLigneTrait {

    /**
     * Indice ligne.
     *
     * @var int
     */
    private $indiceLigne;

    /**
     * Get the indice ligne.
     *
     * @return int Returns the indice ligne.
     */
    public function getIndiceLigne() {
        return $this->indiceLigne;
    }

    /**
     * Set the indice ligne.
     *
     * @param int $indiceLigne The indice ligne.
     */
    public function setIndiceLigne($indiceLigne) {
        $this->indiceLigne = $indiceLigne;
        return $this;
    }
}
