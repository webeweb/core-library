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
 * Salaire mensuel trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatSalaireMensuelTrait {

    /**
     * Salaire mensuel.
     *
     * @var float
     */
    private $salaireMensuel;

    /**
     * Get the salaire mensuel.
     *
     * @return float Returns the salaire mensuel.
     */
    public function getSalaireMensuel() {
        return $this->salaireMensuel;
    }

    /**
     * Set the salaire mensuel.
     *
     * @param float $salaireMensuel The salaire mensuel.
     */
    public function setSalaireMensuel($salaireMensuel) {
        $this->salaireMensuel = $salaireMensuel;
        return $this;
    }
}
