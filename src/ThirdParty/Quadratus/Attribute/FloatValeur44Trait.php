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
 * Valeur44 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeur44Trait {

    /**
     * Valeur44.
     *
     * @var float
     */
    private $valeur44;

    /**
     * Get the valeur44.
     *
     * @return float Returns the valeur44.
     */
    public function getValeur44() {
        return $this->valeur44;
    }

    /**
     * Set the valeur44.
     *
     * @param float $valeur44 The valeur44.
     */
    public function setValeur44($valeur44) {
        $this->valeur44 = $valeur44;
        return $this;
    }
}
