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
 * Classe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringClasseTrait {

    /**
     * Classe.
     *
     * @var string
     */
    private $classe;

    /**
     * Get the classe.
     *
     * @return string Returns the classe.
     */
    public function getClasse() {
        return $this->classe;
    }

    /**
     * Set the classe.
     *
     * @param string $classe The classe.
     */
    public function setClasse($classe) {
        $this->classe = $classe;
        return $this;
    }
}
