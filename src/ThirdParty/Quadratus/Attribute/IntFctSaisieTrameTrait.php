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
 * Fct saisie trame trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntFctSaisieTrameTrait {

    /**
     * Fct saisie trame.
     *
     * @var int
     */
    private $fctSaisieTrame;

    /**
     * Get the fct saisie trame.
     *
     * @return int Returns the fct saisie trame.
     */
    public function getFctSaisieTrame() {
        return $this->fctSaisieTrame;
    }

    /**
     * Set the fct saisie trame.
     *
     * @param int $fctSaisieTrame The fct saisie trame.
     */
    public function setFctSaisieTrame($fctSaisieTrame) {
        $this->fctSaisieTrame = $fctSaisieTrame;
        return $this;
    }
}
