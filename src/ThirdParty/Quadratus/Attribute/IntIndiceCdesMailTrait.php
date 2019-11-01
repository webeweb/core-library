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
 * Indice cdes mail trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntIndiceCdesMailTrait {

    /**
     * Indice cdes mail.
     *
     * @var int
     */
    private $indiceCdesMail;

    /**
     * Get the indice cdes mail.
     *
     * @return int Returns the indice cdes mail.
     */
    public function getIndiceCdesMail() {
        return $this->indiceCdesMail;
    }

    /**
     * Set the indice cdes mail.
     *
     * @param int $indiceCdesMail The indice cdes mail.
     */
    public function setIndiceCdesMail($indiceCdesMail) {
        $this->indiceCdesMail = $indiceCdesMail;
        return $this;
    }
}
