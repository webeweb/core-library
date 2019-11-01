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
 * Fct saisie caisse orientee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntFctSaisieCaisseOrienteeTrait {

    /**
     * Fct saisie caisse orientee.
     *
     * @var int
     */
    private $fctSaisieCaisseOrientee;

    /**
     * Get the fct saisie caisse orientee.
     *
     * @return int Returns the fct saisie caisse orientee.
     */
    public function getFctSaisieCaisseOrientee() {
        return $this->fctSaisieCaisseOrientee;
    }

    /**
     * Set the fct saisie caisse orientee.
     *
     * @param int $fctSaisieCaisseOrientee The fct saisie caisse orientee.
     */
    public function setFctSaisieCaisseOrientee($fctSaisieCaisseOrientee) {
        $this->fctSaisieCaisseOrientee = $fctSaisieCaisseOrientee;
        return $this;
    }
}
