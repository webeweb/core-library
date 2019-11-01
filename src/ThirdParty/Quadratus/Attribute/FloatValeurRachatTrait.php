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
 * Valeur rachat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeurRachatTrait {

    /**
     * Valeur rachat.
     *
     * @var float
     */
    private $valeurRachat;

    /**
     * Get the valeur rachat.
     *
     * @return float Returns the valeur rachat.
     */
    public function getValeurRachat() {
        return $this->valeurRachat;
    }

    /**
     * Set the valeur rachat.
     *
     * @param float $valeurRachat The valeur rachat.
     */
    public function setValeurRachat($valeurRachat) {
        $this->valeurRachat = $valeurRachat;
        return $this;
    }
}
