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
 * Modele bon bleu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringModeleBonBleuTrait {

    /**
     * Modele bon bleu.
     *
     * @var string
     */
    private $modeleBonBleu;

    /**
     * Get the modele bon bleu.
     *
     * @return string Returns the modele bon bleu.
     */
    public function getModeleBonBleu() {
        return $this->modeleBonBleu;
    }

    /**
     * Set the modele bon bleu.
     *
     * @param string $modeleBonBleu The modele bon bleu.
     */
    public function setModeleBonBleu($modeleBonBleu) {
        $this->modeleBonBleu = $modeleBonBleu;
        return $this;
    }
}
