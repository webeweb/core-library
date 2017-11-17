<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Form\Factory;

use WBW\Library\Core\Form\Renderer\FormRenderer;

/**
 * Form factory.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Form\Factory
 * @final
 */
final class FormFactory {

	/**
	 * Create a choice type.
	 *
	 * @param array $choices The choices.
	 * @return array Returns the choice type.
	 */
	public static function createChoiceType(array $choices = []) {
		return ["choices" => array_flip($choices)];
	}

	/**
	 * Create an entity type.
	 *
	 * @param string $class The class.
	 * @param array $choices The choices.
	 * @param array $options The options.
	 * @return array $choices Returns the entity type.
	 */
	public static function createEntityType($class, array $choices = [], array $options = []) {

		// Check the options.
		if (!array_key_exists("empty", $options)) {
			$options["empty"] = false;
		}
		if (!array_key_exists("translator", $options)) {
			$options["translator"] = null;
		}

		// Initialize the output.
		$output = [
			"class"			 => $class,
			"choices"		 => [],
			"choice_label"	 => function($entity) use($options) {
				return FormRenderer::render($entity, $options["translator"]);
			},
		];

		// Add an empty choice.
		if ($options["empty"] === true) {
			$output["choices"][] = null;
		}

		// Add all choices.
		$output["choices"] = array_merge($output["choices"], $choices);

		// Return the output.
		return $output;
	}

}
