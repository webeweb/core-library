<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Algorithm\Sorting;

/**
 * Alphabetical tree sort.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Algorithm\Sorting
 * @final
 */
final class AlphabeticalTreeSort {

    /**
     * Create a choices.
     *
     * @param AlphabeticalTreeSortInterface[] $choices The choices.
     * @return array Returns the choices.
     */
    public static function createChoices(array $choices) {

        // Initialize the output.
        $output = [];

        // Handle each node.
        foreach (self::sort($choices) as $current) {

            // Get and check the path.
            $path = self::getPath($current);
            if (false === array_key_exists($path[0]->getAlphabeticalTreeSortLabel(), $output)) {
                $output[$current->getAlphabeticalTreeSortLabel()] = [];
            }
            if (1 === count($path)) {
                continue;
            }

            // Add the node.
            $output[$path[0]->getAlphabeticalTreeSortLabel()][] = $current;
        }

        // Return the output.
        return $output;
    }

    /**
     * Compare.
     *
     * @param AlphabeticalTreeSortInterface $node1 The node 1.
     * @param AlphabeticalTreeSortInterface $node2 The node 2.
     * @return integer Returns >0 if node1 is greater than node2; 0 if they are equal and <0 if node1 is less than node2
     */
    public static function compare(AlphabeticalTreeSortInterface $node1, AlphabeticalTreeSortInterface $node2) {

        // Get the paths.
        $path1 = self::getPath($node1);
        $path2 = self::getPath($node2);

        // Count the path.
        $count = count($path1);

        // Handle each path.
        for ($i = 0; $i < $count; ++$i) {

            // Get the elements.
            $elem1 = $path1[$i];
            $elem2 = true === isset($path2[$i]) ? $path2[$i] : null;

            // Compare the elements.
            if ($elem1 !== $elem2) {
                return null !== $elem2 ? strcasecmp($elem1->getAlphabeticalTreeSortLabel(), $elem2->getAlphabeticalTreeSortLabel()) : 1;
            }
        }

        // Return egality.
        return 0;
    }

    /**
     * Get the level.
     *
     * @param AlphabeticalTreeSortInterface $node The node.
     * @return integer Returns the level.
     */
    public static function getLevel(AlphabeticalTreeSortInterface $node) {
        return count(self::getPath($node)) - 1;
    }

    /**
     * Get the path.
     *
     * @param AlphabeticalTreeSortInterface $node The node.
     * @return array Returns the path.
     */
    public static function getPath(AlphabeticalTreeSortInterface $node) {

        // Initialize the path.
        $path = [];

        // Save the node.
        $current = $node;

        // Handle each parent.
        do {
            array_unshift($path, $current);
            $current = $current->getAlphabeticalTreeSortParent();
        } while (null !== $current);

        // Return the path.
        return $path;
    }

    /**
     * Remove orphan.
     *
     * @param AlphabeticalTreeSortInterface[] $nodes The nodes.
     * @return void
     */
    public static function removeOrphan(array &$nodes = []) {

        do {

            $found = false;
            foreach ($nodes as $k => $v) {

                if (false === ($v instanceof AlphabeticalTreeSortInterface) || null === $v->getAlphabeticalTreeSortParent() || true === in_array($v->getAlphabeticalTreeSortParent(), $nodes)) {
                    continue;
                }

                unset($nodes[$k]);
                $found = true;
            }
        } while (true === $found);
    }

    /**
     * Sort.
     *
     * @param AlphabeticalTreeSortInterface[] $nodes The nodes.
     * @return array Returns the sorted nodes.
     */
    public static function sort(array $nodes = []) {

        // Sort the nodes.
        usort($nodes, [AlphabeticalTreeSort::class, "compare"]);

        // Return the nodes.
        return $nodes;
    }

}
