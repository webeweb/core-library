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
 * Indice bl mail trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntIndiceBlMailTrait {

    /**
     * Indice bl mail.
     *
     * @var int
     */
    private $indiceBlMail;

    /**
     * Get the indice bl mail.
     *
     * @return int Returns the indice bl mail.
     */
    public function getIndiceBlMail() {
        return $this->indiceBlMail;
    }

    /**
     * Set the indice bl mail.
     *
     * @param int $indiceBlMail The indice bl mail.
     */
    public function setIndiceBlMail($indiceBlMail) {
        $this->indiceBlMail = $indiceBlMail;
        return $this;
    }
}
