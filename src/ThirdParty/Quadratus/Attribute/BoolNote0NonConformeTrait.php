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
 * Note0 non conforme trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolNote0NonConformeTrait {

    /**
     * Note0 non conforme.
     *
     * @var bool
     */
    private $note0NonConforme;

    /**
     * Get the note0 non conforme.
     *
     * @return bool Returns the note0 non conforme.
     */
    public function getNote0NonConforme() {
        return $this->note0NonConforme;
    }

    /**
     * Set the note0 non conforme.
     *
     * @param bool $note0NonConforme The note0 non conforme.
     */
    public function setNote0NonConforme($note0NonConforme) {
        $this->note0NonConforme = $note0NonConforme;
        return $this;
    }
}
