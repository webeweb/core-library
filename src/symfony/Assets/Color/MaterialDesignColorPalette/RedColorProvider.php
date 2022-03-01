<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Assets\Color\MaterialDesignColorPalette;

use WBW\Library\Symfony\Assets\Color\AbstractColorProvider;
use WBW\Library\Symfony\Assets\Color\MaterialDesignColorPaletteInterface;
use WBW\Library\Symfony\Provider\Assets\Color\RedColorProviderInterface;

/**
 * Red color provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Assets\Color\MaterialDesignColorPalette
 */
class RedColorProvider extends AbstractColorProvider implements MaterialDesignColorPaletteInterface, RedColorProviderInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.assets.color.material_design_color_palette.red";

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct(self::COLOR_DOMAIN);
    }

    /**
     * {@inheritDoc}
     */
    public function getColors(): array {
        return [
            self::COLOR_50   => self::RED_COLOR_50,
            self::COLOR_100  => self::RED_COLOR_100,
            self::COLOR_200  => self::RED_COLOR_200,
            self::COLOR_300  => self::RED_COLOR_300,
            self::COLOR_400  => self::RED_COLOR_400,
            self::COLOR_500  => self::RED_COLOR_500,
            self::COLOR_600  => self::RED_COLOR_600,
            self::COLOR_700  => self::RED_COLOR_700,
            self::COLOR_A100 => self::RED_COLOR_A100,
            self::COLOR_A200 => self::RED_COLOR_A200,
            self::COLOR_A400 => self::RED_COLOR_A400,
            self::COLOR_A700 => self::RED_COLOR_A700,
        ];
    }

    /**
     *{@inheritDoc}
     */
    public function getName(): string {
        return self::RED_COLOR_NAME;
    }
}
